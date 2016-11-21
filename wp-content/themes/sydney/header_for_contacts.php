<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet">
    <?php if (!function_exists('has_site_icon') || !has_site_icon()) : ?>
        <?php if (get_theme_mod('site_favicon')) : ?>
            <link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>"/>
        <?php endif; ?>
    <?php endif; ?>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="preloader">
    <div class="spinner">
        <div class="pre-bounce1"></div>
        <div class="pre-bounce2"></div>
    </div>
</div>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'sydney'); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div class="header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-8 col-xs-12  header-logo">
                        <?php if (get_theme_mod('site_logo')) : ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>"><img
                                    class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>"
                                    alt="<?php bloginfo('name'); ?>"/></a>
                        <?php else : ?>
                            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                      rel="home"><?php bloginfo('name'); ?></a></h1>
                            <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-8 col-sm-4 col-xs-12 header-menu">
                        <div class="btn-menu"></div>
                        <nav id="mainnav" class="mainnav" role="navigation" style="color: red;">
                            <?php wp_nav_menu(array('theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback')); ?>
                        </nav><!-- #site-navigation -->
                    </div>
                    <div class="col-md-8 col-sm-4 col-xs-12 header-number">
                        <!--<img src="/wpress/wp-content/themes/sydney/img/telephone_not_fill.png" width="30" height="30"
                             style="width: 21px; height: 21px; float: left; margin-right: 10px;">-->
                        <p <!--style="overflow: hidden;-->">098 116 9555<br><a href="#"><span class="popmake-form header-number-text">Закажите обратный звонок</span></a>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
    <?php sydney_slider_template(); ?>

    <div class="header-image header-image-contacts">
        <p class="header-on-top-image">Контакты</p>
        <?php sydney_header_overlay(); ?>
        <img class="header-inner" src="/wpress/wp-content/themes/sydney/images/contacts.jpg"
             width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="<?php bloginfo('name'); ?>">
    </div>

    <div id="content" class="page-wrap" style="padding-top: 30px; padding-bottom: 0;">
        <div class="container content-wrapper">
            <div class="row">
                <!--<div class="form" style="width: 500px; height: 500px;">
                    <p>[contact-form-7 id="47" title="Заполните форму"]</p>
                </div>
-->
                <div class="top-form-container top-form-container-contacts">
                    <div class="contacts-text-left">
                        <p>Приходите к нам. Мы всегда рады нашим туристам!</p>
                        <p><span>Адрес:</span><br>  Борисполь, ул. Киевский Шлях, 2/6 ТРЦ&nbsp;Аэромолл<br>
                            <span>График работы:</span><br> <strong>Пн-Вс</strong> с 9:00 – 20:00<br>
                            <span>Телефон:</span><br>
                            <strong>063 211 95 55<br>
                                099 213 95 55<br>
                                    098 116 95 55<br></strong>
                            <span>Электронная почта:</span><br>
                            <strong>coralborispol@gmail.com</strong>
                        </p>
                    </div>
                    <div class="contacts-map-right" style="display: inline-block; vertical-align: top;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2545.1364595532696!2d30.92083026659438!3d50.36400992402535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7f2b88ab99d49d4f!2z0JDRjdGA0L7QvNC-0LvQuyDQotCg0KY!5e0!3m2!1sru!2sua!4v1479465435502" width="350" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

                