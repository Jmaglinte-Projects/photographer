<?php
/*
Template Name: Blog
*/
?>

<!-- NONE- Homepage -->
<?php get_header(); ?>
<?php get_template_part('banner'); ?>
<div class="container">
  <div class="nonhome-main">
    <?php while ( have_posts() ) : the_post(); ?>

    <h1 class="entry-title"><?php the_title(); ?></h1>

    <div class="entry-content">

    <?php the_content(); ?>

    <p><strong>Categories:</strong></p>
    <ul class="bycategories">
    <?php wp_list_categories('title_li='); ?>
    </ul>
    <div class="clear"></div>

    </div><!-- .entry-content -->

    <?php endwhile; // end of the loop. ?>
  </div>
</div>
<?php get_footer(); ?>
