<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ballo
 */
global $ballo;


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="keywords" content="<?php bloginfo( 'keywords' ); ?>">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">

    <!--Favicon-->
    <link rel="shortcut icon" href="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/favicon.ico" title="Favicon"/>

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/css/style.css">

    <!-- Namari Color CSS -->
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/css/namari-color.css">

    <!--Icon Fonts - Font Awesome Icons-->
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/css/font-awesome.min.css">

    <!-- Animate CSS-->
    <link href="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/css/animate.css" rel="stylesheet" type="text/css">

    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Preloader -->
<div id="preloader">
    <div id="status" class="la-ball-triangle-path">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!--End of Preloader-->

<div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
    <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
    <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
    <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
</div>

<div id="wrapper">

    <header id="banner" class="scrollto clearfix" data-enllax-ratio=".5">
        <div id="header" class="nav-collapse">
            <div class="row clearfix">
                <div class="col-1">

                    <!--Logo-->
                    <div id="logo">
                        <?php 
                            if ( is_front_page() && is_home() ) : ?>
                                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo the_custom_logo(); ?></a></h1>
                            <?php else : ?>
                                <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                            <?php
                            endif;
                         ?>    
                        <!--Logo that is shown on the banner-->
                        <!-- <img src="images/logo.png" id="banner-logo" alt="Landing Page"/> -->
                        <!--End of Banner Logo-->

                    </div>
                    <!--End of Logo-->

                    <aside>

                        <!--Social Icons in Header-->
                        <ul class="social-icons">
                            <li>
                                <?php if( !empty($ballo[ 'facebook' ])): ?>
                                <a target="_blank" title="Facebook" href="https://www.facebook.com/<?php echo $ballo[ 'facebook' ]; ?>">
                                    <i class="fa fa-facebook fa-1x"></i><span>Facebook</span>
                                </a>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if( !empty($ballo[ 'google' ])): ?>
                                <a target="_blank" title="Google+" href="http://google.com/<?php echo $ballo[ 'google' ]; ?>">
                                    <i class="fa fa-google-plus fa-1x"></i><span>Google+</span>
                                </a>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if( !empty($ballo[ 'twitter' ])): ?>
                                <a target="_blank" title="Twitter" href="http://www.twitter.com/<?php echo $ballo[ 'twitter' ]; ?>">
                                    <i class="fa fa-twitter fa-1x"></i><span>Twitter</span>
                                </a>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if( !empty($ballo[ 'instagram' ])): ?>
                                <a target="_blank" title="Instagram" href="http://www.instagram.com/<?php echo $ballo[ 'instagram' ]; ?>">
                                    <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                                </a>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if( !empty($ballo[ 'behance' ])): ?>
                                <a target="_blank" title="behance" href="http://www.behance.net/<?php echo $ballo[ 'behance' ]; ?>">
                                    <i class="fa fa-behance fa-1x"></i><span>Behance</span>
                                </a>
                                <?php endif; ?>
                            </li>
                        </ul>
                        <!--End of Social Icons in Header-->

                    </aside>

                    <!--Main Navigation-->
                    <nav id="nav-main">
                        <ul>
                            <li>
                                <a href="#banner">Home</a>
                            </li>
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <a href="#gallery">Gallery</a>
                            </li>
                            <li>
                                <a href="#services">Services</a>
                            </li>
                            <li>
                                <a href="#testimonials">Testimonials</a>
                            </li>
                            <li>
                                <a href="#clients">Clients</a>
                            </li>
                            <li>
                                <a href="#pricing">Pricing</a>
                            </li>
                        </ul>
                    </nav>
                    <!--End of Main Navigation-->

                    <div id="nav-trigger"><span></span></div>
                    <nav id="nav-mobile"></nav>

                </div>
            </div>
        </div><!--End of Header-->

