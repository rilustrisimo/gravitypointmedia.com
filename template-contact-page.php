<?php
/**
 * Template Name: Contact Page
 *
 * @author    eyorsogood.com, Rouie Ilustrisimo
 * @package   SwishDesign
 * @version   1.0.0
 */

/**
 * No direct access to this file.
 *
 * @since 1.0.0
 */
defined( 'ABSPATH' ) || die();

get_header();

?>
<div class="container layout-container margin-top-large">
<?php
if ( have_posts() ) : ?>
	<?php while ( have_posts() ) { the_post(); ?>
		<div class="page-single page-contact container">
			<div class="row">
				<div class="col-md-5">
					<h3>// CONTACT US</h3>
					<h1>Connect With Us</h1>
					<p>Unlock the gateway to enhanced branding, marketing strategies, online presence, and business automation by reaching out to Gravity Point Media. </p>

					<ul class="information">
						<li>
							<div class="icon">
								<div><i class="fa-solid fa-location-pin"></i></div>
							</div>
							<div class="deets">
								<div class="label">Office Address:</div>
								<div class="value">155 Willowbrook Blvd. Ste 110, Wayne, New Jersey 07470</div>
							</div>
						</li>
						<li>
							<div class="icon">
								<div><i class="fa-solid fa-envelope"></i></div>
							</div>
							<div class="deets">
								<div class="label">PO BOX:</div>
								<div class="value">PO Box 3056, Wallington, NJ 07057</div>
							</div>
						</li>
						<li>
							<div class="icon">
								<div><i class="fa-solid fa-phone-volume"></i></div>
							</div>
							<div class="deets">
								<div class="label">Phone Number:</div>
								<div class="value"><a href="tel:+18482028782" target="_blank">+1 848 202 8782</a></div>
							</div>
						</li>
						<li>
							<div class="icon">
								<div><i class="fa-regular fa-comments"></i></div>
							</div>
							<div class="deets">
								<div class="label">E-Mail Address:</div>
								<div class="value"><a href="mailto:info@gravitypointmedia.com" target="_blank">info@gravitypointmedia.com</a></div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-7">
					<div class="cfrom__container">
						<?php echo do_shortcode('[contact-form-7 id="eb7b99c" title="Homepage Contact"]'); ?>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
<?php else :
	get_template_part( 'templates/content', 'none' );
endif;

get_footer();
