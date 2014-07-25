<?php
/**
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage WP-Bootstrap
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    
    
    
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-57-precomposed.png">
          
          
    <?php wp_head(); ?>
    <script type="text/javascript" src="//use.typekit.net/oon8xdv.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body <?php body_class(); ?>  data-spy="scroll" data-target=".bs-docs-sidebar" data-offset="10">
   <div class="col-lg-6 col-lg-offset-3 text-center">
            <h1><?php bloginfo('name'); ?></h1>
            <h3>Lo único peor que <span>perder el carnet</span> es tener que ir a sacar uno nuevo.<br> Traigamos la sana tradición republicana de poner los carnets extraviados en la vitrina de los almacenes al siglo XXI.</h3>
    </div>

    <!-- End Header. Begin Template Content -->