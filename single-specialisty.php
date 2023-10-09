<?php
if (!defined('ABSPATH')) {
    wp_die();
}

get_header();
?>

<!-- main -->
<main class="main">
    <div class="employee-page">
        <div class="container">
            <div class="employee-page__inner">
                <div class="employee-page__inner_lr">


                    <div class="employee-page__left">
                        <div class="employee-page__left__inner">
                            <div class="employee-page__spec-name"><?php the_title(); ?></div>
                            <div class="employee-page__img">

                                <?php if (has_post_thumbnail()) { ?>
                                    <?php echo get_the_post_thumbnail(); ?>
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/img/doctorhause-2_11zon.webp" alt="spec-img">
                                <?php } ?>

                                <div class="employee-page__spec-data-mob">

                                    <?php if (get_field('speczialnost_vklyuchitvyklyuchit_blok')) { ?>
                                        <div class="employee-page__spec-title-mob"><?php echo get_field('speczialnost_speczialnost'); ?></div>
                                    <?php } ?>

                                    <div class="employee-page__spec-name-mob"><?php the_title(); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="employee-page__right">

                        <?php if (get_field('speczialnost_vklyuchitvyklyuchit_blok')) { ?>
                            <div class="employee-page__spec-label"><?php echo get_field('speczialnost_nazvanie_zagolovka'); ?></div>
                            <div class="employee-page__spec-title"><?php echo get_field('speczialnost_speczialnost'); ?></div>
                        <?php } ?>

                        <?php if (get_field('obrazovanie_vklyuchitvyklyuchit_blok')) { ?>
                            <div class="wrap-block">
                                <div class="employee-page__about-label"><?php echo get_field('obrazovanie_nazvanie_zagolovka'); ?></div>
                                <div class="employee-page__about-text"><?php echo get_field('obrazovanie_tekst'); ?></div>
                            </div>
                        <?php } ?>

                        <?php if (get_field('napravleniya_vklyuchitvyklyuchit_blok')) { ?>
                            <div class="wrap-block">
                                <div class="employee-page__direct-label"><?php echo get_field('napravleniya_nazvanie_zagolovka'); ?></div>
                                <div class="employee-page__direct-list"><?php echo get_field('napravleniya_tekst'); ?></div>
                            </div>
                        <?php } ?>

                        <?php if (get_field('napravleniya_pokazatskryt_knopku_zapisatsya_k_speczialistu')) { ?>
                            <div class="wrap-block">
                                <div class="spec-btn-wrap__zapis upper"><?php echo get_field('napravleniya_nazvanie_knopki_zapisatsya_k_speczialistu'); ?></div>
                            </div>
                        <?php } ?>

                    </div>

                </div>


                <?php if (get_field('liczenzii_i_sertifikaty_vklyuchitvyklyuchit_blok')) { ?>
                    <div class="employee-page__inner_lr_licenz">
                        <div class="spec-licenz">
                            <div class="spec-licenz-title"><?php echo get_field('liczenzii_i_sertifikaty_nazvanie_zagolovka'); ?></div>
                            <div class="spec-licenz__slider swiper">
                                <div class="spec-licenz__slider-wr swiper-wrapper">

                                    <?php if (have_rows('liczenzii_i_sertifikaty_liczenzii_i_sertifikaty_slajder')) : ?>
                                        <?php while (have_rows('liczenzii_i_sertifikaty_liczenzii_i_sertifikaty_slajder')) : the_row(); ?>
                                            <div class="spec-licenz__item swiper-slide">
                                                <a href="<?php echo get_sub_field('izobrazhenie'); ?>" class="spec-licenz__item-img" data-fancybox="gallery">
                                                    <img src="<?php echo get_sub_field('izobrazhenie'); ?>" alt="sertificat">
                                                </a>
                                            </div>
                                    <?php endwhile;
                                    endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>


            </div>
        </div>
    </div>
</main>
<!-- /main -->

<?php get_footer(); ?>