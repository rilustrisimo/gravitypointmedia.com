<?php
/**
 * Header clean template part.
 *
 * @author    eyorsogood.com, Rouie Ilustrisimo
 * @version   1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php
	if ( ! qed_check( 'is_wordpress_seo_in_use' ) ) {
		printf( '<meta name="description" content="%s">', get_bloginfo( 'description', 'display' ) );
	}
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php acf_form_head(); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Inline content for the modal -->
<div id="request-quote" style="display: none;">
	<h3>// REQUEST A QUOTE</h3>
	<h1>Request a quote today and let's bring your vision to life!</h1>
  <?php echo do_shortcode('[contact-form-7 id="6876738" title="Request a Quote"]'); ?>
</div>
<div class="layout-content">