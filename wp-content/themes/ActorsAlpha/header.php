<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

	<head>
	
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	
	<body <?php body_class(); ?>>
           
        <nav class="main-nav grid-121-offset">
           
            <div class="main-nav__logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/digitalzac.com_logo2.png" alt="digitalzac.com -- Custom web design, content writing and SEO." class="main-nav__logo-image">
            </div>

            <ul class="main-nav__menu">
                <li class="main-nav__menu-item"><a href="#" class="main-nav__menu-link">About</a></li>
                <li class="main-nav__menu-item"><a href="#" class="main-nav__menu-link">My Services</a></li>
                <li class="main-nav__menu-item"><a href="#" class="main-nav__menu-link">Portfolio</a></li>
                <li class="main-nav__menu-item"><a href="#" class="main-nav__menu-link">Contact Me</a></li>
                <li class="main-nav__menu-item"><a href="#" class="main-nav__menu-link">Blog</a></li>
            </ul>

            <ul class="main-nav__social">
                <li class="main-nav__social-item"><a href="#" class="main-nav__social-link">facebook</a></li>
                <li class="main-nav__social-item"><a href="#" class="main-nav__social-link">linkdin</a></li>
                <li class="main-nav__social-item"><a href="#" class="main-nav__social-link">github</a></li>
            </ul>
        </nav>

                