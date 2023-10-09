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
                <h2 class="serv-page__head section__title dark">Специалисты</h2>
                <div class="spec-wrapper">

                    <?php
                    $args = array(
                        'post_type' => 'specialisty',
                        'posts_per_page' => -1,
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                    ?>
                            <div class="spec-item">
                                <a href="<?php echo get_permalink(); ?>" class="spec-item__img-wrap">
                                    <div class="serv-page__body_item_img">

                                        <?php if (has_post_thumbnail()) { ?>
                                            <?php echo get_the_post_thumbnail(); ?>
                                        <?php } else { ?>
                                            <img src="<?php echo get_template_directory_uri() ?>/img/doctorhause-2_11zon.webp" alt="spec-img">
                                        <?php } ?>

                                    </div>
                                </a>
                                <div class="spec-text-wrap">
                                    <div class="serv-page__body_item_spec-name"><?php the_title(); ?></div>
                                    <div class="serv-page__body_item_spec"><?php echo get_field('speczialnost_speczialnost'); ?></div>
                                    <?php if (get_field('speczialnost_pokazatskryt_stazh')) { ?>
                                        <div class="serv-page__body_item_staj"><span>Стаж: </span><span><?php echo get_field('speczialnost_stazh'); ?></span></div>
                                    <?php } ?>
                                </div>
                                <div class="spec-btn-wrap">
                                    <div class="spec-btn-wrap__zapis upper">Записаться</div>
                                    <a class="spec-btn-wrap__more upper" href="<?php echo get_permalink(); ?>">Подробнее</a>
                                </div>
                            </div>
                    <?php
                        }
                        wp_reset_postdata();
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</main>
<!-- /main -->
<?php get_footer(); ?>