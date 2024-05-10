<?php
/**
 * Template Name: Homepage
 *
 * @author    eyorsogood.com, Rouie Ilustrisimo
 * @version   1.0.0
 */

/**
 * No direct access to this file.
 *
 * @since 1.0.0
 */
defined( 'ABSPATH' ) || die();

get_header();

$fields = get_fields(get_the_ID());

if ( have_posts() ) : ?>
	<?php while ( have_posts() ) { the_post(); ?>
		<div class="page-single container-fluid">
			<main class="page-single__content" role="main">
				<div class="container section_1" id="about">
					<div class="row">
						<div class="col-md-6 image hide-mob"><img src="<?php echo $fields['section_1']['image']['url']; ?>"></div>
						<div class="col-12 col-md-6 details">
							<h3>// WHO WE ARE</h3>
							<h1><?php echo $fields['section_1']['heading']; ?></h1>
							<p><?php echo $fields['section_1']['sub_heading']; ?></p>
							<?php echo $fields['section_1']['content_list']; ?>
						</div>
					</div>
				</div>
				<div class="container-fluid section_2" id="services">
					<div class="container items">
						<div class="row">
							<div class="col-md-12">
								<h3>// WHAT WE DO</h3>
								<h1>Our Valuable Services</h1>
							</div>
						</div>
						<div class="row">
							<?php $section2items = $fields['section_2']['items']; ?>
							<?php foreach($section2items as $item): ?>
							<div class="col-md-4 item">
								<div class="item__container">
									<div class="item__image-container">
										<div class="item__image">
											<img src="<?php echo $item['icon']['url']?>">
										</div>
									</div>
									<div class="item__title">
										<?php echo $item['title']; ?>
									</div>
									<div class="item__description">
										<?php echo $item['description']; ?>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<div class="container-fluid section_3">
					<div class="container items">
						<div class="row">
							<div class="col-md-12">
								<h3>// HOW IT WORKS</h3>
								<h1>Our Operational Procedure for Client Projects</h1>
							</div>
						</div>
						<div class="row">
							<?php $section3items = $fields['section_3']['items']; ?>
							<?php foreach($section3items as $item): ?>
							<div class="col-md-3 item">
								<div class="item__container">
									<div class="item__image-container">
										<div class="item__image">
											<img src="<?php echo $item['icon']['url']?>">
										</div>
									</div>
									<div class="item__title">
										<?php echo $item['title']; ?>
									</div>
									<div class="item__description">
										<?php echo $item['description']; ?>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<div class="container-fluid section_4" id="works">
					<div class="container items">
						<div class="row">
							<div class="col-md-12">
								<h3>// CREATIVE OUTPUTS</h3>
								<h1>Things we've made</h1>
							</div>
						</div>
						<div class="row">
						<div class="col-md-12 carousel-outer">
							<div class="slick-carousel">
								<?php 
								$section4items = $fields['section_4']['items']; 
								shuffle($section4items);
								?>
								<?php foreach($section4items as $item): ?>
									<?php 
									$file_url = $item['image']['url'];
									$file_extension = pathinfo($file_url, PATHINFO_EXTENSION);
									?>
									<div class="carousel__container">
										<div class="carousel__inner">
											<div class="carousel__deets">
												<div class="carousel__title"><?php echo $item['title']; ?></div>
												<div class="carousel__desc"><?php echo $item['description']; ?></div>
											</div>
										<?php if(in_array($file_extension, ['jpg', 'jpeg', 'png', 'gif'])): ?>
											<img src="<?php echo $file_url; ?>" alt="<?php echo $item['title']; ?>">
										<?php elseif(in_array($file_extension, ['mp4', 'webm', 'ogg'])): ?>
											<video autoplay muted loop playsinline>
												<source src="<?php echo $file_url; ?>" type="video/<?php echo $file_extension; ?>">
												Your browser does not support the video tag.
											</video>
										<?php endif; ?>
										</div>
									</div>
									<!-- Add more slides as needed -->
								<?php endforeach; ?>
							</div>
						</div>

						</div>
					</div>
				</div>

				<div class="container-fluid section_5" >
					<div class="container items">
						<div class="row">
							<div class="col-12 col-md-5 details">
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
											<div><i class="fa-solid fa-phone-volume"></i></div>
										</div>
										<div class="deets">
											<div class="label">Phone Number:</div>
											<div class="value"><a href="tel:+18883889875" target="_blank">+1 888 388 9875</a></div>
										</div>
									</li>
									<li>
										<div class="icon">
											<div><i class="fa-regular fa-comments"></i></div>
										</div>
										<div class="deets">
											<div class="label">Mail Address:</div>
											<div class="value"><a href="mailto:info@gravitypointmedia.com" target="_blank">info@gravitypointmedia.com</a></div>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-12 col-md-7">
								<div class="cfrom__container">
									<?php echo do_shortcode('[contact-form-7 id="eb7b99c" title="Homepage Contact"]'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
	<?php } ?>
<?php else :
	get_template_part( 'templates/content', 'none' );
endif;

get_footer();
