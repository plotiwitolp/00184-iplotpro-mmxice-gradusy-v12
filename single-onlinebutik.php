<?php
if (!defined('ABSPATH')) {
    wp_die();
}
get_header();
?>

<!-- main -->
<main class="main">
    <div class="single-page">
        <div class="container">
            <div class="single-page__in">

                <h1 class="single-page__title"><?php the_title() ?></h1>

                <?php if (get_field('tip_tovara')) { ?>
                    <div class="promo__body_item_descr_text"><?php echo get_field('tip_tovara'); ?></div>
                <?php } ?>

                <div class="single-page__body single-page__body-flex">

                    <?php if (get_field('vklyuchitvyklyuchit_kartinku')) { ?>
                        <div class="single-page__body-left single-page__body-wrapimg">

                            <?php if (has_post_thumbnail()) { ?>
                                <?php echo get_the_post_thumbnail(); ?>
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri() ?>/img/client-img-1_11zon.webp" alt="tovar-img">
                            <?php } ?>

                        </div>
                    <?php } ?>

                    <?php if (get_field('vklyuchitvyklyuchit_tekst')) { ?>
                        <div class="single-page__body-right">
                            <div class="single-page__body-item"><?php echo get_field('tekst'); ?></div>
                        </div>
                    <?php } ?>

                </div>


                <?php if (get_field('vklyuchitvyklyuchit_blok_eshhyo_tovary')) { ?>
                    <div class="client">
                        <div class="container">
                            <div class="client__in">
                                <h2 class="client__head section__title"><?php echo get_field('nazvanie_zagolovka_eshhyo_tovary'); ?></h2>

                                <div class="client__body">
                                    <div class="client__body_slider swiper">
                                        <div class="client__body_slider_wr swiper-wrapper">

                                            <?php
                                            $items = get_field('eshhyo_tovary');
                                            if ($items) {
                                                foreach ($items as $item) {
                                                    setup_postdata($item);
                                            ?>
                                                    <a href="<?php echo get_permalink($item->ID); ?>" class="client__body_slider_slide swiper-slide">
                                                        <div class="client__body_slider_slide_img">

                                                            <?php if (has_post_thumbnail($item->ID)) { ?>
                                                                <?php echo get_the_post_thumbnail($item->ID); ?>
                                                            <?php } else { ?>
                                                                <img src="<?php echo get_template_directory_uri() ?>/img/client-img-1_11zon.webp" alt="tovar-img">
                                                            <?php } ?>

                                                        </div>
                                                        <div class="client__body_slider_slide_descr">
                                                            <div class="client__body_slider_slide_descr_name"><?php echo get_the_title($item->ID); ?></div>
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


            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>