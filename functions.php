<?php

// Registrar Modulos
include_once 'modules/register.php';

// Registrar componentes
include_once 'components/register.php';

// Registrar hooks
include_once 'hooks/register.php';

// Quitar el auto wrap con etiquetas p en contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');

// Logo del login
function lexco_theme_add_login_logo()
{
    echo '<style type="text/css">
        h1 a {
            background-image:url(' . get_stylesheet_directory_uri() . '/assets/static/images/logo-lexco.png) !important;
            background-size: contain !important;
            width: 100% !important;
            height: 150px !important;
        }
    </style>';
}

add_action('login_head', 'lexco_theme_add_login_logo');