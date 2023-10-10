<?php
if (!defined('ABSPATH')) {
    wp_die();
}
get_header();
?>
<!-- main -->
<main class="main">
    <div class="serv-page">
        <div class="container">
            <div class="serv-page__in">
                <h2 class="serv-page__head section__title dark">Онлайн-бутик</h2>

                <div class="online__body">
                    <div class="online__body_slider swiper">
                        <div class="online__body_slider_wr swiper-wrapper">

                            <?php
                            $args = array(
                                'post_type' => 'onlinebutik',
                                'posts_per_page' => -1,
                            );
                            $query = new WP_Query($args);

                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                            ?>
                                    <a href="<?php echo get_permalink(); ?>" class="online__body_slider_sl swiper-slide">
                                        <div class="online__body_slider_sl_img">

                                            <?php if (has_post_thumbnail()) { ?>
                                                <?php echo get_the_post_thumbnail(); ?>
                                            <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri() ?>/img/client-img-2_11zon.webp" alt="online-img">
                                            <?php } ?>

                                        </div>
                                        <div class="online__body_slider_sl_descr">

                                            <?php if (get_field('tip_tovara')) { ?>
                                                <div class="online__body_slider_sl_descr_top"><?php echo get_field('tip_tovara'); ?></div>
                                            <?php } ?>

                                            <div class="online__body_slider_sl_descr_name"><?php the_title(); ?></div>
                                            <div class="online__body_slider_sl_descr_price">

                                                <?php if (get_field('czeny_regulyarnaya_czena') || get_field('czeny_czena_so_skidkoj')) { ?>
                                                    <?php if (get_field('czeny_czena_so_skidkoj')) { ?>
                                                        <div class="online__body_slider_sl_descr_price_old"><?php echo get_field('czeny_regulyarnaya_czena'); ?> Р</div>
                                                        <div class="online__body_slider_sl_descr_price_new"><?php echo get_field('czeny_czena_so_skidkoj'); ?> Р</div>
                                                    <?php } else { ?>
                                                        <div class="online__body_slider_sl_descr_price_new"><?php echo get_field('czeny_regulyarnaya_czena'); ?> Р</div>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <div class="online__body_slider_sl_descr_price_new">ПОД ЗАКАЗ</div>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    </a>
                            <?php
                                }
                                wp_reset_postdata();
                            }
                            ?>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</main>
<!-- /main -->
<?php get_footer(); ?>