<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package suburbangrown
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
 <!-- <meta charset="<?php// blog_info( 'charset' ); ?>"> -->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- TODO: Wordpressify -->
  <title>Foundation for Sites</title>
  <link rel="stylesheet" href="wp-content/themes/foundation/css/foundation.css">
  <link rel="stylesheet" href="wp-content/themes/foundation/style.css">
  <?php wp_head(); ?>
</head>

<body>
    <div class="grid-container page-container">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'suburbangrown' ); ?></a>
            <header id="header">
                <div class="grid-x grid-padding-x">
                    <div class="large-12 cell">
                        <div class="site-title">
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                           
                                <!-- <h2 class="site-tagline">Site Tagline</h2> -->
                        </div>
                    </div>
                </div>
            </header>
            <div class="large-12 cell">
                    <nav>
                    <div class="menu-bar">
                        <ul class="menu">
                            <?php
                                /*wp_nav_menu( array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                ) );*/
                            ?>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                    </nav>
                </div>
        <div class="grid-x grid-padding-x" name="content-container">