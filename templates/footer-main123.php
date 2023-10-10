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