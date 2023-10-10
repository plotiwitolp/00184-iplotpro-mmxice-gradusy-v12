<?php
if (!defined('ABSPATH')) {
    wp_die();
}
/*
Template Name: Прайс
Template Post Type: page
*/
get_header();
?>
<!-- main -->
<main class="main">
    <div class="price-page">
        <div class="container">

            <div class="price-page__for-pdf">
                <h1 class="price-page__title"><?php the_title(); ?></h1>
                <div class="price-page__text"><?php the_content(); ?></div>

                <div class="price-page__allprices">


                    <?php
                    $taxonomy = 'servicecat';
                    $terms = get_terms(array(
                        'taxonomy' => $taxonomy,
                        'hide_empty' => false,
                    ));
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                    ?>
                            <div class="price-page__item">
                                <div class="services-price__body accordion-container">
                                    <div class="services-price__body_item ac">

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
                                        ?>

                                            <?php
                                            $i = 0;
                                            while ($query->have_posts()) {
                                                $query->the_post();
                                                if (have_rows('czeny_prajs')) {
                                                    $i++;
                                                }
                                            } ?>

                                            <?php if ($i > 0) { ?>
                                                <div class="services-price__body_item_head ac-header">
                                                    <div class="services-price__header"><?php echo $term->name . " ($i)"; ?></div>
                                                </div>
                                            <?php } ?>

                                            <?php
                                            while ($query->have_posts()) {
                                                $query->the_post();
                                                if (have_rows('czeny_prajs')) {
                                            ?>
                                                    <div class="services-price__usluga">

                                                        <div class="services-price__sub-header"><?php echo get_the_title(); ?></div>


                                                        <div class="services-price__body_item_panel ac-panel">
                                                            <div class="services-price__body_item_panel_content">
                                                                <table class="table">
                                                                    <tr class="table__row table__row-head">
                                                                        <th class="table__item table__head"><?php echo get_field('tip_lejbl'); ?></th>
                                                                        <th class="table__item table__head"><?php echo get_field('czena_lejbl'); ?></th>
                                                                    </tr>
                                                                    <?php if (have_rows('czeny_prajs')) : ?>
                                                                        <?php while (have_rows('czeny_prajs')) : the_row(); ?>
                                                                            <?php $nazvanie_uslugi = get_sub_field('nazvanie_uslugi'); ?>
                                                                            <?php $czena_v = get_sub_field('czena_v'); ?>
                                                                            <tr class="table__row">
                                                                                <td class="table__item"><?php echo $nazvanie_uslugi; ?></td>
                                                                                <td class="table__item"><?php echo $czena_v; ?> ₽</td>
                                                                            </tr>
                                                                    <?php
                                                                        endwhile;
                                                                    endif; ?>
                                                                </table>
                                                            </div>
                                                        </div>



                                                    </div>
                                        <?php
                                                }
                                                wp_reset_postdata();
                                            }
                                        } ?>

                                    </div>
                                </div>
                            </div>

                    <?php

                        }
                    }
                    ?>





                    <!-- <div class="price-page__item">
                        <div class="services-price__body accordion-container">
                            <div class="services-price__body_item ac">
                                <div class="services-price__body_item_head ac-header">
                                    <div class="ac-trigger">
                                        Инъекционная косметология
                                    </div>
                                </div>
                                <div class="services-price__body_item_panel ac-panel">
                                    <div class="services-price__body_item_panel_content">
                                        <table class="table">
                                            <tr class="table__row table__row-head">
                                                <th class="table__item table__head">ТИП</th>
                                                <th class="table__item table__head">ЦЕНА</th>
                                            </tr>
                                            <tr class="table__row">
                                                <td class="table__item">
                                                    Все виды нитей (в том числе постоянные, хирургические)
                                                </td>
                                                <td class="table__item">
                                                    5 800 ₽
                                                </td>
                                            </tr>
                                            <tr class="table__row">
                                                <td class="table__item">
                                                    Инъекции
                                                </td>
                                                <td class="table__item">
                                                    9 000 ₽
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="price-page__item">
                        <div class="services-price__body accordion-container">
                            <div class="services-price__body_item ac">
                                <div class="services-price__body_item_head ac-header">
                                    <div class="ac-trigger">
                                        Кабинет по телу
                                    </div>
                                </div>
                                <div class="services-price__body_item_panel ac-panel">
                                    <div class="services-price__body_item_panel_content">
                                        <table class="table">
                                            <tr class="table__row table__row-head">
                                                <th class="table__item table__head">ТИП</th>
                                                <th class="table__item table__head">ЦЕНА</th>
                                            </tr>
                                            <tr class="table__row">
                                                <td class="table__item">
                                                    R-Sleek - массаж сферами
                                                </td>
                                                <td class="table__item">
                                                    7 800 ₽
                                                </td>
                                            </tr>
                                            <tr class="table__row">
                                                <td class="table__item">
                                                    RF-лифтинг - омоложение
                                                </td>
                                                <td class="table__item">
                                                    9 900 ₽
                                                </td>
                                            </tr>
                                            <tr class="table__row">
                                                <td class="table__item">
                                                    Медицинский массаж
                                                </td>
                                                <td class="table__item">
                                                    12 200 ₽
                                                </td>
                                            </tr>
                                            <tr class="table__row">
                                                <td class="table__item">
                                                    Остеопатия
                                                </td>
                                                <td class="table__item">
                                                    11 400 ₽
                                                </td>
                                            </tr>
                                            <tr class="table__row">
                                                <td class="table__item">
                                                    Мануальная терапия
                                                </td>
                                                <td class="table__item">
                                                    8 300 ₽
                                                </td>
                                            </tr>
                                            <tr class="table__row">
                                                <td class="table__item">
                                                    Спортивный массаж
                                                </td>
                                                <td class="table__item">
                                                    7 700 ₽
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="price-page__item">
                        <div class="services-price__body accordion-container">
                            <div class="services-price__body_item ac">
                                <div class="services-price__body_item_head ac-header">
                                    <div class="ac-trigger">
                                        Капельницы
                                    </div>
                                </div>
                                <div class="services-price__body_item_panel ac-panel">
                                    <div class="services-price__body_item_panel_content">
                                        <table class="table">
                                            <tr class="table__row table__row-head">
                                                <th class="table__item table__head">ТИП</th>
                                                <th class="table__item table__head">ЦЕНА</th>
                                            </tr>
                                            <tr class="table__row">
                                                <td class="table__item">
                                                    Капельницы - витамины, микроэлементы
                                                </td>
                                                <td class="table__item">
                                                    8 800 ₽
                                                </td>
                                            </tr>
                                            <tr class="table__row">
                                                <td class="table__item">
                                                    Капельницы с озоном(озонотерапия)
                                                </td>
                                                <td class="table__item">
                                                    12 900 ₽
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="price-page__item">
                        <div class="services-price__body accordion-container">
                            <div class="services-price__body_item ac">
                                <div class="services-price__body_item_head ac-header">
                                    <div class="ac-trigger">
                                        ТЕРАПЕВТ + АНАЛИЗЫ КРОВИ
                                    </div>
                                </div>
                                <div class="services-price__body_item_panel ac-panel">
                                    <div class="services-price__body_item_panel_content">
                                        <table class="table">
                                            <tr class="table__row table__row-head">
                                                <th class="table__item table__head">ТИП</th>
                                                <th class="table__item table__head">ЦЕНА</th>
                                            </tr>
                                            <tr class="table__row">
                                                <td class="table__item">
                                                    ТЕРАПЕВТ + АНАЛИЗЫ КРОВИ
                                                </td>
                                                <td class="table__item">
                                                    4 800 ₽
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>

            <div class="services-price__action">
                <div class="services-price__action_wr">
                    <a href="#" download="#" class="services-price__action_btn">
                        <div class="services-price__action_btn_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/pdf-icon.svg" alt="">
                        </div>
                        <div class="services-price__action_btn_text upper">Скачать прайс-лист</div>
                    </a>
                </div>

            </div>

        </div>
    </div>
</main>
<!-- /main -->

<?php get_footer(); ?>