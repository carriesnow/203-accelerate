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

	<div id="primary" class="site-content">
		<div class="main-content" role="main">

<section class="page-404">
<img id="wizard" src="http://localhost:8888/203-accelerate/wp-content/uploads/2018/09/wizardofoz_4675.jpg" alt="wizard of oz"/>
<h2>Oopsie! You have reached a page that does not exist!</h2>

<p>Let's get you get home again.</p>
 <a class="button" href="<?php echo site_url('/home/') ?>">To home Toto!</a>
</section>


		</div><!-- .main-content -->



	</div><!-- #primary -->

<?php get_footer(); ?>
