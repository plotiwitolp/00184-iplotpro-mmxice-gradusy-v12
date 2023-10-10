<?php
if (!defined('ABSPATH')) {
    wp_die();
}
get_header();
?>

<!-- main -->
<main class="main">
    <div class="news-item">
        <div class="container">
            <div class="news-item__in">
                <h2 class="news-item__head section__title dark"><?php the_title(); ?></h2>
                <div class="news-item__mob">

                    <?php if (get_field('vklyuchitvyklyuchit_podzagolovok')) { ?>
                        <div class="news-item__mob_name"><?php echo get_field('podzagolovok'); ?></div>
                    <?php } ?>

                    <?php if (get_field('vklyuchitvyklyuchit_datu')) { ?>
                        <div class="news-item__mob_date"><?php echo get_field('data'); ?></div>
                    <?php } ?>

                </div>
                <div class="news-item__body">
                    <?php if (get_field('vklyuchitvyklyuchit_kartinku')) { ?>
                        <div class="news-item__body_img">

                            <?php if (get_field('kartinka')) { ?>
                                <img src="<?php echo get_field('kartinka'); ?>" alt="<?php the_title(); ?>">
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri() ?>/img/uslugi2/01_11zon.webp" alt="akcii-img">
                            <?php } ?>

                        </div>
                    <?php } ?>

                    <div class="news-item__body_content">

                        <?php if (get_field('vklyuchitvyklyuchit_podzagolovok')) { ?>
                            <h2 class="news-item__body_content_name"><?php echo get_field('podzagolovok'); ?></h2>
                        <?php } ?>

                        <?php if (get_field('vklyuchitvyklyuchit_datu')) { ?>
                            <div class="news-item__body_content_date"><?php echo get_field('data'); ?></div>
                        <?php } ?>

                        <?php if (get_field('vklyuchitvyklyuchit_tekst')) { ?>
                            <div class="news-item__body_content_text"><?php echo get_field('tekst'); ?></div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>

        <?php if (get_field('vklyuchitvyklyuchit_blok_drugie_novosti')) { ?>
            <div class="client">
                <div class="container">
                    <div class="client__in">
                        <h2 class="client__head section__title"><?php echo get_field('nazvanie_zagolovka_drugie_novosti'); ?></h2>
                        <div class="client__body">
                            <div class="client__body_slider news-list swiper">
                                <div class="client__body_slider_wr swiper-wrapper">

                                    <?php
                                    $items = get_field('drugie_novosti');
                                    if ($items) {
                                        foreach ($items as $item) {
                                            setup_postdata($item);
                                    ?>
                                            <a href="<?php echo get_permalink($item->ID); ?>" class="client__body_slider_slide swiper-slide">
                                                <div class="client__body_slider_slide_img">

                                                    <?php if (has_post_thumbnail($item->ID)) { ?>
                                                        <?php echo get_the_post_thumbnail($item->ID); ?>
                                                    <?php } else { ?>
                                                        <img src="<?php echo get_template_directory_uri() ?>/img/uslugi2/01_11zon.webp" alt="news-img">
                                                    <?php } ?>
                                                </div>
                                                <div class="client__body_slider_slide_descr">
                                                    <div class="client__body_slider_slide_descr_name"><?php echo get_the_title($item->ID); ?></div>

                                                    <?php if (get_field('vklyuchitvyklyuchit_datu', $item->ID)) { ?>
                                                        <div class="client__body_slider_slide_descr_date"><?php echo get_field('data', $item->ID); ?></div>
                                                    <?php } ?>

                                                    <?php if (get_field('vklyuchitvyklyuchit_kratkoe_opisanie')) { ?>
                                                        <div class="client__body_slider_slide_descr_text"><?php echo get_field('kratkoe_opisanie'); ?></div>
                                                    <?php } ?>

                                                    <div class="promo__body_item_descr_link">
                                                        <div class="arrow-link">
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


                                    <!-- <a href="#" class="client__body_slider_slide swiper-slide">
                                    <div class="client__body_slider_slide_img">
                                        <picture>
                                            <source srcset="" type="image/webp">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/uslugi2/01_11zon.webp" alt="client-img">
                                        </picture>
                                    </div>
                                    <div class="client__body_slider_slide_descr">
                                        <div class="client__body_slider_slide_descr_name"> Пример заголовка. Рыба-текст заголовка.</div>
                                        <div class="client__body_slider_slide_descr_date">
                                            27 сентября 2023
                                        </div>
                                        <div class="client__body_slider_slide_descr_text">
                                            Не следует, однако забывать, что консультация с широким активом играет важную роль в формировании соответствующий условий активизации.
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="client__body_slider_slide swiper-slide">
                                    <div class="client__body_slider_slide_img">
                                        <picture>
                                            <source srcset="" type="image/webp">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/uslugi2/01_11zon.webp" alt="client-img">
                                        </picture>
                                    </div>
                                    <div class="client__body_slider_slide_descr">
                                        <div class="client__body_slider_slide_descr_name"> Пример заголовка. Рыба-текст заголовка.</div>
                                        <div class="client__body_slider_slide_descr_date">
                                            27 сентября 2023
                                        </div>
                                        <div class="client__body_slider_slide_descr_text">
                                            Не следует, однако забывать, что консультация с широким активом играет важную роль в формировании соответствующий условий активизации.
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="client__body_slider_slide swiper-slide">
                                    <div class="client__body_slider_slide_img">
                                        <picture>
                                            <source srcset="" type="image/webp">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/uslugi2/01_11zon.webp" alt="client-img">
                                        </picture>
                                    </div>
                                    <div class="client__body_slider_slide_descr">
                                        <div class="client__body_slider_slide_descr_name"> Пример заголовка. Рыба-текст заголовка.</div>
                                        <div class="client__body_slider_slide_descr_date">
                                            27 сентября 2023
                                        </div>
                                        <div class="client__body_slider_slide_descr_text">
                                            Не следует, однако забывать, что консультация с широким активом играет важную роль в формировании соответствующий условий активизации.
                                        </div>
                                    </div>
                                </a> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>


    </div>
</main>
<!-- /main -->

<?php get_footer(); ?>