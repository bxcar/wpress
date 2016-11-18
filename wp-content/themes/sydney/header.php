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
    <script src="/wpress/wp-content/themes/sydney/js/script_for_form_button.js"></script>
    <!--    <link rel="stylesheet" href="/wpress/wp-content/themes/sydney/fancybox/jquery.fancybox.css"  />-->
    <!--    <link rel="icon" href="/lp/ru/img/favicon.ico" type="image/x-icon">-->
    <!--    <link rel="shortcut icon" href="/lp/ru/img/favicon.ico" type="image/x-icon">-->
    <!---->
    <!---->
    <!--    <!--[if lt IE 10]>-->
    <!--    <script src="/wpress/wp-content/themes/sydney/js/html5shiv.js"></script>-->
    <!--    <p class="browsehappy">Вы используете <strong>устаревший</strong> браузер. Пожалуйста, <a href="http://browsehappy.com/" target="_blank">обновите свой браузер,</a> чтобы улучшить отображение сайта.</p>-->
    <!--    <![endif]-->
    <!---->
    <!--    <script type="text/javascript" src="/wpress/wp-content/themes/sydney/js/lib/jquery-1.8.0.min.js"></script>-->
    <!--    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>-->
    <!---->
    <!--    <script type="text/javascript" src="/wpress/wp-content/themes/sydney/fancybox/jquery.fancybox.pack.js"></script>-->
    <!--    <script type="text/javascript" src="/wpress/wp-content/themes/sydney/js/lib/jquery.cookie.js"></script>-->
    <!---->
    <!--    <script src="/wpress/wp-content/themes/sydney/js/jquery.maskedinput.min.js"></script>-->
    <!--<!--    <script src="/wpress/wp-content/themes/sydney/js/scripts1.js"></script>-->
    <!--    <script src="/wpress/wp-content/themes/sydney/js/multi.js"></script>-->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic"
        rel="stylesheet">
    <?php if (!function_exists('has_site_icon') || !has_site_icon()) : ?>
        <?php if (get_theme_mod('site_favicon')) : ?>
            <link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>"/>
        <?php endif; ?>
    <?php endif; ?>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('a[rel="fancybox"]').fancybox();
    });
</script>-->
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
                        <p <!--style="overflow: hidden;-->">098 116 9555<br><span class="header-number-text">Звоните нам сейчас!</span></p>

                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
    <?php sydney_slider_template(); ?>

    <div class="header-image">
        <?php sydney_header_overlay(); ?>
        <img class="header-inner" src="<?php header_image(); ?>"
             width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="<?php bloginfo('name'); ?>">
    </div>

    <div id="content" class="page-wrap" style="padding-top: 30px; padding-bottom: 0;">
        <div class="container content-wrapper">
            <div class="row">
                <!--<div class="form" style="width: 500px; height: 500px;">
                    <p>[contact-form-7 id="47" title="Заполните форму"]</p>
                </div>
-->
                <div class="top-form-container">
                    <div class="form-descr box">
                        <h3>Получите <br/>
                            1000&nbsp;грн. на тур*</h3>

                        <p><span>Акция!</span> Дарим сертификат на 1000&nbsp;грн. на покупку тура*
                            всем
                            посетителям
                            сайта. <br/>
                            Просто заполните форму.</p>

                        <p><span>Осталось всего 7 сертификатов!</span></p>
                    </div>
                    <div class="sidebar-column col-md-4">
                        <aside id="text-2" class="widget widget_text"><h3 class="widget-title"
                                                                          style="text-align: center; width: 93%;">
                                Заполните форму сейчас</h3>
                            <p class="under-header-in-form">и получите 5 вариантов отдыха с подробным расчётом цен</p>
                            <div class="textwidget">
                                <div role="form" class="wpcf7" id="wpcf7-f47-o1" lang="ru-RU" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <form id="contact-form" action="/wpress/#wpcf7-f47-o1" method="post"
                                          class="wpcf7-form"
                                          novalidate="novalidate">
                                        <div style="display: none;">
                                            <input type="hidden" name="_wpcf7" value="47">
                                            <input type="hidden" name="_wpcf7_version" value="4.5.1">
                                            <input type="hidden" name="_wpcf7_locale" value="ru_RU">
                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f47-o1">
                                            <input type="hidden" name="_wpnonce" value="3f027fa8db">
                                        </div>
                                        <!--<p><label> Ваше имя (обязательно)<br>-->
                                            <span class="wpcf7-form-control-wrap your-name"><input type="text"
                                                                                                   style="width: 100%;"
                                                                                                   name="your-name"
                                                                                                   placeholder="Ваше имя*"
                                                                                                   value="" size="40"
                                                                                                   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                   aria-required="true"
                                                                                                   aria-invalid="false"></span>
                                        <!--                                        </label></p>-->
                                        <!--                                        <p><label> Контактный телефон (обязательно)<br>-->
                                            <span class="wpcf7-form-control-wrap tel-564"><input type="tel"
                                                                                                 style="width: 100%;"
                                                                                                 name="tel-564"
                                                                                                 placeholder="Контактный телефон*"
                                                                                                 value=""
                                                                                                 size="40"
                                                                                                 class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                                                                                 aria-invalid="false"></span>
                                        <!--                                        </label></p>-->
                                        <!--                                        <p><label> Пожелания к туру<br>-->
                                            <span class="wpcf7-form-control-wrap your-message"><textarea
                                                    name="your-message"
                                                    placeholder="Пожелания к туру*"
                                                    cols="40" rows="10"
                                                    class="wpcf7-form-control wpcf7-textarea"
                                                    aria-invalid="false"></textarea></span> </label></p>
                                        <p><input id="submit-but" type="submit" value="Отправить"><!--<img class="ajax-loader"
                                                                                               src="http://localhost/wpress/wp-content/plugins/contact-form-7/images/ajax-loader.gif"
                                                                                               alt="Отправка..."
                                                                                               style="visibility: hidden;">-->
                                            <!--                                            class="wpcf7-form-control wpcf7-submit"-->
                                        </p>
                                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                                    </form>
                                    <p class="form-text2">Мы перезвоним вам через
                                        10 минут, засекайте!</p>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <h2 id="goto-from-top-button" class="tour-header">Лучшие Цены на&nbsp;Туры по&nbsp;направлениям</h2>

                