<?php
/**
 * The template for displaying the 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar primary-contact-us">
		<div class="main-content content-404" role="main">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.png" class="map-image" width="150" height="150" />
        <div class="text-404">
  		    <h1>Whoops, took a wrong turn...</h1>
          <p>Sorry, this page no longer exists, never existed, or has been moved. We feel like total jerks for misleading you.
          <br>
          <br>
          Feel free to take a look around our <span class="link-404"><a href="<?php echo site_url('/blog/') ?>">blog</a></span> or some of our featured <span class="link-404"><a href="<?php echo site_url('/case-studies/') ?>">work</a></span>.</p>
        </div>
    </div><!-- .main-content -->



	</div><!-- #primary -->

<?php get_footer(); ?>
