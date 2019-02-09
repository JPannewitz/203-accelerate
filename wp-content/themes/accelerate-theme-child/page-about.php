<?php
/**
 * The template for displaying the About page
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

	<div id="primary" class="about-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>


			<?php endwhile; // end of the loop. ?>




		</div><!-- .main-content -->

	</div><!-- #primary -->


        <article class="services-list">

          <?php while ( have_posts() ) : the_post();
						$services_header = get_field('services_header');
						$general_services_copy = get_field('general_services_copy');
            $image_1 = get_field('image_1');
						$image_2 = get_field('image_2');
						$image_3 = get_field('image_3');
						$image_4 = get_field('image_4');
						$service_1 = get_field('service_1');
						$service_2 = get_field('service_2');
						$service_3 = get_field('service_3');
						$service_4 = get_field('service_4');
						$service_description_1 = get_field('service_description_1');
						$service_description_2 = get_field('service_description_2');
						$service_description_3 = get_field('service_description_3');
						$service_description_4 = get_field('service_description_4');
            $size = "medium";

            ?>

						<div class="services-header">
							<h2><span class="all-caps"><?php echo $services_header; ?></span></h2>
							<p><?php echo $general_services_copy; ?></p>
						</div>

						<div class="service-1">
							<?php if($image_1) {
	              echo wp_get_attachment_image( $image_1, $size );
	            } ?>
							<div class="individual-service-left">
								<h2><?php echo $service_1; ?></h2>
								<p><?php echo $service_description_1; ?></p>
							</div>
						</div>

						<div class="service-2">
							<div class="individual-service-right">
								<h2><?php echo $service_2; ?></h2>
								<p><?php echo $service_description_2; ?></p>
							</div>
							<?php if($image_1) {
	              echo wp_get_attachment_image( $image_2, $size );
	            } ?>
						</div>

						<div class="service-3">
							<?php if($image_1) {
	              echo wp_get_attachment_image( $image_3, $size );
	            } ?>
							<div class="individual-service-left">
								<h2><?php echo $service_3; ?></h2>
								<p><?php echo $service_description_3; ?></p>
							</div>
						</div>

						<div class="service-4">
							<div class="individual-service-right">
								<h2><?php echo $service_4; ?></h2>
								<p><?php echo $service_description_4; ?></p>
							</div>
							<?php if($image_1) {
	              echo wp_get_attachment_image( $image_4, $size );
	            } ?>
						</div>



        <?php endwhile; ?>
      </article>

			<nav id="navigation" class="container">
				<div><span class="interested-in-working">Interested in working with us?</span><a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a></div>
			</nav>

<?php get_footer(); ?>
