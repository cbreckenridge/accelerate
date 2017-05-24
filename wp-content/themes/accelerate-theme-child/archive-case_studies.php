<?php
/**
 * The template for displaying case studies
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
				$image_1 = get_field('image_1');
				$size = "full";
				$services = get_field('services');
			?>
			<aside class="case-study-info">
				<h1><a href = "<?php the_permalink();?>"><?php the_title(); ?></a></h1>
				<h3><?php echo $services?></h3>

				<p><?php the_excerpt(); ?></p>
				<a href = "<?php the_permalink();?>">View Project ></a>
			</aside>

			<div class="case-study-imgs">
				<?php if($image_1) {?>
					<a href = "<?php the_permalink();?>"><?php echo wp_get_attachment_image($image_1,$size)?></a>
				<? }?>
			</div>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
