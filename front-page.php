<?php
if (!defined('ABSPATH')) {
    wp_die();
}

get_header();
?>

<!-- main -->
<main class="main">


    <?php if (get_field('vklyuchitvyklyuchit_glavnyj_slajder_blok_1')) { ?>
        <div class="hero">
            <div class="hero__slider swiper">
                <div class="hero__slider_wr swiper-wrapper">
                    <?php if (have_rows('glavnyj_slajder_verhnij_slajder')) : ?>
                        <?php while (have_rows('glavnyj_slajder_verhnij_slajder')) : the_row(); ?>
                            <div class="hero__slider_sl swiper-slide">
                                <div class="hero__slider-inner">
                                    <div class="hero__slider_sl_img">
                                        <img src="<?php echo get_sub_field('kartinka'); ?>" alt="<?php echo get_sub_field('zagolovok'); ?>">
                                    </div>
                                    <div class="hero__slider_sl_content">
                                        <div class="hero__slider_sl_content_body">
                                            <h1 class="hero__slider_sl_content_head"><?php echo get_sub_field('zagolovok'); ?></h1>
                                            <div class="hero__slider_sl_content_date"><?php echo get_sub_field('data'); ?></div>
                                            <div class="hero__slider_sl_content_text"><?php echo get_sub_field('tekst_posle_daty'); ?></div>
                                            <a href="<?php echo get_sub_field('ssylka_knopki'); ?>" class="arrow-link dark hero__slider_more">
                                                <div class="arrow-link__text"><?php echo get_sub_field('nazvanie_knopki'); ?></div>
                                                <div class="arrow-link__icon"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
                <button class="hero__slider_nav hero__slider_nav-prev">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/prev.svg" alt="prev">
                </button>
                <button class="hero__slider_nav hero__slider_nav-next">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/next.svg" alt="next">
                </button>
                <div class="hero__slider_pag">
                    <div class="container">
                        <div class="hero__slider_pag_el"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


    <?php if (get_field('vklyuchitvyklyuchit_klinika_blok_2')) { ?>
        <div class="about">
            <div class="container">
                <div class="about__in">
                    <h2 class="about__head section__title line-before"><?php echo get_field('klinika_nazvanie_zagolovka'); ?></h2>

                    <div class="about__body">
                        <div class="about__body_content">
                            <h3 class="about__body_content_head"><?php echo get_field('klinika_nazvanie_podzagolovka'); ?></h3>
                            <a href="<?php echo home_url(); ?>/<?php echo get_field('klinika_ssylka_perehoda_knopki'); ?>" class="about__body_content_link">
                                <div class="about__body_content_link_text"><?php echo get_field('klinika_nazvanie_knopki'); ?></div>
                                <div class="about__body_content_link_icon"></div>
                            </a>
                            <div class="about__body_content_text">
                                <p><?php echo get_field('klinika_opisanie'); ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    <?php } ?>


    <?php if (get_field('vklyuchitvyklyuchit_uslugi_blok_3')) { ?>
        <div class="serv2">
            <div class="container">
                <div class="serv2__in">
                    <h2 class="serv2__head section__title dark line-before"><?php echo get_field('uslugi_nazvanie_zagolovka'); ?></h2>
                    <a href="<?php echo home_url(); ?>/<?php echo get_field('uslugi_ssylka_knopki'); ?>" class="about__body_content_link">
                        <div class="about__body_content_link_text"><?php echo get_field('uslugi_nazvanie_knopki'); ?></div>
                        <div class="about__body_content_link_icon"></div>
                    </a>
                    <?php get_template_part('templates/uslugi'); ?>
                </div>
            </div>
        </div>
    <?php } ?>


    <?php if (get_field('vklyuchitvyklyuchit_problemy_i_resheniya_blok_4')) { ?>
        <div class="problem-solution">
            <div class="container">
                <div class="problem-solution__inner">
                    <h2 class="problem-solution__head section__title dark line-before"><?php echo get_field('problemy_i_resheniya_nazvanie_zagolovka'); ?></h2>
                    <div class="problem-solution__subhead">
                        <a href="<?php echo home_url(); ?>/<?php echo get_field('problemy_i_resheniya_ssylka_knopki'); ?>" class="arrow-link dark">
                            <div class="arrow-link__text"><?php echo get_field('problemy_i_resheniya_nazvanie_knopki'); ?></div>
                            <div class="arrow-link__icon"></div>
                        </a>
                    </div>

                    <div class="problem-solution__body">

                        <div class="problem-solution__body_slider swiper">
                            <div class="problem-solution__body_slider_wr swiper-wrapper">
                                <?php
                                $problem_i_reshenij = get_field('problemy_i_resheniya_punkty-slajdy_problem_i_reshenij');
                                if ($problem_i_reshenij) {
                                    foreach ($problem_i_reshenij as $problem_i_reshenij__item) {
                                        setup_postdata($problem_i_reshenij__item);
                                ?>
                                        <a href="<?php echo get_permalink($problem_i_reshenij__item->ID); ?>" class="swiper-slide problems__slide">
                                            <div class="problem-solution__img">
                                                <?php if (has_post_thumbnail($problem_i_reshenij__item->ID)) { ?>
                                                    <?php echo get_the_post_thumbnail($problem_i_reshenij__item->ID); ?>
                                                <?php } else { ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/problem_solution/gmsubolnyyk2drm4oi3eel7l9tz2twe1.webp" alt="<?php echo get_the_title($problem_i_reshenij__item->ID); ?>" class="problems__img lozad">
                                                <?php } ?>
                                            </div>
                                            <div class="problems__text">
                                                <div class="problems__title"><?php echo get_the_title($problem_i_reshenij__item->ID); ?></div>
                                            </div>
                                        </a>
                                <?php
                                        wp_reset_postdata();
                                    }
                                } ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    <?php } ?>


    <?php if (get_field('vklyuchitvyklyuchit_apparaty_blok_5')) { ?>
        <div class="client">
            <div class="container">
                <div class="client__in">
                    <h2 class="client__head section__title line-before"><?php echo get_field('apparaty_nazvanie_zagolovka'); ?></h2>
                    <div class="problem-solution__subhead">
                        <a href="<?php echo home_url(); ?>/<?php echo get_field('apparaty_ssylka_knopki'); ?>" class="arrow-link dark">
                            <div class="arrow-link__text"><?php echo get_field('apparaty_nazvanie_knopki'); ?></div>
                            <div class="arrow-link__icon"></div>
                        </a>
                    </div>

                    <div class="client__body">
                        <div class="client__body_slider swiper">
                            <div class="client__body_slider_wr swiper-wrapper">


                                <?php
                                $apparaty = get_field('apparaty_punkty-slajdy_apparaty');
                                if ($apparaty) {
                                    foreach ($apparaty as $apparaty__item) {
                                        setup_postdata($apparaty__item);
                                ?>
                                        <a href="<?php echo get_permalink($apparaty__item->ID); ?>" class="client__body_slider_slide swiper-slide">
                                            <div class="client__body_slider_slide_img">
                                                <?php if (has_post_thumbnail($apparaty__item->ID)) { ?>
                                                    <?php echo get_the_post_thumbnail($apparaty__item->ID); ?>
                                                <?php } else { ?>
                                                    <img src="<?php echo get_template_directory_uri() ?>/img/apparaty/01.png" alt="client-img">
                                                <?php } ?>
                                            </div>
                                            <div class="client__body_slider_slide_descr">
                                                <div class="client__body_slider_slide_descr_name"><?php echo get_the_title($apparaty__item->ID); ?></div>
                                                <div class="client__body_slider_slide_descr_date">

                                                </div>
                                                <div class="client__body_slider_slide_descr_text">

                                                </div>
                                            </div>
                                        </a>
                                <?php
                                        wp_reset_postdata();
                                    }
                                } ?>



                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    <?php } ?>


    <?php if (get_field('vklyuchitvyklyuchit_onlajn_butik_blok_6')) { ?>
        <div class="online">
            <div class="container">
                <div class="online__in">
                    <h2 class="online__head section__title dark line-before"><?php echo get_field('onlajn_butik_nazvanie_zagolovka'); ?></h2>
                    <div class="online__subhead">
                        <a href="<?php echo home_url(); ?>/<?php echo get_field('onlajn_butik_ssylka_knopki'); ?>" class="arrow-link dark">
                            <div class="arrow-link__text"><?php echo get_field('onlajn_butik_nazvanie_knopki'); ?></div>
                            <div class="arrow-link__icon"></div>
                        </a>
                    </div>
                    <div class="online__body">
                        <div class="online__body_slider swiper">
                            <div class="online__body_slider_wr swiper-wrapper">


                                <?php
                                $onlajn_butik = get_field('onlajn_butik_punkty-slajdy_onlajn-butik');
                                if ($onlajn_butik) {
                                    foreach ($onlajn_butik as $onlajn_butik__item) {
                                        setup_postdata($onlajn_butik__item);
                                ?>
                                        <a href="<?php echo get_permalink($onlajn_butik__item->ID); ?>" class="online__body_slider_sl swiper-slide">
                                            <div class="online__body_slider_sl_img">

                                                <?php if (has_post_thumbnail($onlajn_butik__item->ID)) { ?>
                                                    <?php echo get_the_post_thumbnail($onlajn_butik__item->ID); ?>
                                                <?php } else { ?>
                                                    <img src="<?php echo get_template_directory_uri() ?>/img/client-img-1_11zon.webp" alt="online-img">
                                                <?php } ?>

                                            </div>
                                            <div class="online__body_slider_sl_descr">
                                                <div class="online__body_slider_sl_descr_top">парфюмерная вода</div>
                                                <div class="online__body_slider_sl_descr_name"><?php echo get_the_title($onlajn_butik__item->ID); ?></div>
                                                <div class="online__body_slider_sl_descr_price">
                                                    <div class="online__body_slider_sl_descr_price_old">456 Р</div>
                                                    <div class="online__body_slider_sl_descr_price_new">289 Р</div>
                                                </div>
                                            </div>
                                        </a>
                                <?php
                                        wp_reset_postdata();
                                    }
                                } ?>






                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


    <?php if (get_field('vklyuchitvyklyuchit_speczialisty_blok_7')) { ?>
        <div class="services-team">
            <div class="container">
                <div class="services-team__in">
                    <div class="services-team__head">
                        <h2 class="services-team__head_title section__title dark line-before"><?php echo get_field('speczialisty_nazvanie_zagolovka'); ?></h2>
                        <div class="services-team__head_subhead">
                            <a href="<?php echo home_url(); ?>/<?php echo get_field('speczialisty_ssylka_knopki'); ?>" class="arrow-link dark">
                                <div class="arrow-link__text"><?php echo get_field('speczialisty_nazvanie_knopki'); ?></div>
                                <div class="arrow-link__icon"></div>
                            </a>
                        </div>
                    </div>

                    <div class="services-team__body">
                        <div class="services-team__body_slider swiper">
                            <div class="services-team__body_slider_wr swiper-wrapper">

                                <?php
                                $speczialisty = get_field('speczialisty_punkty-slajdy_speczialisty');
                                if ($speczialisty) {
                                    foreach ($speczialisty as $speczialisty__item) {
                                        setup_postdata($speczialisty__item);
                                ?>
                                        <div class="spec-item swiper-slide">
                                            <a href="<?php echo get_permalink($speczialisty__item->ID); ?>" class="spec-item__img-wrap">
                                                <div class="serv-page__body_item_img">

                                                    <?php if (has_post_thumbnail($speczialisty__item->ID)) { ?>
                                                        <?php echo get_the_post_thumbnail($speczialisty__item->ID); ?>
                                                    <?php } else { ?>
                                                        <img src="<?php echo get_template_directory_uri() ?>/img/doctorhause-2_11zon.webp" alt="<?php echo get_the_title($speczialisty__item->ID); ?>">
                                                    <?php } ?>

                                                </div>
                                            </a>
                                            <div class="spec-text-wrap">
                                                <div class="serv-page__body_item_spec-name"><?php echo get_the_title($speczialisty__item->ID); ?></div>
                                                <div class="serv-page__body_item_spec">Ведущий специалист, врач дерматолог-косметолог</div>
                                                <div class="serv-page__body_item_staj"><span>Стаж: </span><span>15 лет</span></div>
                                            </div>
                                            <div class="spec-btn-wrap">
                                                <div class="spec-btn-wrap__zapis upper">Записаться</div>
                                                <a class="spec-btn-wrap__more upper" href="<?php echo get_permalink($speczialisty__item->ID); ?>">Подробнее</a>
                                            </div>
                                        </div>
                                <?php
                                        wp_reset_postdata();
                                    }
                                } ?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <?php } ?>




    <?php if (get_field('vklyuchitvyklyuchit_akczii_i_speczpredlozheniya_blok_8')) { ?>
        <div class="promo">
            <div class="container">
                <div class="promo__in">
                    <h2 class="promo__head section__title dark line-before"><?php echo get_field('akczii_i_speczpredlozheniya_nazvanie_zagolovka'); ?></h2>
                    <div class="online__subhead">
                        <a href="<?php echo home_url(); ?>/<?php echo get_field('akczii_i_speczpredlozheniya_ssylka_knopki'); ?>" class="arrow-link dark">
                            <div class="arrow-link__text"><?php echo get_field('akczii_i_speczpredlozheniya_nazvanie_knopki'); ?></div>
                            <div class="arrow-link__icon"></div>
                        </a>
                    </div>


                    <div class="promo__body">

                        <?php
                        $akczii_i_speczpredlozheniya = get_field('akczii_i_speczpredlozheniya_punkty-slajdy_akczii_i_speczpredlozheniya');
                        if ($akczii_i_speczpredlozheniya) {
                            foreach ($akczii_i_speczpredlozheniya as $akczii_i_speczpredlozheniya__item) {
                                setup_postdata($akczii_i_speczpredlozheniya__item);
                        ?>
                                <a href="<?php echo get_permalink($akczii_i_speczpredlozheniya__item->ID); ?>" class="promo__body_item">
                                    <div class="promo__body_item_img">


                                        <?php if (has_post_thumbnail($akczii_i_speczpredlozheniya__item->ID)) { ?>
                                            <?php echo get_the_post_thumbnail($akczii_i_speczpredlozheniya__item->ID); ?>
                                        <?php } else { ?>
                                            <img src="<?php echo get_template_directory_uri() ?>/img/uslugi2/01_11zon.webp" alt="promo-img">
                                        <?php } ?>

                                    </div>
                                    <div class="promo__body_item_descr">
                                        <div class="promo__body_item_descr_head"><?php echo get_the_title($akczii_i_speczpredlozheniya__item->ID); ?></div>
                                        <div class="promo__body_item_descr_data">до 25 октября</div>
                                        <div class="promo__body_item_descr_text">Дарим скидку -20% на пакет из 5-ти процедур на аппарате Morpheus 8</div>
                                        <div class="promo__body_item_descr_link">
                                            <div class="arrow-link dark">
                                                <div class="arrow-link__text">Узнать больше</div>
                                                <div class="arrow-link__icon"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                        <?php
                                wp_reset_postdata();
                            }
                        } ?>

                    </div>


                </div>
            </div>
        </div>
    <?php } ?>


</main>
<!-- /main -->

<?php get_footer(); ?>