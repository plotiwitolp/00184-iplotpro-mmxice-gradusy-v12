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
                <h1 class="single-page__title">Проблемы и решения</h1>
                <div class="single-page__body">


                    <div class="promo__body">

                        <?php
                        $args = array(
                            'post_type' => 'problemy_i_resheniya',
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
                                            <img src="<?php echo get_template_directory_uri() ?>/img/problem_solution/gmsubolnyyk2drm4oi3eel7l9tz2twe1.webp" alt="problem_solution-img">
                                        <?php } ?>
                                    </div>
                                    <div class="promo__body_item_descr">
                                        <div class="promo__body_item_descr_head"><?php the_title(); ?></div>
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