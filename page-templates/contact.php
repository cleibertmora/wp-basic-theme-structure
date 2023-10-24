<?php
/* Template Name: Contáctanos
    Template Post Type: page
*	@package Lexco Theme
*   @since Lexco Theme 1.0
*/

// Header
get_header();

// Navegacion
lexco_theme_render_nav();
?>


<!-- Header -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5 d-flex flex-column justify-content-center ps-5 pt-3">
            <div>
                <h1 class="display-2 mb-3 fw-bold text-primary">Contacta<br>para mayor<br>asesoría</h1>
            </div>
        </div>
        <div class="col-md-7 d-none d-sm-none d-md-block d-lg-block">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/contacto.jpg' ?>"
                alt="Imagen de ejemplo" class="img-fluid">
        </div>
    </div>
</div>

<!-- Formulario -->
<div class="container-fluid d-flex justify-content-center align-items-center pb-4 pt-4 mt-4 mb-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center text-warning fs-4">¿En qué podemos ayudarte?</h3>
                <p class="text-center text-primary fs-1">Déjanos un mensaje</p>

                <!-- Formulario -->
                <div class="form_contact_page">
                    <?= do_shortcode('[contact-form-7 id="554e52a" title="Contacto"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>

<?php
lexco_theme_render_footer();

// Footer
get_footer();