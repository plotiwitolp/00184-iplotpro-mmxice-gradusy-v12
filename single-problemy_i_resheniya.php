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
                <h1 class="single-page__title"><?php the_title(); ?></h1>
                <div class="single-page__body">
                    <div class="single-page__body-item"><?php echo get_field('opisanie'); ?></div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- /main -->

<?php get_footer(); ?>