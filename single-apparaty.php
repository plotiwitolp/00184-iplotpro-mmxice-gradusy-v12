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
                    <h2 class="news-item__mob_name"><?php the_title(); ?></h2>
                </div>
                <div class="news-item__body">

                    <?php if (get_field('vklyuchitvyklyuchit_kartinku')) { ?>
                        <div class="news-item__body_img">

                            <?php if (has_post_thumbnail()) { ?>
                                <?php echo get_the_post_thumbnail(); ?>
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri() ?>/img/apparaty/01.png" alt="apparat-img">
                            <?php } ?>

                        </div>
                    <?php } ?>

                    <?php if (get_field('vklyuchitvyklyuchit_tekst')) { ?>
                        <div class="news-item__body_content">
                            <div class="news-item__body_content_text"><?php echo get_field('tekst'); ?>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>

        <?php if (get_field('vklyuchitvyklyuchit_blok_eshhyo_apparaty')) { ?>
            <div class="client">
                <div class="container">
                    <div class="client__in">
                        <h2 class="client__head section__title"><?php echo get_field('nazvanie_zagolovka_eshhyo_apparaty'); ?></h2>

                        <div class="client__body">
                            <div class="client__body_slider swiper">
                                <div class="client__body_slider_wr swiper-wrapper">


                                    <?php
                                    $items = get_field('eshhyo_apparaty');
                                    if ($items) {
                                        foreach ($items as $item) {
                                            setup_postdata($item);
                                    ?>
                                            <a href="<?php echo get_permalink($item->ID); ?>" class="client__body_slider_slide swiper-slide">
                                                <div class="client__body_slider_slide_img">

                                                    <?php if (has_post_thumbnail($item->ID)) { ?>
                                                        <?php echo get_the_post_thumbnail($item->ID); ?>
                                                    <?php } else { ?>
                                                        <img src="<?php echo get_template_directory_uri() ?>/img/apparaty/01.png" alt="apparat-img">
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
</main>
<!-- /main -->

<?php get_footer(); ?>