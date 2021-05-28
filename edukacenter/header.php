<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edukacenter
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
<div class="container-fluid">
    <div class="content">
        <header class="header">
            <img class="header__logo" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/logo.png'; ?>" alt="edukacenter-logo" />

            <menu class="header__menu">
                <ul class="header__menu__list">
                    <li class="header__menu__item">
                        <a class="header__menu__link" href="#">
                            Strona główna
                        </a>
                    </li>
                    <li class="header__menu__item">
                        <a class="header__menu__link" href="#">
                            Wybierz kurs
                        </a>
                    </li>
                    <li class="header__menu__item">
                        <a class="header__menu__link" href="#">
                            Certyfikaty
                        </a>
                    </li>
                    <li class="header__menu__item">
                        <a class="header__menu__link" href="https://facebook.com">
                            <img class="header__menu__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/facebook.svg'; ?>" alt="facebook" />
                        </a>
                    </li>
                    <li class="header__menu__item">
                        <a class="header__menu__link" href="https://instagram.com">
                            <img class="header__menu__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/instagram.svg'; ?>" alt="instagram" />
                        </a>
                    </li>
                </ul>
            </menu>

            <!-- MOBILE -->
            <button class="hamburgerBtn" onclick="openMobileMenu()">
                <img class="hamburgerBtn__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/hamburger.png'; ?>" alt="menu" />
            </button>
            <menu class="mobileMenu">
                <button class="mobileMenu__closeBtn" onclick="closeMobileMenu()">
                    <img class="mobileMenu__closeBtn__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/close.png'; ?>" alt="wyjdz" />
                </button>

                <img class="mobileMenu__logo" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/logo.png'; ?>" alt="edukacenter" />

                <ul class="mobileMenu__list">
                    <li class="mobileMenu__list__item">Strona główna</li>
                    <li class="mobileMenu__list__item">Wybierz kurs</li>
                    <li class="mobileMenu__list__item">Certyfikaty</li>
                </ul>

                <div class="mobileMenu__socialMedia">
                    <a href="https://facebook.com">
                        <img class="mobileMenu__socialMedia__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/facebook.svg'; ?>" alt="facebook" />
                    </a>
                    <a href="https://instagram.com">
                        <img class="mobileMenu__socialMedia__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/instagram.svg'; ?>" alt="instagram" />
                    </a>
                </div>
            </menu>

            <!-- END MOBILE -->
        </header>