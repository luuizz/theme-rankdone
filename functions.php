<?php 

function rankdone_load_scripts() {
    // Estilo do plugin
    wp_enqueue_style( 'rankdone-plugin-style', get_template_directory_uri() . '/css/plugins.css', array(), '1.0', 'all' );

    // Estilo principal
    wp_enqueue_style( 'rankdone-style', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all' );
}

function rankdone_load_js() {
    // Script do plugin
    wp_register_script( 'plugin-script', get_template_directory_uri() . '/js/plugins.js', array(), '1.0', true );
    wp_enqueue_script( 'plugin-script' );

    // Script principal
    wp_register_script( 'main-script', get_template_directory_uri() . '/js/all.js', array(), '1.0', true );
    wp_enqueue_script( 'main-script' );
}


// Adicionar e registrar menus menus
function registrar_menu() {
    register_nav_menu('menu-principal',__( 'Menu Principal' ));
}
  

function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

function getPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    return $count;
}

function get_reading_time() {
    $post_content = get_post_field('post_content');

    $word_count = str_word_count(strip_tags($post_content));

    $average_reading_speed_seconds = 0.3; 

    $reading_time_seconds = ceil($word_count * $average_reading_speed_seconds);

    $minutes = floor($reading_time_seconds / 60);
    $seconds = $reading_time_seconds % 60;

    if ($minutes >= 1) {
        return $minutes . ' min de leitura';
    } elseif ($seconds >= 1) {
        return $seconds . 's de leitura';
    } else {
        return '0s de leitura';
    }
};


// Adicionando Widgets
function rankdone_sidebars() {
    register_sidebar(
        array(
            'name' => 'Link 1',
            'id' => 'link-1',
            'description' => 'Esta é a área que você vai controlar os links do rodapé.',
            'before_widget' => '<div class="item-nav">',
            'after_widget' => '</div>',
            'before_title' => '<h6>',
            'after_title' => '</h6>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Link 2',
            'id' => 'link-2',
            'description' => 'Esta é a área que você vai controlar os links do rodapé.',
            'before_widget' => '<div class="item-nav">',
            'after_widget' => '</div>',
            'before_title' => '<h6>',
            'after_title' => '</h6>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Link 3',
            'id' => 'link-3',
            'description' => 'Esta é a área que você vai controlar os links do rodapé.',
            'before_widget' => '<div class="item-nav">',
            'after_widget' => '</div>',
            'before_title' => '<h6>',
            'after_title' => '</h6>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Link 4',
            'id' => 'link-4',
            'description' => 'Esta é a área que você vai controlar os links do rodapé.',
            'before_widget' => '<div class="item-nav">',
            'after_widget' => '</div>',
            'before_title' => '<h6>',
            'after_title' => '</h6>'
        )
    );
}

// Tamanhos customizados de imagem
function rankdone_custom_image_size() {
    add_image_size( 'medium', 592, 320, true );
    add_image_size( 'thumb', 300, 300, array( 'center', 'right' ) );
}

// Fallback de links
function fallback_menu() {
    echo '<ul>';
    echo '<li><a class="link" href="#">Default Link 1</a></li>';
    echo '<li><a class="link" href="#">Default Link 2</a></li>';
    echo '<li><a class="link" href="#">Default Link 3</a></li>';
    echo '</ul>';
}

// Remove action

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Suporte ao tema
add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'editor-color-palette', array(
    array(
        'name' => __( 'Primary', 'rankdone' ),
        'slug' => 'primary',
        'color' => '#9354F0'
    ),
    array(
        'name' => __( 'Secondary', 'rankdone' ),
        'slug' => 'secondary',
        'color' => '#000000'
    ),
    array(
        'name' => __( 'Tertiary', 'rankdone' ),
        'slug' => 'tertiary',
        'color' => '#ffffff'
    ),
    array(
        'name' => __( 'Gray-100', 'rankdone' ),
        'slug' => 'gray-100',
        'color' => '#F5F6FA'
    ),
    array(
        'name' => __( 'Gray-200', 'rankdone' ),
        'slug' => 'gray-200',
        'color' => '#DFE1E8'
    ),
    array(
        'name' => __( 'Gray-300', 'rankdone' ),
        'slug' => 'gray-300',
        'color' => '#C0C3CC'
    ),
    array(
        'name' => __( 'Gray-400', 'rankdone' ),
        'slug' => 'gray-400',
        'color' => '#ABAFBA'
    ),
    array(
        'name' => __( 'Gray-500', 'rankdone' ),
        'slug' => 'gray-500',
        'color' => '#979BA6'
    ),
    array(
        'name' => __( 'Gray-600', 'rankdone' ),
        'slug' => 'gray-600',
        'color' => '#787C87'
    ),
    array(
        'name' => __( 'Gray-700', 'rankdone' ),
        'slug' => 'gray-700',
        'color' => '#5C5F69'
    ),
    array(
        'name' => __( 'Gray-800', 'rankdone' ),
        'slug' => 'gray-800',
        'color' => '#393B42'
    ),
    array(
        'name' => __( 'Gray-900', 'rankdone' ),
        'slug' => 'gray-900',
        'color' => '#0A0B0D'
    ),
    array(
        'name' => __( 'Purple-50', 'rankdone' ),
        'slug' => 'purple-50',
        'color' => '#F4EEFE'
    ),
    array(
        'name' => __( 'Purple-100', 'rankdone' ),
        'slug' => 'purple-100',
        'color' => '#DECAFA'
    ),
    array(
        'name' => __( 'Purple-200', 'rankdone' ),
        'slug' => 'purple-200',
        'color' => '#CDB0F8'
    ),
    array(
        'name' => __( 'Purple-300', 'rankdone' ),
        'slug' => 'purple-300',
        'color' => '#B78CF5'
    ),
    array(
        'name' => __( 'Purple-400', 'rankdone' ),
        'slug' => 'purple-400',
        'color' => '#A976F3'
    ),
    array(
        'name' => __( 'Purple-500', 'rankdone' ),
        'slug' => 'purple-500',
        'color' => '#9354F0'
    ),
    array(
        'name' => __( 'Purple-600', 'rankdone' ),
        'slug' => 'purple-600',
        'color' => '#864CDA'
    ),
    array(
        'name' => __( 'Purple-700', 'rankdone' ),
        'slug' => 'purple-700',
        'color' => '#683CAA'
    ),
    array(
        'name' => __( 'Purple-800', 'rankdone' ),
        'slug' => 'purple-800',
        'color' => '#512E84'
    ),
    array(
        'name' => __( 'Purple-900', 'rankdone' ),
        'slug' => 'purple-900',
        'color' => '#3E2365'
    )
) );
add_theme_support( 'disable-custom-color' );
add_theme_support( 'custom-logo', array(
    'width' => 153,
    'height' => 28,
    'flex-width' => true,
    'flex-height' => true,
) );
add_theme_support('menus');


// Adicionar Ações
add_action('wp_enqueue_scripts', 'rankdone_load_scripts');
add_action( 'wp_enqueue_scripts', 'rankdone_load_js' );
add_action( 'init', 'registrar_menu' );
add_action('widgets_init', 'rankdone_sidebars');
add_action( 'after_setup_theme', 'rankdone_custom_image_size' );

?>