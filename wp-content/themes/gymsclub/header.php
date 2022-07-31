<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gymsclub
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gymsclub' ); ?></a>

	<header>
        <div class="content flex_space">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
            </div>
            <div class="navlinks">
                <ul id="menulist">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#rooms">Room</a></li>
                    <li><a href="#news">news</a></li>
                    <li><a href="#contact">contact</a></li>
                    <li><i class="fa fa-search"></i></li>
                    <li><button class="primary-btn">BOOK                                    NOW</button></li>
                </ul>
                <span class="fa fa-bars" onclick="menutoggle()"></span>
            </div>
        </div>
    </header>
