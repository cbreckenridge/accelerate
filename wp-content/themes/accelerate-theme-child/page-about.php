<?php
/**
 * The template for displaying About page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div class="about-page">
		<?php while ( have_posts() ) : the_post();?>
			<div class="about-hero">
				<h3><?php the_content(); ?></h3>
			</div>
			<h5>Our Services</h5>
			<p id="our-services"><?php echo get_field('our_services');?></p>
		<?php endwhile;?>
		<div id="services">
			<?php query_posts('post_type=services&order=asc'); ?>
			<?php while (have_posts()): the_post();
				$icon = get_field('icon');
				$size = 'full';
			?>
					<div class="service">
						<?php echo wp_get_attachment_image($icon,$size)?>
						<div class="service-text">
							<h2><?php the_title();?></h2>
							<p><?php the_content();?></p>
						</div>
					</div>
			<?php endwhile; // end of the loop. ?>
		</div>
		<div class="contact-button">
			<h2>Interested in working with us?</h2>
			<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
		</div>
	</div>

<?php get_footer(); ?>
