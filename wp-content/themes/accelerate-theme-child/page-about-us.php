<?php
/**
 * The template for displaying all pages
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
		<div class="main-content-about" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->


	<div id="primary" class="site-content">
	<div class="main-content-about" role="main">
		<div class="our-services">
		<h4>Our Services</h4>
		<p>We take pride in our clients and the contect we create for them.</p>
		<p>Here'e a brief overview of our offered services.</p>
		</div>	

<section class="service-details">
		<?php query_posts('post_type=our_services'); ?>
		<?php while ( have_posts() ) : the_post(); 
			$image = get_field('image');
			$size = "medium"; ?>
</section>

<section class="service-details">			
		<div id="one-third">
			<figure id="about-image">
			<?php if($image){ 
			echo wp_get_attachment_image($image, $size);
			} ?>
			</figure>
		</div>

		<div id="two-thirds">
			<h2><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
		</div>
</section>
	
			<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
	</div><!-- #primary -->


<section class="about-cta">
	<div class="cta-left">
		<h2>Interested in working with us?</h2>
	</div>
	<div class="cta-right">
		<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
	</div>
</section>

<?php get_footer(); ?>



