<?php
/**
 * The template for displaying single case studies
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
        $services = get_field('services');
        $client = get_field('clients');
        $link = get_field('site_link');
        $image_1 = get_field('image_1');
        $image_2 = get_field('image_2');
        $image_3 = get_field('image_3');
        $size = 'full';
      ?>
        <aside class="case-study-info">
          <h1><?php the_title(); ?></h1>
          <h3><?php echo $services?></h3>
          <h2>Client: <?php echo $client?></h2>
          <p><?php the_content();?></p>
          <a href = "<?php echo $link?>">Visit Live Site</a>
        </aside>

        <div class="case-study-imgs">
          <?php if($image_1) {?>
            <?php echo wp_get_attachment_image($image_1,$size)?>
          <? }?>
          <?php if($image_2) {?>
            <?php echo wp_get_attachment_image($image_2,$size)?>
          <? }?>
          <?php if($image_3) {?>
            <?php echo wp_get_attachment_image($image_3,$size)?>
          <? }?>
        </div>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
