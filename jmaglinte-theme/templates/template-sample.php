<?php
/*
Template Name: Sample-Template
*/
?>

<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <!-- Page Title -->
      <h1><?php the_title(); ?></h1>
      <h2>This is a sample template</h2>

      <?php //get_template_part('includes/section','content'); ?>
    </div>
  </div>

</div>

<?php get_footer(); ?>
