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
                <div class="menu-content">
                    <!-- Add your navigation menu items here -->
                    <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
                </div>
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

                <div class="container-checkbox">

                    <input type="checkbox" id="checkbox1" class="checkbox1 visuallyHidden">
                    <label for="checkbox1">
                        <div class="hamburger hamburger1">
                            <span class="bar bar1"></span>
                            <span class="bar bar2"></span>
                            <span class="bar bar3"></span>
                            <span class="bar bar4"></span>
                        </div>
                    </label>

                </div>

            </div>
        </header><!-- #masthead -->