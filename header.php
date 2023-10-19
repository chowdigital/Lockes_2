<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cloudsdale_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'cloudsdale-master' ); ?></a>



        <header id="masthead" class="site-header">

            <div id="off-canvas-menu" class="off-canvas-menu">
                <button id="open-menu" class="menu-button container-checkbox">
                    <input type="checkbox" id="checkbox1" class="checkbox1 visuallyHidden">
                    <label for="checkbox1">
                        <div class="hamburger hamburger1">
                            <span class="bar bar1"></span>
                            <span class="bar bar2"></span>
                            <span class="bar bar3"></span>
                            <span class="bar bar4"></span>
                        </div>
                    </label>
                </button>
                <div class="menu-content">
                    <!-- Add your navigation menu items here -->
                    <?php /* wp_nav_menu(array('theme_location' => 'primary-menu')); */ ?>
                    <!-- Dummy menu Start -->

                    <div id="fancyMenu" class="menu">
                        <ul>
                            <li class="page_item page-item-6 current_page_item">Home</li>
                            <li class="page_item page-item-2">Sample Page</li>
                            <li class="page_item page-item-3">Sample Page</li>
                            <li class="page_item page-item-4">Sample Page</li>
                            <li class="page_item page-item-5">Sample Page</li>
                            <li class="page_item page-item-6">Sample Page</li>
                            <li class="page_item page-item-7">Sample Page</li>
                            <li class="page_item page-item-8">Sample Page</li>
                        </ul>
                    </div>
                    <!-- Dummy menu End -->
                </div>

            </div>
            <a href="#" id="bookBtn" class="book-btn hover-border-11">
                <span class="book-span">book</span>
            </a>
            <a href="#" id="mainLogo" class="">
                <img class="text-logo" src="<?php echo get_template_directory_uri(); ?>/assets/logos/logo.svg" alt="">
                <img class="img-logo" src="<?php echo get_template_directory_uri(); ?>/assets/logos/logo-icon.svg"
                    alt="">
            </a>
        </header><!-- #masthead -->