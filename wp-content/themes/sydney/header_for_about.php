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
                        <p <!--style="overflow: hidden;-->">098 116 9555<br><span class="header-number-text">Звоните нам сейчас!</span></p>

                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
    <?php sydney_slider_template(); ?>

    <div class="header-image header-image-about">
        <p class="header-on-top-image">О нас</p>
        <?php sydney_header_overlay(); ?>
        <img class="header-inner" src="/wpress/wp-content/themes/sydney/images/about.jpg"
             width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="<?php bloginfo('name'); ?>">
    </div>

    <div id="content" class="page-wrap" style="padding-top: 30px; padding-bottom: 0;">
        <div class="container content-wrapper">
            <div class="row row-for-padding">
                <!--<div class="form" style="width: 500px; height: 500px;">
                    <p>[contact-form-7 id="47" title="Заполните форму"]</p>
                </div>
-->
<!--                <div class="top-form-container">-->
                    <p class="about">Официальное представительство туристической компании «Coral Travel», расположенное в Борисполе,
                        с 2015 года предлагает вам комфортный, интересный и качественный отдых по доступным ценам.
                        Опираясь на главный девиз «Coral Travel» - НАДЕЖНОСТЬ, мы стремимся обеспечивать услуги
                        хорошего качества, основываясь на нашем опыте, неиссякаемой энергии и энтузиазме.
                        Современный персональный подход открывает для наших клиентов удивительный дух и
                        разнообразную культуру посещаемых стран.
                        Нашим главным достижением является большое количество дольных клиентов, которые ощутили
                        преимущества организованного отдыха, воспользовавшись услугами компании «Coral Travel» .
                        Международная туристическая компания «Coral Travel» имеет более чем 20-ти летнюю безупречную
                        репутацию, основанную на качестве предоставляемых услуг. Мы предлагаем туры в 28 стран
                        и более 60-ти различных направлений из Украины. Услугами «Coral Travel» вы можете
                        воспользоваться в 233 агентствах, представленных в 76 украинских городах.
                    </p>
<!--                </div>-->

                <h2 class="tour-header about-tour-header">Мы для туристов, а не туристы для нас</h2>
                <p class="about">Принципом работы компании является ориентированность на пожелания клиента.
                    Откройте для себя новые места, посетите свои любимые уголки планеты,
                    по новым неизведанным маршрутам, подобранным менеджерами компании
                    «Coral Travel» специально для вас!</p>

                