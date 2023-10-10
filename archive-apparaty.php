<?php
if (!defined('ABSPATH')) {
    wp_die();
}

get_header();
?>

<!-- main -->
<main class="main">
    <div class="client-page">
        <div class="client">
            <div class="container">
                <div class="client__in">
                    <h2 class="client__head section__title">Аппараты</h2>

                    <div class="client__body">
                        <div class="client__body_apparaty ">
                            <div class="client__body_apparaty_wr">

                                <?php
                                $args = array(
                                    'post_type' => 'apparaty',
                                    'posts_per_page' => -1,
                                );
                                $query = new WP_Query($args);

                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                ?>
                                        <a href="<?php echo get_permalink(); ?>" class="client__body_slider_slide">
                                            <div class="client__body_slider_slide_img">
                                                <?php if (has_post_thumbnail()) { ?>
                                                    <?php echo get_the_post_thumbnail(); ?>
                                                <?php } else { ?>
                                                    <img src="<?php echo get_template_directory_uri() ?>/img/apparaty/01.png" alt="apparaty-img">
                                                <?php } ?>
                                            </div>
                                            <div class="client__body_slider_slide_descr">
                                                <div class="client__body_slider_slide_descr_name"><?php the_title(); ?></div>
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
    </div>
</main>
<!-- /main -->

<?php get_footer(); ?>