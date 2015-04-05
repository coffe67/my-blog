<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
    <!--<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script> -->
	<![endif]-->
	<?php wp_head(); ?>

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <link rel='stylesheet' id='po-bootstrap-style-css'  href='<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='po-style-css'  href='<?php echo get_template_directory_uri(); ?>/style.css' type='text/css' media='all' />
    <!--[if lt IE 9]>
    <link rel='stylesheet' id='po-ie-css'  href='<?php echo get_template_directory_uri(); ?>/css/ie.css' type='text/css' media='all' />
    <![endif]-->
    <link rel='stylesheet' id='po-google-font-css'  href='http://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C600%2C700&amp;ver=3.9.1' type='text/css' media='all' />
    <link rel='stylesheet' id='po-font-awesome-css'  href='<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-style-css'  href='<?php echo get_template_directory_uri(); ?>/css/custom-style.css' type='text/css' media='all' />
</head>

<body <?php body_class(); ?>>
<form role="search" method="get" class="search-form-noslide">
    <i class="fa fa-search search-icon-form-noslide"></i>
    <input type="search" class="search-field" value="" name="s" autofocus >
</form>
<div class="search-icon"></div>
<a href="search.html">
    <div class="search-icon-mobile visible-xs visible-sm"></div>
</a>
<?php $nav_class='po-nav nav-fixed-padding' ?>
<?php global $post; ?>
<?php if (is_home() || is_front_page() ): ?>
    <?php $nav_class = 'po-slider-display po-nav po-nav-slide' ?>
<div class="po-slider-details" data-details-animation="po-fade-in" data-details-delay="1500">
    <div class="container po-slider-buttons">
        <div class="row">
            <div class="col-md-12 col-sm-offset-">
                <!--<button class="slider-btn po-slider-anchor btn outline-button white btn-lg btn-block btn-icon-ani center-block" id="learn-more-button" type="button">
                    Learn more
                </button>-->
            </div>
        </div>
    </div>
</div>

<div class="po-slider-text-container" data-text-delay="2500">
    <div class="po-slider-text center-block" data-text-animation="po-fade-in">
        <h1 class="po-slider-header text-center">Bringing you closer to pixel perfection.</h1>

        <h1 class="po-slider-header text-center">Powerful features. Easy to use.</h1>

        <h1 class="po-slider-header text-center">Create an amazing user experience — fast.</h1>
    </div>
</div>

<div class="po-slider">
    <div class="po-slider-load" id="po-slider-load"></div>

    <div class="load-block"></div>

    <div class="background-greyscale green"></div>

    <ul class="po-slider-loop">
        <?php $upload_dir = wp_upload_dir(); ?>
        <li>
            <img alt="tumblr_mxrv2tfdaT1st5lhmo1_1280_mini" class="attachment-full wp-post-image" height="850" src="<?php echo $upload_dir['baseurl'];?>/2015/04/head_0.jpg" width="1280">
        </li>

        <li>
            <img alt="tumblr_mtw7pktaK11st5lhmo1_1280_mini" class="attachment-full wp-post-image" height="848" src="<?php echo $upload_dir['baseurl'];?>/2015/04/head_1.jpg" width="1280">
        </li>

        <li>
            <img alt="tumblr_mr80c9Mbkt1st5lhmo1_1280_mini" class="attachment-full wp-post-image" height="850" src="<?php echo $upload_dir['baseurl'];?>/2015/04/head_2.jpg" width="1280">
        </li>
    </ul>
</div>
<?php endif; ?>
<div class="to-top"></div>

<div class="<?php echo $nav_class; ?>">
    <nav class="navbar po-navbar po-navbar-slide">
        <!-- Mobile display -->

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links for toggling -->
        <?php wp_nav_menu(personal_navigation_args());?>
        <!--<div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav" id="menu-header">
                <li class="menu-item dropdown active">
                    <a class="dropdown-toggle" data-target="#" data-toggle=
                    "dropdown" href=
                       "#">Home</a>

                    <ul class="dropdown-menu">
                        <li class="active"><a href="home-landing.html">Home:
                                Landing</a></li>

                        <li><a href=
                               "home-parallax.html">Home:
                                Parallax</a></li>
                    </ul>
                </li>

                <li class="portfolio"><a href=
                                         "portfolio.html">Portfolio</a></li>

                <li class="team"><a href=
                                    "team.html">Team</a></li>

                <li class="menu-item dropdown">
                    <a class="dropdown-toggle" data-target="#" data-toggle=
                    "dropdown" href=
                       "#">Pages</a>

                    <ul class="dropdown-menu">
                        <li><a href=
                               "about.html">About</a></li>

                        <li><a href=
                               "contact.html">Contact</a></li>

                        <li><a href=
                               "holding.html">Holding</a></li>

                        <li><a href=
                               "sidebar-page.html">Sidebar
                                Page</a></li>

                        <li><a href=
                               "full-width.html">Full
                                width</a></li>

                        <li><a href=
                               "archives.html">Archives</a></li>
                    </ul>
                </li>

                <li><a href=
                       "blog.html">Blog</a></li>
            </ul>
        </div>-->
    </nav>

    <div class="po-page">
