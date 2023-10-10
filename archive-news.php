<?php
if (!defined('ABSPATH')) {
    wp_die();
}
get_header();
?>

<!-- main -->
<main class="main">
    <div class="news-page">
        <div class="promo">
            <div class="container">
                <div class="promo__in">
                    <h2 class="promo__head section__title">Новости</h2>

                    <div class="promo__body">
                        <?php
                        $args = array(
                            'post_type' => 'news',
                            'posts_per_page' => -1,
                        );
                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                        ?>
                                <a href="<?php echo get_permalink(); ?>" class="promo__body_item">
                                    <div class="promo__body_item_img">
                                        <?php if (has_post_thumbnail()) { ?>
                                            <?php echo get_the_post_thumbnail(); ?>
                                        <?php } else { ?>
                                            <img src="<?php echo get_template_directory_uri() ?>/img/uslugi2/01_11zon.webp" alt="promo-img">
                                        <?php } ?>
                                    </div>
                                    <div class="promo__body_item_descr">
                                        <div class="promo__body_item_descr_head"><?php the_title(); ?></div>

                                        <?php if (get_field('vklyuchitvyklyuchit_datu')) { ?>
                                            <div class="promo__body_item_descr_data"><?php echo get_field('data'); ?></div>
                                        <?php } ?>

                                        <?php if (get_field('vklyuchitvyklyuchit_kratkoe_opisanie')) { ?>
                                            <div class="promo__body_item_descr_text"><?php echo get_field('kratkoe_opisanie'); ?></div>
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
                            }
                            wp_reset_postdata();
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>
<!-- /main -->

<?php get_footer(); ?>