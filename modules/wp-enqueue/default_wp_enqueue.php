<?php
function lexco_theme_load_enqueue_default()
{
    if (!is_admin()) {
        // wp_enqueue_script('lexco_theme_main_js', get_theme_file_uri('/assets/build/frontend.js'), array('wp-element'), '1.0', true);
        // wp_enqueue_style('lexco_theme_main_css', get_theme_file_uri('/assets/build/frontend.css'));

        wp_enqueue_script('lexco_theme_main_js', get_theme_file_uri('/src/static/global.js', array(['wp-element']), '1.0', true));
        wp_enqueue_style('lexco_theme_main_css', get_theme_file_uri('/src/css/frontend.css'));

        wp_localize_script(
            'lexco_theme_main_js',
            'INFO_GLOCAL_THEME_JS',
            array(
                'ajax_url' => admin_url('admin-ajax.php'),
                'nonce' => wp_create_nonce('lexco_theme_ajax'),
                'site_url' => site_url(),
                'site_name' => get_option('blogname'),
            )
        );
    }
}

function lexco_theme_load_enqueue_default_footer()
{
    // Ruta al archivo JavaScript
    $js_url = get_template_directory_uri() . '/ruta/a/tu/archivo.js';

    // Registra el script
    wp_register_script('mi-script', $js_url, array('jquery'), '1.0', true);

    // Enqueue el script
    wp_enqueue_script('mi-script');
}

// Agregar scripts
add_action('wp_enqueue_scripts', 'lexco_theme_load_enqueue_default');