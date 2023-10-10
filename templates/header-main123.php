<?php
if (!defined('ABSPATH')) {
    wp_die();
}
?>
<header class="header">
    <div class="container">
        <div class="header__in">
            <div class="header__logo">
                <?php echo get_custom_logo(); ?>
            </div>
            <ul class="header__list">
                <li class="header__item"><a href="#">Мы на карте</a></li>
                <li class="header__item"><a href="#">whatsapp</a></li>
                <li class="header__item"><a href="#">+ 7 495 123 45 67</a></li>
            </ul>

            <div class="header__burger-wrap">
                <button class="header__burger">
                    <span></span>
                    <span></span>
                </button>
                <span class="header__burger-text">меню</span>
            </div>

        </div>
    </div>
</header>