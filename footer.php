<?php
/**
 * Footer template part.
 *
 * @author    eyorsogood.com, Rouie Ilustrisimo
 * @package Eyorsogood_Design
 * @version   1.0.0
 */

$is_back_to_top = qed_get_option( 'back-to-top', 'option' );
do_action('eyor_after_main_content');
?>

<footer class="footer">
	<?php get_template_part( 'templates/footer/widget-areas' ); ?>
	<div class="footer__top">
		<?php
		if ( $is_back_to_top ) {
			echo '<div class="footer__arrow-top"><a href="#"><i class="fa fa-chevron-up"></i></a></div>';
		}
		?>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h2>About Us</h2>
					<p>At Gravity Point Media, we're committed to helping
					businesses establish a strong online presence and
					enhance their digital capabilities. With a focus on
					creativity, innovation, and precision, we offer a range
					of services tailored to meet the diverse needs of our
					clients.</p>
				</div>
				<div class="col-md-2">
					<h2>Useful Links</h2>
					<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
						<nav class="main-nav-footer" role="navigation">
							<?php wp_nav_menu(array(
								'theme_location' => 'footer-menu',
								'container' => 'ul',
								'menu_class' => 'main-nav-footer',
								'menu_id' => 'navigation-footer',
								'depth' => 3,
							)); ?>
						</nav>
					<?php endif; ?>
				</div>
				<div class="col-md-4">
					<h2>Contact Us</h2>
					<p>155 Willowbrook Blvd. Ste 110,<br>Wayne, New Jersey 07470</p>
					<p><i class="fa-solid fa-phone"></i> <a href="tel:+15182074215" target="_blank">+1 518 207 4215</a></p>
					<p><i class="fa-solid fa-paper-plane"></i> <a href="mailto:info@gravitypointmedia.com" target="_blank">info@gravitypointmedia.com</a></p>
				</div>
				<div class="col-md-2">
					<h2>Follow Us</h2>
					<ul class="socials">
						<li><a href="https://www.facebook.com/gravitypointmedia" target="_blank"><i class="fa-brands fa-square-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/gravitypointmedia" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer__bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
				<div class="footer__copyright"><?php echo qed_esc_text( qed_get_option( 'footer_text_note', 'option', '&copy; '.date('Y').' Gravity Point Media. All rights reserved.' ), 'option_input', true ); ?></div>
				</div>
			</div>
		</div>
	</div>
</footer>
<input type="hidden" id="base-url" value="<?php echo home_url(); ?>">
<input type="hidden" id="ajax-url" value="<?php echo admin_url('admin-ajax.php'); ?>">
<div style="display:none" class="fancybox-hidden">
	<div id="contact-lightbox" style="display: block;max-width: 1080px;width: 100%;">
		<?php get_template_part( 'templates/lightbox', 'contact-form' );?>
	</div>
</div>
<?php
get_template_part( 'templates/footer/footer', 'clean' );
