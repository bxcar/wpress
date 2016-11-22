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
    <!--<script>
        window.onload = function () {
            document.getElementById('contact-form').addEventListener('submit', function (evt) {
                var loading = document.getElementById("submit-but");
                loading.setAttribute("value", "");
                loading.setAttribute("style",
                    "background: url(/wpress/wp-content/themes/sydney/img/post_preloader.gif) 50% 50% no-repeat #0088e7  !important;");
            }, false);
            //                    $(event.target).find(".wpcf7-response-output").on("DOMNodeInserted", function (event) {
            document.getElementById('contact-form').addEventListener('DOMNodeInserted', function (evt) {
                var loading = document.getElementById("submit-but");
                loading.setAttribute("value", "Отправить");
                loading.setAttribute("style",
                    "background: #0088e7 !important;");
            });
        }
    </script>-->
    <script src="/wpress/wp-content/themes/sydney/js/script_for_form_button_footer.js"></script>
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
    <style>
        .page .entry-header {
            margin-bottom: 0px;
        }
    </style>
    <!-- Facebook Pixel Code -->

    <script>

        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?

            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;

            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;

            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,

            document,'script','https://connect.facebook.net/en_US/fbevents.js');


        fbq('init', '129477284107022', {

            em: 'insert_email_variable,'

        });

        fbq('track', 'PageView');

    </script>

    <noscript><img height="1" width="1" style="display:none"

                   src="https://www.facebook.com/tr?id=129477284107022&ev=PageView&noscript=1"

        /></noscript>

    <!-- DO NOT MODIFY -->

    <!-- End Facebook Pixel Code -->
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=YPPjOWo3CY79Vp3dG/2LKb9ul5NNNp4zRKtkOZO7MwRNLgp9pJLjU9mfdQqcRcFRvtyMVaPuyNTIIDimgFy38jpNW3m2o6si1YQVNDfHaGESE1eWn45kqsmnYQ3mFH/wla6Qsh*a*RZ6MlJ0u5FbVMnNY1CxrfjvZgxtEMaqMrE-&pixel_id=1000045496';</script>
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
    </header><!-- #masthead -->
    <?php sydney_slider_template(); ?>

    <div class="header-image  header-image-special">
        <p class="header-on-top-image">Спецпредложения</p>
        <?php sydney_header_overlay(); ?>
        <img class="header-inner" src="/wpress/wp-content/themes/sydney/images/special.jpg"
             width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="<?php bloginfo('name'); ?>">
    </div>

    <div id="content" class="page-wrap" style="padding-top: 30px; padding-bottom: 0;">
        <div class="container content-wrapper">
            <div class="row">
                <!--<div class="form" style="width: 500px; height: 500px;">
                    <p>[contact-form-7 id="47" title="Заполните форму"]</p>
                </div>
-->
                <!--<div class="top-form-container"
                     style="background: url('/wpress/wp-content/themes/sydney/img/coralc2.jpg') no-repeat;
                     background-size: 100%;
                            width: 900px;
                            height: 500px;
                            margin-right: auto;
                            margin-left: auto;">
                    <?php /*include "content.php"*/ ?>
                </div>-->
                <div id="fon"></div>
                <div id="load"></div>
                <div class="filters">
                    <select id="country-select" class="select-spec" style="margin-right: 20px;
                                  margin-left: 25px;">
                        <option style="display: none;" value="country-default" disabled selected>Выберите страну</option>
                        <option value="thailand">Таиланд</option>
                        <option value="uae">ОАЕ</option>
                        <option value="egypt">Египет</option>
                        <option value="spain">Испания</option>
                        <option value="usa">США</option>
                        <option value="canada">Канада</option>
                        <option value="germany">Германия</option>
                        <option value="france">Франция</option>
                        <option value="mexico">Мексика</option>
                        <option value="brasil">Бразилия</option>
                        <option value="norway">Норвегия</option>
                        <option value="dominican">Доминикана</option>
                        <option value="maldives">Мальдивы</option>
                        <option value="tanzania">Танзания</option>
                        <option value="srilanka">Шри-Ланка</option>
                        <option value="india">Индия</option>
                    </select>
                    <select class="select-spec" id="price_sort">
                        <option style="display: none;" value="price-default" disabled selected>цена(по умолчанию)</option>
                        <option value="price_sorta">цена(по возрастанию)</option>
                        <option value="price_sortb">цена(по убыванию)</option>
                    </select>
                </div>


