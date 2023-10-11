<?php
if (!defined('ABSPATH')) {
    wp_die();
}

?>
<footer class="footer">
    <div class="container">
        <div class="footer__top">
        </div>
        <div class="footer__mid">
            <div class="footer__mid_main">
                <div class="footer__mid_main_soc">

                    <?php if (get_field('messendzhery_i_kontakty_nazvanie_messendzhera_1_v_shapke_i_v_podvale', 33)) { ?>
                        <a href="<?php echo get_field('messendzhery_i_kontakty_ssylka_messendzhera_1_v_shapke_i_v_podvale', 33); ?>" class="footer__mid_main_soc_item"><?php echo get_field('messendzhery_i_kontakty_nazvanie_messendzhera_1_v_shapke_i_v_podvale', 33); ?></a>
                    <?php } ?>

                    <?php if (get_field('messendzhery_i_kontakty_nazvanie_messendzhera_2_v_podvale', 33)) { ?>
                        <a href="<?php echo get_field('messendzhery_i_kontakty_ssylka_messendzhera_2_v_podvale', 33); ?>" class="footer__mid_main_soc_item"><?php echo get_field('messendzhery_i_kontakty_nazvanie_messendzhera_2_v_podvale', 33); ?></a>
                    <?php } ?>

                    <?php if (get_field('messendzhery_i_kontakty_nazvanie_messendzhera_3_v_podvale', 33)) { ?>
                        <a href="<?php echo get_field('messendzhery_i_kontakty_ssylka_messendzhera_3_v_podvale', 33); ?>" class="footer__mid_main_soc_item"><?php echo get_field('messendzhery_i_kontakty_nazvanie_messendzhera_3_v_podvale', 33); ?></a>
                    <?php } ?>

                    <?php if (get_field('messendzhery_i_kontakty_nazvanie_messendzhera_4_v_podvale', 33)) { ?>
                        <a href="<?php echo get_field('messendzhery_i_kontakty_ssylka_messendzhera_4_v_podvale', 33); ?>" class="footer__mid_main_soc_item"><?php echo get_field('messendzhery_i_kontakty_nazvanie_messendzhera_4_v_podvale', 33); ?></a>
                    <?php } ?>

                </div>
            </div>

            <div class="footer__mid_ex">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'menu_class'     => 'footer-menu',
                ));
                ?>
            </div>

        </div>
        <div class="footer__bottom">©COPYRIGHT <?php echo date('Y') ?>. GRADUSY CLINIC.</div>
    </div>
</footer>

<div class="btn__visit spec-btn-wrap__zapis">Записаться на визит</div>

<!-- main-menu -->
<div class="menu">
    <div class="container">
        <div class="menu__in">

            <ul class="menu__part">
                <li class="menu__part_item">
                    <a class="menu__part_item_link" href="<?php echo home_url('/uslugi'); ?>">Услуги</a>
                    <div class="menu__part_item_arrow active"></div>
                    <ul class="menu__part_submenu">
                        <div class="menu__part_submenu-inner">
                            <?php
                            $taxonomy = 'servicecat';
                            $terms = get_terms(array(
                                'taxonomy' => $taxonomy,
                                'hide_empty' => false,
                            ));
                            if (!empty($terms)) {
                                foreach ($terms as $term) {
                            ?>
                                    <li class="menu__part_submenu_item">
                                        <a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
                                        <div class="menu__part_item_arrow menu__part_submenu_item_arrow"></div>
                                        <ul class="menu__part_submenu">
                                            <div class="menu__part_submenu-inner">
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
                                                        <li class="menu__part_submenu_item">
                                                            <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                                        </li>
                                                <?php
                                                    }
                                                    wp_reset_postdata();
                                                } ?>

                                            </div>
                                        </ul>
                                    </li>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </ul>
                </li>

            </ul>

            <ul class="menu__part">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu-middle',
                    'menu_class'     => 'primary-menu-middle',
                ));
                ?>
            </ul>

            <ul class="menu__part">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu-last',
                    'menu_class'     => 'primary-menu-last',
                ));
                ?>
            </ul>

        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer__top">
            </div>
            <div class="footer__mid">
                <div class="footer__mid_ex">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'menu_class'     => 'footer-menu',
                    ));
                    ?>
                </div>
            </div>
            <div class="footer__bottom">©COPYRIGHT <?php echo date('Y') ?>. GRADUSY CLINIC.</div>
        </div>
    </footer>

</div>
<!-- /main-menu -->

<!-- popup-layer -->
<div class="popup-layer"></div>
<!-- /popup-layer -->



<!-- pop-up записаться -->
<div class="popup-inner">
    <div class="employee-page__feedback">
        <span class="popup-sign-up__close">x</span>
        <div class="employee-page__feedback-subtitle">Запишитесь на прием прямо сейчас!</div>


        <?php echo do_shortcode('[contact-form-7 id="f3f2251" title="Общая форма обратной связи"]'); ?>

        <!-- <form action="" class="feedback-form">
            <div class="feedback-form__first">
                <div class="feedback-form__item">
                    <input type="text" placeholder="Имя">
                </div>
                <div class="feedback-form__item">
                    <input type="tel" placeholder="Телефон">
                </div>
            </div>
            <div class="feedback-form__second">
                <div class="feedback-form__item">
                    <textarea placeholder="Сообщение"></textarea>
                </div>
            </div>
            <div class="feedback-form__third">
                <div class="feedback-form__item">
                    <label for="form-pravicy" class="feedback-form__item-pravicy">
                        <input type="checkbox" id="form-pravicy">
                        <span class="feedback-form__item-pravicy-checkmark"></span>
                        Я даю согласие на обработку <a href="/politika-konfidenczialnosti/">персональных данных</a>
                    </label>
                </div>
                <div class="feedback-form__item">
                    <div class="feedback-form__item-submit upper">Отправить</div>
                </div>
            </div>
            <div class="feedback-form__message">
                Спасибо, ваше сообщение успешно отправлено!
                <br> Данное окно автоматически закроется через <span class="popup_timer">5</span> сек.
            </div>
        </form> -->

    </div>
</div>
<!-- /pop-up записаться -->


</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.0/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php wp_footer(); ?>
</body>

</html>