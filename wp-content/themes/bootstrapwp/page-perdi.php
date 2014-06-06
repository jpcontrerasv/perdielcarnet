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
    <div class="row">
        <div class="span12">
            <?php if (function_exists('bootstrapwp_breadcrumbs')) {
            bootstrapwp_breadcrumbs();
        } ?>
        </div><!--/.span12 -->
    </div><!--/.row -->
  <div class="row content">
    <div class="col-lg-12">
    <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
    </div><!-- /.span8 -->
    <?php get_footer(); ?>