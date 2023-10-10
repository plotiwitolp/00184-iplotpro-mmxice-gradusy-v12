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
                    <?php if (true) { ?>
                        <a href="#" class="footer__mid_main_soc_item">WHATSAPP</a>
                    <?php } ?>

                    <?php if (true) { ?>
                        <a href="#" class="footer__mid_main_soc_item">VK</a>
                    <?php } ?>

                    <?php if (true) { ?>
                        <a href="#" class="footer__mid_main_soc_item">TELEGRAM</a>
                    <?php } ?>

                    <?php if (true) { ?>
                        <a href="#" class="footer__mid_main_soc_item">YOUTUBE</a>
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

            <!-- START ПЕРВАЯ ЧАСТЬ -->
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
            <!-- END ПЕРВАЯ ЧАСТЬ -->


            <!-- START СРЕДНЯЯ ЧАСТЬ -->
            <ul class="menu__part">
                <!-- Недобавленные пункты: Аппараты, Онлайн бутик  -->
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu-middle',
                    'menu_class'     => 'primary-menu-middle',
                ));
                ?>
            </ul>
            <!-- END СРЕДНЯЯ ЧАСТЬ -->


            <!-- START ПОСЛЕДНЯЯ ЧАСТЬ -->
            <ul class="menu__part">

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu-last',
                    'menu_class'     => 'primary-menu-last',
                ));
                ?>


                <!-- <li class="menu__part_item">
                    <a href="<?php echo home_url('/novosti'); ?>" class="menu__part_item_link">Новости</a>
                </li>
                <li class="menu__part_item">
                    <a href="<?php echo home_url('/kontakty'); ?>" class="menu__part_item_link">Контакты</a>
                </li> -->
            </ul>
            <!-- END ПОСЛЕДНЯЯ ЧАСТЬ -->

        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer__top">
            </div>
            <div class="footer__mid">
                <div class="footer__mid_ex">
                    <a href="#" class="footer__mid_ex_policy">Политика конфиденциальности
                    </a>
                    <a href="#" class="footer__mid_ex_license">ЛИЦЕНЗИИ И ДОКУМЕНТЫ</a>
                </div>
            </div>
            <div class="footer__bottom">©COPYRIGHT 2023. GRADUSY CLINIC.</div>
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
        <!-- <div class="employee-page__feedback-title">Записаться</div> -->
        <div class="employee-page__feedback-subtitle">Запишитесь на прием прямо сейчас!</div>
        <form action="" class="feedback-form">
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
                        Я даю согласие на обработку <a href="#">персональных данных</a>
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
        </form>
    </div>

</div>
<!-- /pop-up записаться -->

</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.0/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.0/purify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script> -->

<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php wp_footer(); ?>
</body>

</html>