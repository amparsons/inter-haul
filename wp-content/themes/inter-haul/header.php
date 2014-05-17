<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title(''); ?></title>
        <meta name="description" content="">
        
        <!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
        
        <link rel="shortcut icon" href="favicon.ico">
  		<!-- For third-generation iPad with high-resolution Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-144x144-precomposed.png">
        <!-- For iPhone with high-resolution Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-114x114-precomposed.png">
        <!-- For first- and second-generation iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-72x72-precomposed.png">
        <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
        <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-precomposed.png">

        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.min.css">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Squada+One' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/selectivizr-min.js"></script>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class($page_slug); ?>>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="wrapper">
        	<a href="#" class="toggle">Menu</a>
            <div class="mobile-container">
                <nav class="mobile">
                    <?php
                        wp_nav_menu(
                            array(
                            'menu'		  => 'main-menu',
                            'container'       => '',
                            'menu_class'	=> 'holder'
                        ));
                    ?>
                </nav>
            </div>
            <header>
				<a href="<?php bloginfo('url'); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/img/inter-haul-logo.png" alt="Inter Haul"></a>
				<?php
                    wp_nav_menu(
                        array(
                        'menu'		  => 'main-menu',
						'container'       => '',
                        'menu_class'	=> 'mainmenu'
                    ));
                ?>
                <ul class="social">
                    <li><a class="facebook" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/social-default.png" width="20" height="20" alt="Facebook"></a></li>
                    <li><a class="linkedin" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/social-default.png" width="20" height="20" alt="Facebook"></a></li>
                    <li><a class="twitter" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/social-default.png" width="20" height="20" alt="Facebook"></a></li>
                    <li><a class="youtube" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/social-default.png" width="20" height="20" alt="Facebook"></a></li>
                </ul>
			</header>