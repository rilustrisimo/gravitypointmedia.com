<?php
/**
 * Header template part.
 *
 * @author    eyorsogood.com, Rouie Ilustrisimo
 * @package Eyorsogood_Design
 * @version   1.0.0
 */

get_template_part( 'templates/header/header', 'clean' );

$is_sticky_header = qed_get_option( 'sticky_header', 'option' );

if ( $is_sticky_header ) {
//	SD_Js_Client_Script::add_script( 'sticky-header', 'Theme.initStickyHeader();' );
	echo '<div class="header-wrap header-wrap--sticky-header">';
}
?>
<header class="header" role="banner">
	<div class="top_layer">
		<div class="header__content-wrap container-fluid">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 top_layer__list-info">
						<ul>
							<li class="hide-mob"><i class="fa-solid fa-clock"></i> Monday - Friday 9am - 5pm</li>
							<li><i class="fa-solid fa-phone"></i> <a href="tel:+18482028782" target="_blank">+1 848 202 8782</a></li>
							<li><i class="fa-solid fa-paper-plane"></i> <a href="mailto:info@gravitypointmedia.com" target="_blank">info@gravitypointmedia.com</a></li>
						</ul>
					</div><!-- .header__content -->
					<div class="col-md-6 top_layer__socials">
						<ul>
							<li><a href="https://www.facebook.com/gravitypointmedia" target="_blank"><i class="fa-brands fa-square-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/gravitypointmedia" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
						</ul>
					</div><!-- .header__content -->
					<div class="clearfix"></div>
				</div>
			</div><!-- .container -->
		</div><!-- .header__content-wrap -->
	</div>
	<div class="clearfix"></div>
	<div class="bottom_layer">
		<div class="container-fluid">
			<div class="header__content-wrap">
				<div class="row">
					<div class="col-6 col-md-6 logo__content">
						<?php get_template_part( 'templates/header/logo' ); ?>
						<div class="clearfix"></div>
					</div><!-- .header__content -->
					<div class="col-6 col-md-6 header__content">
						<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
							<nav class="main-nav-header" role="navigation">
								<?php wp_nav_menu(array(
									'theme_location' => 'header-menu',
									'container' => 'ul',
									'menu_class' => 'main-nav',
									'menu_id' => 'navigation',
									'depth' => 3,
								)); ?>
							</nav>
						<?php endif; ?>
						<div class="clearfix"></div>
					</div><!-- .header__content -->
				</div>
			</div><!-- .header__content-wrap -->
		</div><!-- .container -->
	</div>
	<div class="clearfix"></div>
</header>
<?php if ( $is_sticky_header ) { echo '</div>'; }
SD_Js_Client_Script::add_script( 'initResizeHandler', 'Theme.initResizeHandler();' );
//SD_Js_Client_Script::add_script( 'initResizeHandler', 'Theme.initResizeHandler(' . wp_json_encode( $js_config ) . ');' );
get_template_part( 'templates/header/header', 'section' );
do_action('eyor_before_main_content');
