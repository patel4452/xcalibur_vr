jQuery(document).ready(function($){

  "use strict";


  $('#genemy_settings_box').show();
  $('#genemy_onepage_sttings_boxes').insertAfter('#edit-slug-box').hide();
  $('#genemy_onepage_footer_sttings_boxes').hide();

  if($('#page_template').length > 0){
    
      $(document).on('change', '#page_template', function(){
        if( $(this).val() == 'templates/onepage-template.php'  ){
          $('#genemy_settings_box').hide();
          $('#genemy_onepage_sttings_boxes').show();
          $('#genemy_onepage_footer_sttings_boxes').show();
        }else{
          $('#genemy_settings_box').show();
          $('#genemy_onepage_sttings_boxes').hide();
          $('#genemy_onepage_footer_sttings_boxes').hide();
        }       
      })

      $('#page_template').trigger('change');

    }

    $('.edit-menu-item-megamenustyle').on( 'change', function(){
        if( $(this).val() != '' ){
          $(this).closest('li').find('.megamenucolumn-wrap').show();
        }else{
          $(this).closest('li').find('.megamenucolumn-wrap').hide();
        }
    })

     

    $(document).on('click','.genemy-upload-button', function(e) {
      var $button = $(this),
      $val = $(this).parents('.genemy-upload-container').find('input:text'),
      file;
      e.preventDefault();
      e.stopPropagation();
      // If the frame already exists, reopen it

      if (typeof(file) !== 'undefined') file.close();
      // Create WP media frame.
      file = wp.media.frames.perch_media_frame_2 = wp.media({
        // Title of media manager frame
        title: 'Genemy Upload image',
        button: {
          //Button text
          text: 'Insert image url'
        },
        // Do not allow multiple files, if you want multiple, set true
        multiple: false
      });

      //callback for selected image
      file.on('select', function() {
        var attachment = file.state().get('selection').first().toJSON();
        $val.val(attachment.url).trigger('change');
        $button.closest('.genemy-upload-container').find('img').attr('src', attachment.url);
      });
      // Open modal
      file.open();
    });	

    $(document).on('change','.perch-typography-setting .perch-typography-field', function(){
        var $parent = $(this).closest('.perch-typography-setting');
        var $typography_value = '';
        $parent.find('.perch-typography-field').each(function(){
            if( 'undefined' !== $(this).data('name') ){
                var $name = $(this).data('name');
                var $value = $(this).val();
                if( '' != $value ){
                  $typography_value = $typography_value + $name + ':' + $value + '|';
                }
            }
        })
        $parent.find('.perch_vc_typography_field').val($typography_value);
        
    });

    
})/*end ready*/