<?php
$logo  = ot_get_option( 'logo', apply_filters( 'genemy_header_logo_default', GENEMY_URI . '/images/logo.png') );
$logo_white= ot_get_option( 'logo_white', apply_filters( 'genemy_header_logo_white_default', GENEMY_URI . '/images/logo-white.png') );
$nav_style = ot_get_option( 'nav_style', 'navbar-dark bg-tra' );
$sticky_navbar = ot_get_option( 'header_sticky_nav', 'on' );

$logo = apply_filters( 'genemy_navbar_logo', $logo);
$logo_white = apply_filters( 'genemy_navbar_logo_white', $logo_white);
$sticky_navbar = apply_filters( 'genemy_sticky_navbar', $sticky_navbar);
$nav_style = apply_filters( 'genemy_navbg_style', $nav_style);


$classArr = array('navbar', 'navbar-expand-lg' );

$classArr[] = ( $sticky_navbar == 'on' )? ' fixed-top' : '';
$classArr[] = $nav_style;
$classArr = array_filter($classArr);           
?>

<header id="header" class="header navbar-style2">
	<nav class="<?php echo implode(' ', $classArr) ?>">
		<div class="container">


			<!-- LOGO IMAGE -->
			<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 284 x 72 pixels) -->
	 		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand logo-white" rel="home"><img src="<?php echo esc_url($logo_white); ?>" height="36" alt="<?php bloginfo( 'name' ); ?>"></a>
	 		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand logo-black" rel="home"><img src="<?php echo esc_url($logo); ?>" height="36" alt="<?php bloginfo( 'name' ); ?>"></a>


	 		<!-- Responsive Menu Button -->
	 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	   		 	<span class="navbar-bar-icon"><i class="fas fa-bars"></i></span>
	  		</button>


	  		<!-- Navigation Menu -->
	  		<div id="navbarSupportedContent" class="collapse navbar-collapse txt-700 rose-hover">	
	  			<?php 
		  		 $button = GenemyHeader::get_nav_button();
		  		 $icons = GenemyHeader::header_social_icons();
		  		 $searchicon = GenemyHeader::get_searchform();
		  		 $cart = function_exists('is_woocommerce') ?genemy_get_cart_icon() : '';
		          $args = array(
		            'container'       => '',		        
		            'container_class'       => '',		        
		            'container_id'       => '',		        
		            'menu_class'      => 'navbar-nav mr-auto',
		            'theme_location'  => 'primary',
		            'depth'           => 2,
		            'walker'          => new Genemy_Walker_Menu(),
		            'fallback_cb'     => 'Genemy_Walker_Menu::fallback',
		            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		          );
		          $args = apply_filters( 'genemy_navbar_style_args', $args );
		          $args = apply_filters( 'genemy_navbar_style_args', $args ); 
		          if( !function_exists('cool_megamenu') ){
		          		wp_nav_menu( $args );
		          }else{	          	
		          		cool_megamenu( $args );
		          }      
		        ?>
		      	<!-- Header Social Icons -->	
		      	<ul class="navbar-text">	
		      		<?php echo do_shortcode($searchicon.$cart.$icons.$button) ?>
			    </ul>					      	

		    </div>	<!-- End Navigation Menu -->


		</div>	  <!-- End container -->
	</nav>	   <!-- End navbar -->
</header>