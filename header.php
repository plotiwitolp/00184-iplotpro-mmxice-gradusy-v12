<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel=" stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/custom.css">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">

        <header class="header">
            <div class="container">
                <div class="header__in">
                    <div class="header__logo">
                        <?php echo get_custom_logo(); ?>
                    </div>
                    <ul class="header__list">
                        <li class="header__item"><a href="<?php echo get_field('adres_ssylka_adresa_v_shapke', 33); ?>"><?php echo get_field('adres_nazvanie_adresa_v_shapke', 33); ?></a></li>
                        <li class="header__item"><a href="<?php echo get_field('messendzhery_i_kontakty_ssylka_messendzhera_1_v_shapke_i_v_podvale', 33); ?>"><?php echo get_field('messendzhery_i_kontakty_nazvanie_messendzhera_1_v_shapke_i_v_podvale', 33); ?></a></li>
                        <li class="header__item"><a href="tel:<?php echo get_field('messendzhery_i_kontakty_kontakt', 33); ?>"><?php echo get_field('messendzhery_i_kontakty_kontakt', 33); ?></a></li>
                    </ul>

                    <div class="header__burger-wrap">
                        <button class="header__burger">
                            <span></span>
                            <span></span>
                        </button>
                        <span class="header__burger-text">меню</span>
                    </div>

                </div>
            </div>
        </header>