<?php
// start отключение уведомления об обновлении плагина ACF PRO
function filter_plugin_updates($value)
{
    unset($value->response['advanced-custom-fields-pro/acf.php']);
    return $value;
}
add_filter('site_transient_update_plugins', 'filter_plugin_updates');
// end отключение уведомления об обновлении плагина ACF PRO

// start подключение стилей и скриптов
function add_styles_for_specific_template()
{
    if (is_singular('specialisty')) {
        wp_enqueue_style('specialist-item', get_template_directory_uri() . '/css/specialist-item.css');
    }
}
add_action('wp_enqueue_scripts', 'add_styles_for_specific_template');
// end подключение стилей и скриптов

// START СТАНДАРТНЫЕ НАСТРОЙКИ ТЕМЫ
add_theme_support('post-thumbnails');

// start отключение стандартных записей
function remove_posts_menu()
{
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_posts_menu');
// end отключение стандартных записей

// start настройка логотипа
function config_custom_logo()
{
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'config_custom_logo');
// end настройка логотипа

// END СТАНДАРТНЫЕ НАСТРОЙКИ ТЕМЫ


// START ПОРИЗВОЛЬНЫЕ ТИПЫ 
function registration_post_type_services()
{
    register_post_type(
        'services',
        array(
            'labels' => array(
                'name' => __('Услуги'),
                'singular_name' => __('Услуга'),
                'add_new' => __('Добавить новую услугу'),
                'add_new_item'  => __('Добавить новую услугу'),
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'menu_icon' => 'dashicons-products',
            'supports' => array('title', 'editor', 'thumbnail', 'tag'),
            'rewrite' => array(
                'slug' => 'uslugi',
                'with_front' => false,
            ),
            'has_archive' => true,
            'hierarchical' => true,
        )
    );

    register_post_type(
        'specialisty',
        array(
            'labels' => array(
                'name' => __('Специалисты'),
                'singular_name' => __('Специалист'),
                'add_new' => __('Добавить нового специалиста'),
                'add_new_item'  => __('Добавить нового специалиста'),
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'menu_icon' => 'dashicons-businessman',
            'supports' => array('title', 'editor', 'thumbnail', 'tag'),
            'rewrite' => array(
                'slug' => 'specialisty',
                'with_front' => false,
            ),
            'has_archive' => true,
            'hierarchical' => false,
        )
    );

    register_post_type(
        'problemy_i_resheniya',
        array(
            'labels' => array(
                'name' => __('Проблемы и решения'),
                'singular_name' => __('Проблемы и решения'),
                'add_new' => __('Добавить новую запись'),
                'add_new_item'  => __('Добавить новоую запись'),
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'menu_icon' => 'dashicons-warning',
            'supports' => array('title', 'editor', 'thumbnail', 'tag'),
            'rewrite' => array(
                'slug' => 'problemy-i-resheniya',
                'with_front' => false,
            ),
            'has_archive' => true,
            'hierarchical' => false,
        )
    );

    register_post_type(
        'apparaty',
        array(
            'labels' => array(
                'name' => __('Аппараты'),
                'singular_name' => __('Аппараты'),
                'add_new' => __('Добавить новый аппарат'),
                'add_new_item'  => __('Добавить новый аппарат'),
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'menu_icon' => 'dashicons-vault',
            'supports' => array('title', 'editor', 'thumbnail', 'tag'),
            'rewrite' => array(
                'slug' => 'apparaty',
                'with_front' => false,
            ),
            'has_archive' => true,
            'hierarchical' => false,
        )
    );

    register_post_type(
        'onlinebutik',
        array(
            'labels' => array(
                'name' => __('Товары "Онлайн-бутика"'),
                'singular_name' => __('Товар "Онлайн-бутика"'),
                'add_new' => __('Добавить новый товар'),
                'add_new_item'  => __('Добавить новый товар'),
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'menu_icon' => 'dashicons-cart',
            'supports' => array('title', 'editor', 'thumbnail', 'tag'),
            'rewrite' => array(
                'slug' => 'online-boutique',
                'with_front' => false,
            ),
            'has_archive' => true,
            'hierarchical' => false,
        )
    );

    register_post_type(
        'akcii',
        array(
            'labels' => array(
                'name' => __('Акции и спецпредложения'),
                'singular_name' => __('Акции и спецпредложения'),
                'add_new' => __('Добавить новую запись'),
                'add_new_item'  => __('Добавить новую запись'),
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'menu_icon' => 'dashicons-megaphone',
            'supports' => array('title', 'editor', 'thumbnail', 'tag'),
            'rewrite' => array(
                'slug' => 'akcii',
                'with_front' => false,
            ),
            'has_archive' => true,
            'hierarchical' => false,
        )
    );

    register_post_type(
        'news',
        array(
            'labels' => array(
                'name' => __('Новости'),
                'singular_name' => __('Новость'),
                'add_new' => __('Добавить новую новость'),
                'add_new_item'  => __('Добавить новую новость'),
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'menu_icon' => 'dashicons-media-document',
            'supports' => array('title', 'editor', 'thumbnail', 'tag'),
            'rewrite' => array(
                'slug' => 'news',
                'with_front' => false,
            ),
            'has_archive' => true,
            'hierarchical' => false,
        )
    );

    register_taxonomy(
        'servicecat',
        ['services'],
        array(
            'label' => __('Категории услуг'),
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'hierarchical' => true,
            'rewrite' => array(
                'slug' => 'usluga',
                'with_front' => true,
            ),
        )
    );
}
add_action('init', 'registration_post_type_services');


function true_taxonomy_filter()
{
    global $typenow;
    if ($typenow == 'services') {
        $taxes = array('servicecat');
        foreach ($taxes as $tax) {
            $current_tax = isset($_GET[$tax]) ? $_GET[$tax] : '';
            $tax_obj = get_taxonomy($tax);
            $tax_name = mb_strtolower($tax_obj->labels->name);

            $terms = get_terms($tax);
            if (count($terms) > 0) {
                echo "<select name='$tax' id='$tax' class='postform'>";
                echo "<option value=''>Все $tax_name</option>";
                foreach ($terms as $term) {
                    echo '<option value=' . $term->slug, $current_tax == $term->slug ? ' selected="selected"' : '', '>' . $term->name . ' (' . $term->count . ')</option>';
                }
                echo "</select>";
            }
        }
    }
}

add_action('restrict_manage_posts', 'true_taxonomy_filter');

add_action('admin_head', 'hide_taxonomy_description');
function hide_taxonomy_description()
{
    $taxonomy = 'servicecat';
    $screen = get_current_screen();

    if ($screen->taxonomy === $taxonomy) {
        echo '<style>.term-description-wrap, .term-parent-wrap { display: none !important; } #edittag { max-width: 1280px; }</style>';
    }
}


// end фильтры для иерархических URL 
// END ПОРИЗВОЛЬНЫЕ ТИПЫ 

// START МЕНЮ
function register_my_menu()
{
    register_nav_menu('primary-menu-middle', __('Основное меню (средняя часть)'));
    register_nav_menu('primary-menu-last', __('Основное меню (последняя часть)'));
    register_nav_menu('footer-menu', __('Меню в подвале (footer-menu)'));
}
add_action('after_setup_theme', 'register_my_menu');


// start кастомизация меню
function custom_menu_item_classes($classes, $item, $args)
{
    $classes[] = 'menu__part_item'; // Добавление класса для тегов <li>
    return $classes;
}
add_filter('nav_menu_css_class', 'custom_menu_item_classes', 10, 3);

function custom_menu_link_attributes($atts, $item, $args)
{
    $atts['class'] = 'menu__part_item_link'; // Добавление класса для тегов <a>
    return $atts;
}
add_filter('nav_menu_link_attributes', 'custom_menu_link_attributes', 10, 3);
// end кастомизация меню

// END МЕНЮ