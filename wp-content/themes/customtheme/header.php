<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and nav.
 *
 * @package customtheme
 * @subpackage 
 * @since customtheme 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?> >
    <head>
        <!--WORDPRESS BOILERPLATE-->
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
        <!--CSS Files are added from functions.php-->
        
        
        <!--   Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/vendors/css/bootstrap.css">
        <!--   Animations -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/vendors/css/animate.css">
        <!-- ***** FontAwesome CDN *******-->
        <script src="https://use.fontawesome.com/dc7d656abb.js"></script>
    
       <!--*******FAVICON******-->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/manifest.json">
        <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="assets/favicon/favicon.ico">
        <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        
        <script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
 
    </head>
    
    <body <?php body_class(); ?> >        
        
<!-- TOP NAV ****************************-->
    <div id="top-nav" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
          <div class="navbar-header logo"> <!-- Logo Container-->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://zactaylor.org/"><img class="img-responsive" alt="zactaylor.org | Logo" src="<?php bloginfo('template_directory');?>/assets/images/zac-taylor_logo.png"></a>      
          </div> <!-- End Logo-->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div id="nav-left-links" class="nav navbar-nav"> <!-- Left side links -->
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'primary-menu',
                        'container'      => false,
                        'items_wrap'      => '%3$s'
                    ) );
                ?>
            </div> <!-- end left side links -->
              <ul id="contact-right" class="nav navbar-nav navbar-right"> <!-- Right side email/phone -->
                <li><a>Phone: 724-255-3138</a></li>
                <li><a>Email: ztaylor555@gmail.com</a></li>
              </ul>
              <ul id="social-right" class="nav navbar-nav navbar-right"> <!-- Right side email/phone -->
                <li><a href="https://www.facebook.com/ztaylor555" target="_blank"><img alt="My Facebook Profile" src="<?php bloginfo('template_directory');?>/assets/images/fb_share.png"></a></li>
                <li><a href="https://www.linkedin.com/in/zac-taylor-068875119" target="_blank"><img alt="My LinkedIn Profile" src="<?php bloginfo('template_directory');?>/assets/images/LinkedIn_share.jpg"></a></li>
                <li><a target="_blank" href="https://github.com/gitZac"><img alt="My GitHub Page" src="<?php bloginfo('template_directory');?>/assets/images/github-logo.png"></a></li>
              </ul>
          </div>
        </div> <!--end Container -->
    </div> <!-- end navigation  -->