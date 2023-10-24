<?php

class LexcoThemeRegisterMenusHook
{
    private static $instance;

    private function __construct()
    {
        // Hook para registrar el menu        
        add_action('init', array($this, 'lexco_theme_register_global_menus'));
    }

    public static function get_instance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function lexco_theme_register_global_menus()
    {
        register_nav_menus(
            array(
                'primary-menu' => __('Menu Principal')
            )
        );
    }

}