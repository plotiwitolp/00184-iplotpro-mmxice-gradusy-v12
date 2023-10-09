<?php
if (!defined('ABSPATH')) {
    wp_die();
}
?>
<div class="all_services_blocks">
    <ol>
        <?php
        $taxonomy = 'servicecat';
        $terms = get_terms(array(
            'taxonomy' => $taxonomy,
            'hide_empty' => false,
        ));

        if (!empty($terms)) {
            foreach ($terms as $term) {
        ?>
                <li>
                    <div class="services_block is-start-animation start-animation">
                        <div class="services_block_image">
                            <img src="<?php echo get_field('izobrazhenie_kategorii', $term); ?>" alt="<?php echo $term->name; ?>" loading="lazy">
                        </div>
                        <div class="services_block_urls">
                            <div class="sbu_title_services">
                                <a href="<?php echo get_term_link($term); ?>">
                                    <?php echo $term->name; ?>
                                </a>
                            </div>
                            <div class="sbu_child_services">
                                <ul>
                                    <?php
                                    $args = array(
                                        'post_type' => 'services',
                                        'posts_per_page' => -1,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => $taxonomy,
                                                'field' => 'id',
                                                'terms' => $term->term_id,
                                            ),
                                        ),
                                    );
                                    $query = new WP_Query($args);
                                    if ($query->have_posts()) {
                                        while ($query->have_posts()) {
                                            $query->the_post();
                                    ?>
                                            <li>
                                                <a href="<?php echo get_permalink(); ?>">
                                                    <?php echo get_the_title(); ?>
                                                </a>
                                            </li>
                                    <?php
                                        }
                                        wp_reset_postdata();
                                    } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
        <?php
            }
        }
        ?>
    </ol>
</div>