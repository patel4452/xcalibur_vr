<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The admin-specific functionality of the plugin.
 *
 * Admin Settings
 *
 * @package    Email_Subscribers
 * @subpackage Email_Subscribers/admin
 * @author     Your Name <email@example.com>
 */
class ES_Newsletters {

	// class instance
	public static $instance;

	// class constructor
	public function __construct() {
		add_filter( 'ig_es_refresh_newsletter_content', array( $this, 'refresh_newsletter_content' ), 10, 2 );

		// Ajax handler for drafting broadcast
		add_action( 'wp_ajax_ig_es_draft_broadcast', array( $this, 'draft_broadcast' ) );

		// Ajax handler for broadcast preview
		add_action( 'wp_ajax_ig_es_preview_broadcast', array( $this, 'preview_broadcast' ) );

		// Ajax handler for starting processing of broadcast in background when 'Send Now' option is chosen while creating broadcast
		add_action( 'wp_ajax_ig_es_trigger_broadcast_processing', array( $this, 'trigger_broadcast_processing' ) );

		add_action( 'admin_init', array( $this, 'process_broadcast_submission' ) );

		// Add tracking fields data
		add_filter( 'ig_es_broadcast_data', array( $this, 'add_tracking_fields_data' ) );

		if ( ! ES()->is_pro() ) {
			// Add scheduler data
			add_filter( 'ig_es_broadcast_data', array( &$this, 'es_add_broadcast_scheduler_data' ), 10, 2 );
		}

		// Check campaign wise open tracking is enabled.
		add_filter( 'ig_es_track_open', array( $this, 'is_open_tracking_enabled' ), 10, 4 );
	}

	public static function set_screen( $status, $option, $value ) {
		return $value;
	}

	/**
	 * Method to process broadcast submission.
	 *
	 * @since 4.4.7
	 */
	public function process_broadcast_submission() {

		global $wpdb;
		
		$submitted      = ig_es_get_request_data( 'ig_es_broadcast_submitted' );
		$broadcast_data = ig_es_get_request_data( 'broadcast_data', array(), false );
		
		if ( 'submitted' === $submitted ) {
			$broadcast_nonce = ig_es_get_request_data( 'ig_es_broadcast_nonce' );
			// Verify nonce.
			if ( wp_verify_nonce( $broadcast_nonce, 'ig-es-broadcast-nonce' ) ) {
				$list_id     = ! empty( $broadcast_data['list_ids'] ) ? $broadcast_data['list_ids'] : '';
				$template_id = ! empty( $broadcast_data['template_id'] ) ? $broadcast_data['template_id'] : '';
				$subject     = ! empty( $broadcast_data['subject'] ) ? $broadcast_data['subject'] : '';

				// Check if user has added required data for creating broadcast.
				if ( ! empty( $broadcast_data['subject'] ) && ! empty( $broadcast_data['body'] ) && ! empty( $list_id ) && ! empty( $subject ) ) {
					$broadcast_data['base_template_id'] = $template_id;
					$broadcast_data['list_ids']         = $list_id;
					$broadcast_data['status']           = IG_ES_CAMPAIGN_STATUS_SCHEDULED;
					$meta                               = ! empty( $broadcast_data['meta'] ) ? $broadcast_data['meta'] : array();
					$meta['scheduling_option']          = ! empty( $broadcast_data['scheduling_option'] ) ? $broadcast_data['scheduling_option'] : 'schedule_now';
					$meta['es_schedule_date']           = ! empty( $broadcast_data['es_schedule_date'] ) ? $broadcast_data['es_schedule_date'] : '';
					$meta['es_schedule_time']           = ! empty( $broadcast_data['es_schedule_time'] ) ? $broadcast_data['es_schedule_time'] : '';
					$meta['pre_header']                 = ! empty( $broadcast_data['pre_header'] ) ? $broadcast_data['pre_header'] : '';
					$broadcast_data['meta']             = maybe_serialize( $meta );

					self::es_send_email_callback( $broadcast_data );

					if ( 'schedule_now' === $meta['scheduling_option'] ) {
						ES()->init_action_scheduler_queue_runner( 'ig_es_trigger_broadcast_processing' );
					}

					$campaign_url = admin_url( 'admin.php?page=es_campaigns&action=broadcast_created' );

					wp_safe_redirect( $campaign_url );
					exit();
				}
			} else {
				$message = __( 'Sorry, you are not allowed to add/edit broadcast.', 'email-subscribers' );
				ES_Common::show_message( $message, 'error' );
			}
		}
	}

	public function es_newsletters_settings_callback() {

		global $wpdb;

		$broadcast_id   = ig_es_get_request_data( 'list' );
		$submitted      = ig_es_get_request_data( 'ig_es_broadcast_submitted' );
		$broadcast_data = ig_es_get_request_data( 'broadcast_data', array(), false );
		$message_data   = array();

		if ( 'submitted' === $submitted ) {

			// If form is submitted then broadcast id is sent in $broadcast_data array.
			$broadcast_id = ! empty( $broadcast_data['id'] ) ? $broadcast_data['id'] : '';
			$list_id      = ! empty( $broadcast_data['list_ids'] ) ? $broadcast_data['list_ids'] : '';
			$template_id  = ! empty( $broadcast_data['template_id'] ) ? $broadcast_data['template_id'] : '';
			$subject      = ! empty( $broadcast_data['subject'] ) ? $broadcast_data['subject'] : '';

			if ( empty( $broadcast_data['subject'] ) ) {
				$message      = __( 'Please add a broadcast subject.', 'email-subscribers' );
				$message_data = array(
					'message' => $message,
					'type'    => 'error',
				);
			} elseif ( empty( $broadcast_data['body'] ) ) {
				$message      = __( 'Please add message body or select template', 'email-subscribers' );
				$message_data = array(
					'message' => $message,
					'type'    => 'error',
				);
			} elseif ( empty( $list_id ) ) {
				$message      = __( 'Please select list.', 'email-subscribers' );
				$message_data = array(
					'message' => $message,
					'type'    => 'error',
				);
			} elseif ( empty( $subject ) ) {
				$message      = __( 'Please add the subject', 'email-subscribers' );
				$message_data = array(
					'message' => $message,
					'type'    => 'error',
				);
			}
		}

		if ( ! empty( $broadcast_id ) ) {

			$broadcast_query = $wpdb->prepare( ' id = %d LIMIT 0, 1', $broadcast_id );
			$broadcasts      = ES()->campaigns_db->get_by_conditions( $broadcast_query );

			$broadcast      = array_shift( $broadcasts );
			$broadcast_data = array(
				'id'          	 => $broadcast['id'],
				'name'        	 => $broadcast['name'],
				'subject'     	 => $broadcast['subject'],
				'from_name' 	 => $broadcast['from_name'],
				'from_email' 	 => $broadcast['from_email'],
				'reply_to_email' => $broadcast['reply_to_email'],
				'body'        	 => $broadcast['body'],
				'list_ids'   	 => $broadcast['list_ids'],
				'template_id'	 => $broadcast['base_template_id'],
				'status'     	 => $broadcast['status'],
				'meta'       	 => maybe_unserialize( $broadcast['meta'] ),
			);
		}

		$this->prepare_newsletter_settings_form( $broadcast_data, $message_data );
	}

	/**
	 * Method to display newsletter setting form
	 *
	 * @param array $broadcast_data Posted broadcast data
	 *
	 * @since  4.4.2 Added $broadcast_data param
	 */
	public function prepare_newsletter_settings_form( $broadcast_data = array(), $message_data = array() ) {
		$newsletter_data = array();

		$template_id = ! empty( $broadcast_data['template_id'] ) ? $broadcast_data['template_id'] : '';
		$list_ids    = ! empty( $broadcast_data['list_ids'] ) ? $broadcast_data['list_ids'] : '';
		$templates   = ES_Common::prepare_templates_dropdown_options( 'newsletter', $template_id );
		$lists       = ES_Common::prepare_list_dropdown_options( $list_ids );
		$from_email  = ES_Common::get_ig_option( 'from_email' );

		$broadcast_id         = ! empty( $broadcast_data['id'] ) ? $broadcast_data['id'] : '';
		$broadcast_from_name  = ! empty( $broadcast_data['from_name'] ) ? $broadcast_data['from_name'] : get_option( 'ig_es_from_name' );
		$broadcast_email      = ! empty( $broadcast_data['from_email'] ) ? $broadcast_data['from_email'] : $from_email;
		$broadcast_reply_to   = ! empty( $broadcast_data['reply_to_email'] ) ? $broadcast_data['reply_to_email'] : $from_email;
		$broadcast_subject    = ! empty( $broadcast_data['subject'] ) ? $broadcast_data['subject'] : '';
		$broadcast_pre_header = ! empty( $broadcast_data['pre_header'] ) ? $broadcast_data['pre_header'] : '';
		$broadcast_status     = ! empty( $broadcast_data['status'] ) ? (int) $broadcast_data['status'] : 0;

		// Flag to check if broadcast is not being send or already sent.
		$is_broadcast_processing = false;

		if ( ! empty( $broadcast_status ) ) {

			$broadcast_allowed_edit_statuses = array(
				IG_ES_CAMPAIGN_STATUS_ACTIVE,
				IG_ES_CAMPAIGN_STATUS_IN_ACTIVE,
				IG_ES_CAMPAIGN_STATUS_SCHEDULED,
			);

			if ( ! in_array( $broadcast_status, $broadcast_allowed_edit_statuses ) ) {
				$is_broadcast_processing = true;
			}

			$scheduling_disabled_message = '';
			if ( IG_ES_CAMPAIGN_STATUS_QUEUED === $broadcast_status ) {
				$scheduling_disabled_message = __( 'Scheduling is disabled for this broadcast since it is being sent.', 'email-subscribers' );
			} elseif ( IG_ES_CAMPAIGN_STATUS_FINISHED === $broadcast_status ) {
				$scheduling_disabled_message = __( 'Scheduling is disabled for this broadcast since it has been sent already.', 'email-subscribers' );
			}

			if ( ! empty( $scheduling_disabled_message ) ) {
				$message_data = array(
					'message' => $scheduling_disabled_message,
					'type'    => 'error',
				);
			}
		}

		// Allow multiselect for lists field in the pro version by changing list field's class,name and adding multiple attribute.
		$select_list_attr  	= ES()->is_pro() ? 'multiple="multiple"' : '';
		$select_list_name  	= ES()->is_pro() ? 'broadcast_data[list_ids][]' : 'broadcast_data[list_ids]';
		$select_list_class 	= ES()->is_pro() ? 'ig-es-form-multiselect' : 'form-select';

		$allowedtags 		= ig_es_allowed_html_tags_in_esc();
		?>

		<div class="font-sans wrap">
			<?php
			if ( ! empty( $message_data ) ) {
				$message = $message_data['message'];
				$type    = $message_data['type'];
				ES_Common::show_message( $message, $type );
			}
			?>
			<form action="#" method="POST" id="broadcast_form">
				<input type="hidden" id="broadcast_id" name="broadcast_data[id]" value="<?php echo esc_attr( $broadcast_id ); ?>"/>
				<input type="hidden" id="broadcast_status" name="broadcast_data[status]" value="<?php echo esc_attr( $broadcast_status ); ?>"/>
				<?php wp_nonce_field( 'ig-es-broadcast-nonce', 'ig_es_broadcast_nonce' ); ?>
				<fieldset class="block es_fieldset">
					<div class="mx-auto wp-heading-inline max-w-7xl">
						<header class="mx-auto max-w-7xl">
							<div class="pb-2 md:flex md:items-center md:justify-between">
								<div class="flex md:3/5 lg:w-7/12 xl:w-3/5">
									<div class="flex min-w-0 md:w-3/5 lg:w-1/2">
										<span class="pt-1.5 text-base font-normal leading-7 sm:leading-9 sm:truncate text-indigo-600"><a href="admin.php?page=es_campaigns"><?php echo esc_html__( 'Campaigns', 'email-subscribers' ); ?></a></span>
										<svg class="w-6 h-6 mx-1 mt-4" fill="currentColor" viewBox="0 0 24 24">
											<path
													fill-rule="evenodd"
													d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
													clip-rule="evenodd"
											></path>
										</svg>

										<h2 class="pt-1 text-2xl font-medium leading-7 text-gray-900 sm:leading-9 sm:truncate"> <?php echo esc_html__( 'Broadcast', 'email-subscribers' ); ?>
										</h2>
									</div>
									<div class="flex pt-3  md:-mr-8 lg:-mr-16 xl:mr-0 md:ml-8 lg:ml-16 xl:ml-20">
										<ul id="progressbar" class="overflow-hidden">
											<li id="content_menu" class="relative float-left px-1 pb-2 text-center list-none cursor-pointer active ">
												<span class="mt-1 text-base font-medium tracking-wide text-gray-400 active"><?php echo esc_html__( 'Content', 'email-subscribers' ); ?></span>
											</li>
											<li id="summary_menu" class="relative float-left px-1 pb-2 ml-5 text-center list-none cursor-pointer hover:border-2 ">
												<span class="mt-1 text-base font-medium tracking-wide text-gray-400"><?php echo esc_html__( 'Summary', 'email-subscribers' ); ?></span>
											</li>
										</ul>
									</div>
								</div>
								<div class="flex mt-4 md:mt-0 md:ml-2 xl:ml-4">

									<div id="broadcast_button" class="inline-block text-left ">
										<button type="button"
												class="inline-flex justify-center w-full py-2 text-sm font-medium leading-5 text-indigo-600 transition duration-150 ease-in-out border border-indigo-500 rounded-md cursor-pointer select-none next_btn hover:text-indigo-500 hover:shadow-md focus:outline-none focus:shadow-outline-indigo focus:shadow-lg hover:border-indigo-600 md:px-2 lg:px-3 xl:px-4">
												<?php
												echo esc_html__( 'Next', 'email-subscribers' );
												?>
											<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 20 20" class="w-3 h-3 my-1 ml-2 -mr-1 text-indigo-600">
												<path d="M9 5l7 7-7 7"></path>
											</svg>
										</button>
									</div>

									<div id="broadcast_button1" class="flex hidden mt-4 md:mt-0 md:ml-2 xl:ml-4">
								<span>
									<div class="relative inline-block text-left">
										<span>
											<button type="button"
													class="inline-flex justify-center w-full py-2 text-sm font-medium leading-5 text-indigo-600 transition duration-150 ease-in-out border border-indigo-500 rounded-md cursor-pointer select-none pre_btn md:px-1 lg:px-3 xl:px-4 hover:text-indigo-500 hover:border-indigo-600 hover:shadow-md focus:outline-none focus:shadow-outline-indigo focus:shadow-lg ">
											<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" viewBox="0 0 20 20" class="w-3 h-3 my-1 mr-1"><path d="M15 19l-7-7 7-7"></path></svg><?php echo esc_html__( 'Previous', 'email-subscribers' ); ?>
										</button>
									</span>
								</div>
							</span>
									</div>

									<span class="md:ml-2 xl:ml-3">
							<button type="button" class="inline-flex items-center w-full py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md ig_es_draft_broadcast md:px-2 lg:px-3 xl:px-4 hover:bg-gray-50 focus:outline-none focus:shadow-outline focus:border-blue-300">
								<?php echo esc_html__( 'Save Draft', 'email-subscribers' ); ?>
							</button>
						</span>

									<span id="broadcast_button2" class="hidden md:ml-2 xl:ml-3">
							<div class="relative inline-block text-left">
								<span>
									<?php
									// If broadcast is sent or being sent then don't allow scheduling to conflicts.
									if ( ! $is_broadcast_processing ) {
										?>
										<button type="submit" id="ig_es_broadcast_submitted" name="ig_es_broadcast_submitted" class="inline-flex justify-center py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md md:px-2 lg:px-3 xl:px-4 hover:bg-indigo-500 hover:text-white"
												value="submitted">
										<?php 
										if ( ES()->is_pro() ) {
											echo esc_html__( 'Schedule', 'email-subscribers' );
										} else {
											echo esc_html__( 'Send', 'email-subscribers' );
										}
									}
									?>
								</button>

							</span>
						</div>
					</span>
								</div>
							</div>
						</header>
					</div>
					<div class="mx-auto max-w-7xl">
						<hr class="wp-header-end">
					</div>
					<div class="mx-auto my-4 es_broadcast_first max-w-7xl">
						<div>
							<div class=" bg-white rounded-lg shadow-md md:flex">
								<div class="broadcast_main_content py-4 pl-2">
									<div class="block px-4 py-2">
										<label for="ig_es_broadcast_subject" class="text-sm font-medium leading-5 text-gray-700"><?php echo esc_html__( 'Subject', 'email-subscribers' ); ?></label>
										<input id="ig_es_broadcast_subject" class="block w-full mt-1 text-sm leading-5 border-gray-400 rounded-md shadow-sm form-input" name="broadcast_data[subject]" value="<?php echo esc_attr( $broadcast_subject ); ?>"/>
									</div>
									<div class="block px-4 py-2">
										<label for="from_name" class="text-sm font-medium leading-5 text-gray-700 "><?php echo esc_html__( 'From Name', 'email-subscribers' ); ?></label>
										<input id="from_name" class="block w-full mt-1 text-sm leading-5 border-gray-400 rounded-md shadow-sm form-input" name="broadcast_data[from_name]" value="<?php echo esc_attr( $broadcast_from_name ); ?>"/>
									</div>
									<div class="block px-4 py-2">
										<label for="from_email" class="text-sm font-medium leading-5 text-gray-700"><?php echo esc_html__( 'From Email', 'email-subscribers' ); ?></label>
										<input id="from_email" class="block w-full mt-1 text-sm leading-5 border-gray-400 rounded-md shadow-sm form-input" name="broadcast_data[from_email]" value="<?php echo esc_attr( $broadcast_email ); ?>"/>
									</div>
									 <div class="block px-4 py-2">
										<label for="reply_to" class="text-sm font-medium leading-5 text-gray-700"><?php echo esc_html__( 'Reply To', 'email-subscribers' ); ?></label>
										<input id="reply_to" class="block w-full mt-1 text-sm leading-5 border-gray-400 rounded-md shadow-sm form-input" name="broadcast_data[reply_to_email]" value="<?php echo esc_attr( $broadcast_reply_to ); ?>"/>
									</div>

									<div class="w-full px-4 pt-1 pb-2 mt-1">
										<label for="message" class="text-sm font-medium leading-5 text-gray-700"><?php echo esc_html__( 'Message', 'email-subscribers' ); ?></label>
										<?php
										$body        = ! empty( $broadcast_data['body'] ) ? $broadcast_data['body'] : '';
										$editor_args = array(
											'textarea_name' => 'broadcast_data[body]',
											'textarea_rows' => 40,
											'media_buttons' => true,
											'tinymce'      => true,
											'quicktags'    => true,
											'editor_class' => 'wp-editor-boradcast',
										);
										wp_editor( $body, 'edit-es-boradcast-body', $editor_args );
										?>
									</div>
									<?php do_action( 'ig_es_after_broadcast_left_pan_settings', $broadcast_data ); ?>
								</div>
								<div class="broadcast_side_content ml-2 bg-gray-100 rounded-r-lg">
									<div class="block pt-6 mx-4 pb-3">
										<label for="template" class="text-sm font-medium leading-5 text-gray-700"><?php echo esc_html__( 'Design Template', 'email-subscribers' ); ?></label>
										<select class="block w-full h-8 mt-1 text-sm rounded-md cursor-pointer h-9 form-select" name="broadcast_data[template_id]" id="base_template_id">
											<?php 
											echo wp_kses( $templates, $allowedtags ); 
											?>
										</select>
									</div>
									<div class="block py-2 mx-4 ">
										<label for="recipients" class="text-sm font-medium leading-5 text-gray-700"><?php echo esc_html__( 'Recipients', 'email-subscribers' ); ?></label>
										<select <?php echo esc_attr( $select_list_attr ); ?> class="block w-full h-8 mt-1 text-sm rounded-md cursor-pointer h-9 <?php echo esc_attr( $select_list_class ); ?>" name="<?php echo esc_attr( $select_list_name ); ?>" id="ig_es_broadcast_list_ids">
											<?php
											 echo wp_kses( $lists, $allowedtags ); 
											?>
										</select>
										<div class="block mt-1">
											<span id="ig_es_total_contacts"></span>
										</div>
									</div>

									<div class="block pt-1 mx-4">
										<span class="block pt-2 text-sm font-medium leading-5 text-gray-700 border-t border-gray-200"><?php echo esc_html__( 'Preview', 'email-subscribers' ); ?></span>
										<div class="py-2">
											<input type="radio" name="preview_option" class="form-radio" id="preview_in_popup" value="preview_in_popup" checked>
											<label for="preview_in_popup" class="text-sm font-normal text-gray-600"><?php echo esc_html__( 'Browser', 'email-subscribers' ); ?>
											</label>
											<br>
										</div>

										<img class="es-loader inline-flex align-middle" src="<?php echo esc_url( ES_PLUGIN_URL ); ?>lite/public/images/spinner.gif" style="display:none;"/>

										<div class="hidden" id="preview_template">
											<div class="fixed top-0 left-0 z-50 flex items-center justify-center w-full h-full" style="background-color: rgba(0,0,0,.5);">
												<div class="absolute h-auto p-4 ml-16 mr-4 text-left bg-white rounded shadow-xl z-80 md:max-w-5xl md:p-6 lg:p-8 ">
													<h3 class="text-2xl text-center"><?php echo esc_html__( 'Template Preview', 'email-subscribers' ); ?></h3>
													<p class="m-4 text-center"><?php echo esc_html__( 'There could be a slight variation on how your customer will view the email content.', 'email-subscribers' ); ?></p>
													<div class="m-4 list-decimal broadcast_preview_container">
													</div>
													<div class="flex justify-center mt-8">
														<button id="close_template" class="px-4 py-2 text-sm font-medium tracking-wide text-gray-700 border rounded select-none no-outline focus:outline-none focus:shadow-outline-red hover:border-red-400 active:shadow-lg "><?php echo esc_html__( 'Close', 'email-subscribers' ); ?></button>
													</div>
												</div>
											</div>
										</div>

										<?php do_action( 'ig_es_after_broadcast_content_left_pan_settings', $broadcast_data ); ?>

										<button id="es_test_email_btn" type="button"
												class="rounded-md border text-indigo-600 border-indigo-500 text-sm leading-5 font-medium transition ease-in-out duration-150 select-none inline-flex justify-center hover:text-indigo-500 hover:border-indigo-600 hover:shadow-md focus:outline-none focus:shadow-outline-indigo focus:shadow-lg mt-1 px-4 py-2">
											<span><?php echo esc_html__( 'Preview', 'email-subscribers' ); ?></span>
										</button>
										<img class="es-loader inline-flex align-middle pl-2 h-5 w-7" src="<?php echo esc_url( ES_PLUGIN_URL ); ?>lite/admin/images/spinner-2x.gif" style="display:none;"/>
										<br/><span class="es-send-success es-icon" style="display:none;"><?php esc_html_e( 'Email Sent Successfully ', 'email-subscribers' ); ?></span>
										<br/><span class="es-send-error es-icon" style="display:none;"><?php esc_html_e( 'Something went wrong. Please try again later', 'email-subscribers' ); ?></span>
									</div>
								</div>
							</div>
						</div>
				</fieldset>

				<fieldset class="es_fieldset">

					<div class="my-4 hidden mx-auto es_broadcast_second max-w-7xl">
						<?php
						$inline_preview_data = $this->get_broadcast_inline_preview_data( $broadcast_data );
						?>
						<div class="max-w-7xl">
							<div class=" bg-white rounded-lg shadow md:flex">
								<div class="py-4 my-4 broadcast_main_content pt-3 pl-2">
									<div class="block pb-2 mx-4">
										<span class="text-sm font-medium text-gray-500"><?php echo esc_html__( 'Email Content Preview', 'email-subscribers' ); ?></span>
									</div>

									<div class="block pb-2 mx-4 mt-4 inline_broadcast_preview_container">
										<div class="block">
											<span class="text-2xl font-normal text-gray-600 broadcast_preview_subject"><?php echo ! empty( $broadcast_data['subject'] ) ? esc_html( $broadcast_data['subject'] ) : ''; ?></span>
										</div>
										<div class="block mt-3">
											<span class="text-sm font-bold text-gray-800 broadcast_preview_contact_name"><?php echo ! empty( $inline_preview_data['contact_name'] ) ? esc_html( $inline_preview_data['contact_name'] ) : ''; ?></span>
											<span class="pl-1 text-sm font-medium text-gray-700 broadcast_preview_contact_email"><?php echo ! empty( $inline_preview_data['contact_email'] ) ? esc_html('&lt;' . $inline_preview_data['contact_email'] . '&gt;' ) : ''; ?></span>
										</div>
										<div class="block mt-3 broadcast_preview_content">
											<?php
											if ( ! empty( $broadcast_data['body'] ) ) {
												$template_data['content']     = ! empty( $broadcast_data['body'] ) ? $broadcast_data['body'] : '';
												$template_data['template_id'] = ! empty( $broadcast_data['template_id'] ) ? $broadcast_data['template_id'] : '';
												$tempate_html                 = '';
												ob_start();
												$this->es_broadcast_preview_callback( $template_data );
												$tempate_html = ob_get_clean();
												echo wp_kses( $tempate_html, $allowedtags);
											}
											?>
										</div>
									</div>

								</div>

								<div class="broadcast_side_content ml-2 bg-gray-100 rounded-r-lg">
									<div id="ig_es_total_recipients" class="block mx-4 	border-b border-gray-200">

									</div>

									<?php do_action( 'ig_es_after_broadcast_right_pan_settings', $broadcast_data ); ?>

									<div class="block w-full px-4 py-2">
										<?php
										$enable_open_tracking = ! empty( $broadcast_data['meta']['enable_open_tracking'] ) ? $broadcast_data['meta']['enable_open_tracking'] : get_option( 'ig_es_track_email_opens', 'yes' );
										?>
										<div class="flex w-full pt-2 border-t border-gray-200">
											<div class="w-11/12 text-sm font-normal text-gray-600"><?php echo esc_html__( 'Open Tracking', 'email-subscribers' ); ?>
											</div>
											<div>
												<label for="enable_open_tracking" class="inline-flex items-center cursor-pointer ">
								<span class="relative">
									<input id="enable_open_tracking" type="checkbox" class="absolute w-0 h-0 opacity-0 es-check-toggle"
										   name="broadcast_data[meta][enable_open_tracking]" value="yes"  <?php checked( $enable_open_tracking, 'yes' ); ?>/>
									<span class="block w-8 h-5 bg-gray-300 rounded-full shadow-inner es-mail-toggle-line"></span>
									<span class="absolute inset-y-0 left-0 block w-3 h-3 mt-1 ml-1 transition-all duration-300 ease-in-out bg-white rounded-full shadow es-mail-toggle-dot focus-within:shadow-outline"></span>
								</span>
												</label>
											</div>
										</div>
										<?php do_action( 'ig_es_after_broadcast_tracking_options_settings', $broadcast_data ); ?>
									</div>

									<?php do_action( 'ig_es_broadcast_scheduling_options_settings', $broadcast_data ); ?>
								</div>

							</div>
						</div>
					</div>

				</fieldset>
			</form>
		</div>

		<?php
	}

	public static function es_send_email_callback( $data ) {

		$list_id = ! empty( $data['list_ids'] ) ? $data['list_ids'] : '';

		$title = get_the_title( $data['base_template_id'] );

		$data['type'] = 'newsletter';
		$data['name'] = $data['subject'];
		$data['slug'] = sanitize_title( sanitize_text_field( $data['name'] ) );

		$data = apply_filters( 'ig_es_broadcast_data', $data );

		if ( ! empty( $data['body'] ) ) {

			$campaign_id = ! empty( $data['id'] ) ? $data['id'] : 0;

			if ( ! empty( $campaign_id ) ) {

				ES()->campaigns_db->save_campaign( $data, $campaign_id );

				$notification = ES_DB_Mailing_Queue::get_notification_by_campaign_id( $campaign_id );
				$data['body'] = ES_Common::es_process_template_body( $data['body'], $data['base_template_id'], $campaign_id );

				$subscribers = ES()->contacts_db->get_active_contacts_by_list_id( $list_id );
				$guid        = ES_Common::generate_guid( 6 );
				$data        = array(
					'hash'        => $guid,
					'campaign_id' => $campaign_id,
					'subject'     => $data['subject'],
					'body'        => $data['body'],
					'count'       => count( $subscribers ),
					'status'      => 'In Queue',
					'start_at'    => ! empty( $data['start_at'] ) ? $data['start_at'] : '',
					'finish_at'   => '',
					'created_at'  => ig_get_current_date_time(),
					'updated_at'  => ig_get_current_date_time(),
					'meta'        => maybe_serialize( array( 'type' => 'newsletter' ) ),
				);

				if ( empty( $notification ) ) {
					$last_report_id = ES_DB_Mailing_Queue::add_notification( $data );
					if ( ! empty( $subscribers ) && count( $subscribers ) > 0 ) {
						$delivery_data                     = array();
						$delivery_data['hash']             = $guid;
						$delivery_data['subscribers']      = $subscribers;
						$delivery_data['campaign_id']      = $campaign_id;
						$delivery_data['mailing_queue_id'] = $last_report_id;
						ES_DB_Sending_Queue::do_batch_insert( $delivery_data );
					}
				} else {
					$notification_id     = $notification['id'];
					$notification_status = $notification['status'];
					// Check if notification is not sending or already sent then only update the notification.
					if ( ! in_array( $notification_status, array( 'Sending', 'Sent' ), true ) ) {
						// Don't update this data.
						$data['hash']        = $notification['hash'];
						$data['campaign_id'] = $notification['campaign_id'];
						$data['created_at']  = $notification['created_at'];
						$notification        = ES_DB_Mailing_Queue::update_notification( $notification_id, $data );
					}
				}
			}
		}

		return;

	}

	public static function refresh_newsletter_content( $content, $args ) {
		$campaign_id        = $args['campaign_id'];
		$template_id        = ES()->campaigns_db->get_template_id_by_campaign( $campaign_id );
		$content['subject'] = ES()->campaigns_db->get_column( 'subject', $campaign_id );
		$content['body']    = ES()->campaigns_db->get_column( 'body', $campaign_id );
		$content['body']    = ES_Common::es_process_template_body( $content['body'], $template_id, $campaign_id );

		return $content;
	}

	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function es_broadcast_preview_callback( $template_data ) {

		$template_id = $template_data['template_id'];
		$campaign_id = ! empty( $template_data['campaign_id'] ) ? $template_data['campaign_id'] : 0;
		if ( ! empty( $template_data['content'] ) ) {
			$current_user = wp_get_current_user();
			$username     = $current_user->user_login;
			$useremail    = $current_user->user_email;
			$display_name = $current_user->display_name;

			$contact_id = ES()->contacts_db->get_contact_id_by_email( $useremail );
			$first_name = '';
			$last_name  = '';

			// Use details from contacts data if present else fetch it from wp profile.
			if ( ! empty( $contact_id ) ) {
				$contact_data = ES()->contacts_db->get_by_id( $contact_id );
				$first_name   = $contact_data['first_name'];
				$last_name    = $contact_data['last_name'];
			} elseif ( ! empty( $display_name ) ) {
				$contact_details = explode( ' ', $display_name );
				$first_name      = $contact_details[0];
				// Check if last name is set.
				if ( ! empty( $contact_details[1] ) ) {
					$last_name = $contact_details[1];
				}
			}
			// $first_name   =

			$es_template_body = $template_data['content'];

			$es_template_body = ES_Common::es_process_template_body( $es_template_body, $template_id, $campaign_id );
			$es_template_body = str_replace( '{{NAME}}', $username, $es_template_body );
			$es_template_body = str_replace( '{{EMAIL}}', $useremail, $es_template_body );
			$es_template_body = str_replace( '{{FIRSTNAME}}', $first_name, $es_template_body );
			$es_template_body = str_replace( '{{LASTNAME}}', $last_name, $es_template_body );
			$allowedtags 	  = ig_es_allowed_html_tags_in_esc();
			add_filter( 'safe_style_css', 'ig_es_allowed_css_style' );

			if ( has_post_thumbnail( $template_id ) ) {
				$image_array = wp_get_attachment_image_src( get_post_thumbnail_id( $template_id ), 'full' );
				$image       = '<img src="' . $image_array[0] . '" class="img-responsive" alt="Image for Post ' . $template_id . '" />';
			} else {
				$image = '';
			}

			$html  = '';
			$html .= '<style type="text/css">
			.es-main-preview-block{
				display:flex;
			}
			.es-clear-preview{
				clear: both;
			}
			
		</style>
		<div class="wrap">
		<div class="tool-box">
		<div class="es-main-preview-block">
		<div class="es-preview broadcast-preview w-full">' . $es_template_body . '</div>
		<div class="es-clear-preview"></div>
		</div>
		<div class="es-clear-preview"></div>
		</div>
		</div>';
			echo wp_kses( apply_filters( 'the_content', $html ), $allowedtags);
		}

	}

	/**
	 * Method to draft a broadcast
	 *
	 * @return $response Broadcast response.
	 *
	 * @since 4.4.7
	 */
	public function draft_broadcast() {

		check_ajax_referer( 'ig-es-admin-ajax-nonce', 'security' );

		$response = array();

		$broadcast_data = ig_es_get_request_data( 'broadcast_data', array(), false );

		$broadcast_id = ! empty( $broadcast_data['id'] ) ? $broadcast_data['id'] : null;
		$is_updating  = ! empty( $broadcast_id ) ? true : false;
		$list_id      = ! empty( $broadcast_data['list_ids'] ) ? $broadcast_data['list_ids'] : '';
		$template_id  = ! empty( $broadcast_data['template_id'] ) ? $broadcast_data['template_id'] : '';
		$subject      = ! empty( $broadcast_data['subject'] ) ? $broadcast_data['subject'] : '';

		$broadcast_data['base_template_id'] = $template_id;
		$broadcast_data['list_ids']         = $list_id;
		$broadcast_data['status']           = ! empty( $broadcast_data['status'] ) ? 1 : 0;
		$meta                               = ! empty( $broadcast_data['meta'] ) ? $broadcast_data['meta'] : array();
		$meta['pre_header']                 = ! empty( $broadcast_data['pre_header'] ) ? $broadcast_data['pre_header'] : '';
		$broadcast_data['meta']             = maybe_serialize( $meta );

		$broadcast_data['type'] = 'newsletter';
		$broadcast_data['name'] = $broadcast_data['subject'];
		$broadcast_data['slug'] = sanitize_title( sanitize_text_field( $broadcast_data['name'] ) );

		$broadcast_data = apply_filters( 'ig_es_broadcast_data', $broadcast_data );

		$result = ES()->campaigns_db->save_campaign( $broadcast_data, $broadcast_id );

		if ( ! empty( $result ) ) {
			if ( ! $is_updating ) {
				// In case of insert, result is broadcast id.
				$response['broadcast_id'] = $result;
			} else {
				// In case of update, only update flag is returned.
				$response['broadcast_id'] = $broadcast_id;
			}
			wp_send_json_success( $response );
		} else {
			wp_send_json_error();
		}

	}

	/**
	 * Method to get preview HTML for broadcast
	 *
	 * @return $response
	 *
	 * @since 4.4.7
	 */
	public function preview_broadcast() {

		check_ajax_referer( 'ig-es-admin-ajax-nonce', 'security' );

		$response = array();

		$preview_type   = ig_es_get_request_data( 'preview_type' );
		$broadcast_data = ig_es_get_request_data( 'broadcast_data', array(), false );

		$template_data['content']     = ! empty( $broadcast_data['body'] ) ? $broadcast_data['body'] : '';
		$template_data['template_id'] = ! empty( $broadcast_data['template_id'] ) ? $broadcast_data['template_id'] : '';
		$template_data['campaign_id'] = ! empty( $broadcast_data['id'] ) ? $broadcast_data['id'] : 0;

		$tempate_html = '';
		ob_start();
		$this->es_broadcast_preview_callback( $template_data );
		$tempate_html              = ob_get_clean();
		$response['template_html'] = $tempate_html;

		if ( 'inline' === $preview_type ) {
			$inline_preview_data = $this->get_broadcast_inline_preview_data( $broadcast_data );
			$response            = array_merge( $response, $inline_preview_data );
		}

		if ( ! empty( $response ) ) {
			wp_send_json_success( $response );
		} else {
			wp_send_json_error();
		}

	}

	/**
	 * Method to get broadcast inline preview data.
	 *
	 * @param array $broadcast_data Broadcast data.
	 *
	 * @return array $preview_data
	 *
	 * @since 4.4.7
	 */
	public function get_broadcast_inline_preview_data( $broadcast_data = array() ) {
		$list_id      = ! empty( $broadcast_data['list_ids'] ) ? $broadcast_data['list_ids'] : 0;
		$preview_data = array();
		$first_name   = '';
		$last_name    = '';
		$email        = '';

		if ( ! empty( $list_id ) ) {
			// Check if multiple lists selection is enabled.
			if ( is_array( $list_id ) && ! empty( $list_id ) ) {
				// Since we need to get only one sample email for showing the preview, we can get it from the first list itself.
				$list_id = $list_id[0];
			}
			$subscribed_contacts = ES()->lists_contacts_db->get_subscribed_contacts_from_list( $list_id );
			if ( ! empty( $subscribed_contacts ) ) {
				$subscribed_contact = array_shift( $subscribed_contacts );
				$contact_id         = ! empty( $subscribed_contact['contact_id'] ) ? $subscribed_contact['contact_id'] : 0;
				if ( ! empty( $contact_id ) ) {
					$subscriber_data = ES()->contacts_db->get_by_id( $contact_id );
					if ( ! empty( $subscriber_data ) ) {
						$first_name = ! empty( $subscriber_data['first_name'] ) ? $subscriber_data['first_name'] : '';
						$last_name  = ! empty( $subscriber_data['last_name'] ) ? $subscriber_data['first_name'] : '';
						$email      = ! empty( $subscriber_data['email'] ) ? $subscriber_data['email'] : '';
					}
				}
			}
		}

		$preview_data['broadcast_subject'] = ! empty( $broadcast_data['subject'] ) ? esc_html( $broadcast_data['subject'] ) : '';
		$preview_data['contact_name']      = esc_html( $first_name . ' ' . $last_name );
		$preview_data['contact_email']     = esc_html( $email );

		return $preview_data;
	}

	/**
	 * Method to trigger immediate processing of broadcast with "Send Now" option.
	 *
	 * @return void
	 *
	 * @since 4.4.7
	 */
	public function trigger_broadcast_processing() {

		// Start processing of broadcast which are scheduled for current date time.
		do_action( 'ig_es_cron_worker' );
	}

	/**
	 * Function to add values of checkbox fields incase they are not checked.
	 *
	 * @param array $broadcast_data
	 *
	 * @return array $broadcast_data
	 *
	 * @since 4.4.7
	 */
	public function add_tracking_fields_data( $broadcast_data = array() ) {

		$broadcast_meta = ! empty( $broadcast_data['meta'] ) ? maybe_unserialize( $broadcast_data['meta'] ) : array();

		if ( empty( $broadcast_meta['enable_open_tracking'] ) ) {
			$broadcast_meta['enable_open_tracking'] = 'no';
		}

		$broadcast_data['meta'] = maybe_serialize( $broadcast_meta );

		return $broadcast_data;
	}

	/**
	 * Add required broadcast schedule date/time data
	 *
	 * @param array $data
	 *
	 * @return array $data
	 *
	 * @since 4.4.7
	 */
	public function es_add_broadcast_scheduler_data( $data ) {

		$scheduling_option = ! empty( $data['scheduling_option'] ) ? $data['scheduling_option'] : 'schedule_now';

		$schedule_str = '';

		if ( 'schedule_now' === $scheduling_option ) {
			// Get time without GMT offset, as we are adding later on.
			$schedule_str = current_time( 'timestamp', false );
		}

		if ( ! empty( $schedule_str ) ) {
			$gmt_offset_option = get_option( 'gmt_offset' );
			$gmt_offset        = ( ! empty( $gmt_offset_option ) ) ? $gmt_offset_option : 0;
			$schedule_date     = gmdate( 'Y-m-d H:i:s', $schedule_str - ( $gmt_offset * HOUR_IN_SECONDS ) );

			$data['start_at'] = $schedule_date;
			$meta             = ! empty( $data['meta'] ) ? maybe_unserialize( $data['meta'] ) : array();
			$meta['type']     = 'one_time';
			$meta['date']     = $schedule_date;
			$data['meta']     = maybe_serialize( $meta );
		}

		return $data;
	}

	/**
	 * Method to check if open tracking is enabled broadcast wise.
	 *
	 * @param bool  $is_track_email_opens Is open tracking enabled.
	 * @param int   $contact_id Contact ID.
	 * @param int   $campaign_id Campaign ID.
	 * @param array $link_data Link data.
	 *
	 * @return bool $is_track_email_opens Is open tracking enabled.
	 *
	 * @since 4.4.7
	 */
	public function is_open_tracking_enabled( $is_track_email_opens, $contact_id, $campaign_id, $link_data ) {
		if ( ! empty( $link_data ) ) {
			$campaign_id = ! empty( $link_data['campaign_id'] ) ? $link_data['campaign_id'] : 0;
			if ( ! empty( $campaign_id ) ) {
				$campaign = ES()->campaigns_db->get( $campaign_id );
				if ( ! empty( $campaign ) ) {
					$campaign_type = $campaign['type'];
					if ( 'newsletter' === $campaign_type ) {
						$campaign_meta        = maybe_unserialize( $campaign['meta'] );
						$is_track_email_opens = ! empty( $campaign_meta['enable_open_tracking'] ) ? $campaign_meta['enable_open_tracking'] : $is_track_email_opens;
					}
				}
			}
		}

		return $is_track_email_opens;
	}
}
