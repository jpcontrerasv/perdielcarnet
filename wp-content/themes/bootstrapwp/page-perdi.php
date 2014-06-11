<?php
/**
 * Template Name: ¡Perdí mi Carnet!
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

  <div class="container">
    <!--/.row -->
  <div class="row content">
    <div class="col-lg-12">
    <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
    </div><!-- /.span8 -->
    <?php get_footer(); ?>