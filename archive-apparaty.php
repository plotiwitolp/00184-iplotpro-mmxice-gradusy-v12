<?php
if (!defined('ABSPATH')) {
    wp_die();
}

get_header();
?>

<!-- main -->
<main class="main">
    <div class="client-page">
        <div class="client">
            <div class="container">
                <div class="client__in">
                    <h2 class="client__head section__title">Аппараты</h2>

                    <div class="client__body">
                        <div class="client__body_apparaty ">
                            <div class="client__body_apparaty_wr">
                                <a href="<?php echo home_url('/apparaty-item'); ?>" class="client__body_slider_slide">
                                    <div class="client__body_slider_slide_img">
                                        <picture>
                                            <source srcset="" type="image/webp">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/apparaty/01.png" alt="client-img">
                                        </picture>
                                    </div>
                                    <div class="client__body_slider_slide_descr">
                                        <div class="client__body_slider_slide_descr_name">Bio-Ultimate Gold</div>
                                        <div class="client__body_slider_slide_descr_date">
                                            <!-- sub text -->
                                        </div>
                                        <div class="client__body_slider_slide_descr_text">
                                            <!-- средства ухода за кожей и волосами -->
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo home_url('/apparaty-item'); ?>" class="client__body_slider_slide">
                                    <div class="client__body_slider_slide_img">
                                        <picture>
                                            <source srcset="" type="image/webp">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/apparaty/02.png" alt="client-img">
                                        </picture>
                                    </div>
                                    <div class="client__body_slider_slide_descr">
                                        <div class="client__body_slider_slide_descr_name">Пилинг «АТИСМЕД»</div>
                                        <div class="client__body_slider_slide_descr_date">
                                            <!-- sub text -->
                                        </div>
                                        <div class="client__body_slider_slide_descr_text">
                                            <!-- desc -->
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo home_url('/apparaty-item'); ?>" class="client__body_slider_slide">
                                    <div class="client__body_slider_slide_img">
                                        <picture>
                                            <source srcset="" type="image/webp">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/apparaty/03.png" alt="client-img">
                                        </picture>
                                    </div>
                                    <div class="client__body_slider_slide_descr">
                                        <div class="client__body_slider_slide_descr_name">Ультразвуковая чистка «Галатея»</div>
                                        <div class="client__body_slider_slide_descr_date">
                                            <!-- sub text -->
                                        </div>
                                        <div class="client__body_slider_slide_descr_text">
                                            <!-- desc -->
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo home_url('/apparaty-item'); ?>" class="client__body_slider_slide">
                                    <div class="client__body_slider_slide_img">
                                        <picture>
                                            <source srcset="" type="image/webp">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/apparaty/04.png" alt="client-img">
                                        </picture>
                                    </div>
                                    <div class="client__body_slider_slide_descr">
                                        <div class="client__body_slider_slide_descr_name">Smas lifting ultraformer 3</div>
                                        <div class="client__body_slider_slide_descr_date">
                                            <!-- sub text -->
                                        </div>
                                        <div class="client__body_slider_slide_descr_text">
                                            <!-- desc -->
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo home_url('/apparaty-item'); ?>" class="client__body_slider_slide">
                                    <div class="client__body_slider_slide_img">
                                        <picture>
                                            <source srcset="" type="image/webp">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/apparaty/05.png" alt="client-img">
                                        </picture>
                                    </div>
                                    <div class="client__body_slider_slide_descr">
                                        <div class="client__body_slider_slide_descr_name">Innofill 4</div>
                                        <div class="client__body_slider_slide_descr_date">
                                            <!-- sub text -->
                                        </div>
                                        <div class="client__body_slider_slide_descr_text">
                                            <!-- desc -->
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo home_url('/apparaty-item'); ?>" class="client__body_slider_slide">
                                    <div class="client__body_slider_slide_img">
                                        <picture>
                                            <source srcset="" type="image/webp">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/apparaty/06.png" alt="client-img">
                                        </picture>
                                    </div>
                                    <div class="client__body_slider_slide_descr">
                                        <div class="client__body_slider_slide_descr_name">Cortexil PRP</div>
                                        <div class="client__body_slider_slide_descr_date">
                                            <!-- sub text -->
                                        </div>
                                        <div class="client__body_slider_slide_descr_text">
                                            <!-- desc -->
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<!-- /main -->

<?php get_footer(); ?>