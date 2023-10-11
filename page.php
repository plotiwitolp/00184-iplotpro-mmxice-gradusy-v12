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

                <div class="single-page__body">
                    <?php the_content(); ?>
                </div>

            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>