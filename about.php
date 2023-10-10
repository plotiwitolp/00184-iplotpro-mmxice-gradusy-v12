<?php
if (!defined('ABSPATH')) {
    wp_die();
}
/*
Template Name: О клинике
Template Post Type: page
*/
get_header();
?>

<!-- main -->
<main class="main">
    <div class="about-page">
        <div class="container">
            <div class="about-page__in">
                <h1 class="about-page__big"><?php the_title(); ?></h1>

                <?php if (get_field('opisanie_vklyuchitvyklyuchit_blok_podzagolovok')) { ?>
                    <h3 class="about__body_content_head"><?php echo get_field('opisanie_podzagolovok'); ?></h3>
                <?php } ?>

                <div class="about-page__body">
                    <?php if (get_field('opisanie_vklyuchitvyklyuchit_blok')) { ?>
                        <div class="about-page__body_text"><?php echo get_field('opisanie_opisanie'); ?></div>
                    <?php } ?>
                    <?php if (get_field('preimushhestva_vklyuchitvyklyuchit_blok')) { ?>
                        <div class="about-page__body_list">
                            <?php if (have_rows('preimushhestva_spisok_preimushhestv')) {
                                while (have_rows('preimushhestva_spisok_preimushhestv')) {
                                    the_row() ?>
                                    <div class="about-page__body_item">
                                        <div class="about-page__body_item_val"><?php echo get_sub_field('znachenie'); ?></div>
                                        <div class="about-page__body_item_name"><?php echo get_sub_field('nazvanie'); ?></div>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    <?php } ?>
                </div>

                <?php if (get_field('speczialisty_vklyuchitvyklyuchit_blok')) { ?>
                    <div class="services-team">
                        <div class="services-team__in">
                            <div class="services-team__head">
                                <h2 class="services-team__head_title section__title dark"><?php echo get_field('speczialisty_nazvanie_zagolovka'); ?></h2>
                                <div class="services-team__head_subhead">
                                    <a href="<?php echo home_url(); ?>/<?php echo get_field('speczialisty_ssylka_knopki'); ?>" class="arrow-link dark">
                                        <div class="arrow-link__text"><?php echo get_field('speczialisty_nazvanie_knopki_vse_speczialisty'); ?></div>
                                        <div class="arrow-link__icon"></div>
                                    </a>
                                </div>
                            </div>

                            <div class="services-team__body">
                                <div class="services-team__body_slider swiper">
                                    <div class="services-team__body_slider_wr swiper-wrapper">
                                        <?php
                                        $speczialists = get_field('speczialisty_spisok_speczialistov');
                                        if ($speczialists) {
                                            foreach ($speczialists as $speczialist) {
                                                setup_postdata($speczialist);
                                        ?>
                                                <div class="spec-item swiper-slide">
                                                    <a href="<?php echo get_permalink($speczialist->ID); ?>" class="spec-item__img-wrap">
                                                        <div class="serv-page__body_item_img">
                                                            <?php if (has_post_thumbnail($speczialist->ID)) { ?>
                                                                <?php echo get_the_post_thumbnail($speczialist->ID); ?>
                                                            <?php } else { ?>
                                                                <img src="<?php echo get_template_directory_uri() ?>/img/doctorhause-2_11zon.webp" alt="spec-img">
                                                            <?php } ?>
                                                        </div>
                                                    </a>
                                                    <div class="spec-text-wrap">
                                                        <div class="serv-page__body_item_spec-name"><?php echo $speczialist->post_title; ?></div>
                                                        <div class="serv-page__body_item_spec"><?php echo get_field('speczialnost_speczialnost', $speczialist->ID); ?></div>
                                                        <div class="serv-page__body_item_staj"><span>Стаж: </span><span><?php echo get_field('speczialnost_stazh', $speczialist->ID); ?></span></div>
                                                    </div>
                                                    <div class="spec-btn-wrap">
                                                        <div class="spec-btn-wrap__zapis upper">Записаться</div>
                                                        <a class="spec-btn-wrap__more upper" href="<?php echo get_permalink($speczialist->ID); ?>">Подробнее</a>
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
                <?php } ?>


                <?php if (get_field('atmosfera_vklyuchitvyklyuchit_blok')) { ?>
                    <div class="about-page__atm">
                        <h2 class="about-page__atm_head section__title dark"><?php echo get_field('atmosfera_nazvanie_zagolovka'); ?></h2>
                        <div class="about-page__atm_body">
                            <div class="about-page__atm_slider swiper">
                                <div class="about-page__atm_slider_wr swiper-wrapper">

                                    <?php if (have_rows('atmosfera_kartinki')) {
                                        while (have_rows('atmosfera_kartinki')) {
                                            the_row();
                                            $kartinka = get_sub_field('kartinka');

                                    ?>
                                            <a href='<?php echo $kartinka['url']; ?>' data-fancybox="gallery" class="about-page__atm_slider_sl swiper-slide">
                                                <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>">
                                            </a>
                                    <?php }
                                    } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>

    <?php if (get_field('uslugi_pokazatskryt_blok')) { ?>
        <div class="serv2">
            <div class="container">
                <div class="serv2__in">
                    <h2 class="serv2__head section__title dark"><?php echo get_field('uslugi_nazvanie_bloka') ?></h2>
                    <a href="<?php echo home_url(); ?>/<?php echo get_field('uslugi_ssylka_knopki'); ?>" class="about__body_content_link">
                        <div class="about__body_content_link_text"><?php echo get_field('uslugi_nazvanie_knopki'); ?></div>
                        <div class="about__body_content_link_icon"></div>
                    </a>
                    <?php get_template_part('templates/uslugi'); ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php if (get_field('akczii_i_speczpredlozheniya_vklyuchitvyklyuchit_blok')) { ?>
        <div class="promo">
            <div class="container">
                <div class="promo__in">
                    <h2 class="promo__head section__title dark"><?php echo get_field('akczii_i_speczpredlozheniya_nazvanie_zagolovka') ?></h2>

                    <div class="promo__body">

                        <?php
                        $akczii_i_speczpredlozheniya = get_field('akczii_i_speczpredlozheniya_spisok_akczij_i_speczpredlozhenij');
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
                                        <div class="promo__body_item_descr_data">
                                            <?php if (get_field('vklyuchitvyklyuchit_datu', $akczii_i_speczpredlozheniya__item->ID)) { ?>
                                                <div class="promo__body_item_descr_data"><?php echo get_field('data', $akczii_i_speczpredlozheniya__item->ID); ?></div>
                                            <?php } ?>
                                        </div>
                                        <?php if (get_field('vklyuchitvyklyuchit_podzagolovok', $akczii_i_speczpredlozheniya__item->ID)) { ?>
                                            <div class="promo__body_item_descr_text"><?php echo get_field('podzagolovok', $akczii_i_speczpredlozheniya__item->ID); ?></div>
                                        <?php } ?>
                                        <div class="promo__body_item_descr_link">
                                            <div class="arrow-link ">
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