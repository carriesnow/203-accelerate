<?php
/**
 * The template for displaying case studies
 *

 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content-archives" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('link');
				$image_1 = get_field('image_1');
				$size = "full"; ?>
				
				

<article class="case-study">
	<aside class="case-study-sidebar">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<h4><?php echo $services; ?></h4>
		<?php the_excerpt(); ?>
		<p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project ›</a></p>
	</aside>


	<div class="mailchimp-img">
		<a href="<?php the_permalink(); ?>">
		<?php if($image_1){ 
		echo wp_get_attachment_image( $image_1, $size);
		} ?> </a>


	</div>
</article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
