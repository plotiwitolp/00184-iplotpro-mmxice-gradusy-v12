<?php
if (!defined('ABSPATH')) {
    wp_die();
}
/*
Template Name: Контакты
Template Post Type: page
*/
get_header();
?>

<!-- main -->
<main class="main">
    <div class="contacts-page">
        <div class="container">
            <div class="contacts-page__in">
                <h2 class="contacts-page__head section__title dark"><?php the_title(); ?></h2>
                <div class="contacts-page__body">

                    <div class="contacts-page__body-desc">

                        <div class="contacts-page__body_main">
                            <div class="contacts-page__body_main_item"><?php echo get_field('adres_adres'); ?></div>
                            <div class="contacts-page__body_main_item"><?php echo get_field('messendzhery_i_kontakty_kontakt'); ?> <?php echo get_field('messendzhery_i_kontakty_kontakt_tekst'); ?></div>
                            <div class="contacts-page__body_main_item"><?php echo get_field('pochta_tekst_sleva_ot_pochty'); ?> <?php echo get_field('pochta_adres_pochty'); ?></div>
                        </div>

                        <div class="contacts-page__body_list">
                            <div class="contacts-page__body_list-item">
                                <?php if (have_rows('adres_knopki')) {
                                    while (have_rows('adres_knopki')) {
                                        the_row(); ?>
                                        <a href="<?php echo get_sub_field('ssylka_knopki'); ?>" class="contacts-page__body_item google">
                                            <div class="contacts-page__body_item_icon">
                                                <?php echo get_sub_field('ikonka_ili_ssylka_na_ikonku'); ?>
                                            </div>
                                            <div class="contacts-page__body_item_text upper"><?php echo get_sub_field('nazvanie_knopki'); ?></div>
                                        </a>
                                <?php }
                                } ?>
                            </div>

                            <div class="contacts-page__body_list-item">
                                <?php if (have_rows('messendzhery_i_kontakty_knopki')) {
                                    while (have_rows('messendzhery_i_kontakty_knopki')) {
                                        the_row(); ?>
                                        <a href="<?php echo get_sub_field('ssylka_knopki'); ?>" class="contacts-page__body_item google">
                                            <div class="contacts-page__body_item_icon">
                                                <?php echo get_sub_field('ikonka_ili_ssylka_na_ikonku'); ?>
                                            </div>
                                            <div class="contacts-page__body_item_text upper"><?php echo get_sub_field('nazvanie_knopki'); ?></div>
                                        </a>
                                <?php }
                                } ?>
                            </div>

                            <div class="contacts-page__body_list-item">

                                <?php if (have_rows('pochta_knopki_na_stranicze_kontakty')) {
                                    while (have_rows('pochta_knopki_na_stranicze_kontakty')) {
                                        the_row(); ?>
                                        <a href="<?php echo get_sub_field('ssylka_knopki'); ?>" class="contacts-page__body_item google">
                                            <div class="contacts-page__body_item_icon">
                                                <?php echo get_sub_field('ikonka_ili_ssylka_na_ikonku'); ?>
                                            </div>
                                            <div class="contacts-page__body_item_text upper"><?php echo get_sub_field('tekst_knopki'); ?></div>
                                        </a>
                                <?php }
                                } ?>
                            </div>

                        </div>
                    </div>

                    <div class="contacts-page__body-mob">
                        <div class="contacts-page__body-mob__item">
                            <div class="contacts-page__body_main_item"><?php echo get_field('adres_adres'); ?></div>
                            <div class="contacts-page__body-mob__item-btns">
                                <?php if (have_rows('adres_knopki')) {
                                    while (have_rows('adres_knopki')) {
                                        the_row(); ?>
                                        <a href="<?php echo get_sub_field('ssylka_knopki'); ?>" class="contacts-page__body_item google">
                                            <div class="contacts-page__body_item_icon">
                                                <?php echo get_sub_field('ikonka_ili_ssylka_na_ikonku'); ?>
                                            </div>
                                            <div class="contacts-page__body_item_text upper"><?php echo get_sub_field('nazvanie_knopki'); ?></div>
                                        </a>
                                <?php }
                                } ?>
                            </div>
                        </div>

                        <div class="contacts-page__body-mob__item">
                            <div class="contacts-page__body_main_item"><?php echo get_field('messendzhery_i_kontakty_kontakt'); ?> <?php echo get_field('messendzhery_i_kontakty_kontakt_tekst'); ?></div>
                            <div class="contacts-page__body-mob__item-btns">
                                <?php if (have_rows('messendzhery_i_kontakty_knopki')) {
                                    while (have_rows('messendzhery_i_kontakty_knopki')) {
                                        the_row(); ?>
                                        <a href="<?php echo get_sub_field('ssylka_knopki'); ?>" class="contacts-page__body_item google">
                                            <div class="contacts-page__body_item_icon">
                                                <?php echo get_sub_field('ikonka_ili_ssylka_na_ikonku'); ?>
                                            </div>
                                            <div class="contacts-page__body_item_text upper"><?php echo get_sub_field('nazvanie_knopki'); ?></div>
                                        </a>
                                <?php }
                                } ?>
                            </div>
                        </div>

                        <div class="contacts-page__body-mob__item">
                            <div class="contacts-page__body_main_item"><?php echo get_field('pochta_tekst_sleva_ot_pochty'); ?> <?php echo get_field('pochta_adres_pochty'); ?></div>
                            <div class="contacts-page__body-mob__item-btns">
                                <?php if (have_rows('pochta_knopki_na_stranicze_kontakty')) {
                                    while (have_rows('pochta_knopki_na_stranicze_kontakty')) {
                                        the_row(); ?>
                                        <a href="<?php echo get_sub_field('ssylka_knopki'); ?>" class="contacts-page__body_item google">
                                            <div class="contacts-page__body_item_icon">
                                                <?php echo get_sub_field('ikonka_ili_ssylka_na_ikonku'); ?>
                                            </div>
                                            <div class="contacts-page__body_item_text upper"><?php echo get_sub_field('tekst_knopki'); ?></div>
                                        </a>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>

                    <div class="contacts-page__body_ex">
                        <div class="contacts-page__body_ex_img"><?php echo get_field('karta_shak'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- /main -->

<?php get_footer(); ?>