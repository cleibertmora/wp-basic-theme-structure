<?php
/* Template Name: Nosotros
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
<div class="container-fluid mb-3">
    <div class="row">
        <div class="col-md-5 d-flex flex-column justify-content-center ps-5 pt-3">
            <div>
                <h1 class="display-2 mb-3 fw-bold text-primary ps-5">Nosotros <br>lo hacemos<br>posible</h1>
            </div>
            <div>
                <a href="<?= esc_url(home_url('/contactanos')); ?>"
                    class="btn btn-warning btn-lg text-white ms-5">CONTÁCTANOS</a>
            </div>
        </div>
        <div class="col-md-7 d-none d-sm-none d-md-block d-lg-block">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/nosotros.jpg' ?>"
                alt="Imagen de ejemplo" class="img-fluid">
        </div>
    </div>
</div>

<!-- Banner de Lexco con descripcion -->
<div class="container-fluid bg-primary py-4 px-5">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-2 text-center pb-3">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/logo-lexco.png' ?>"
                class="bg-white rounded-circle" height="200px" alt="Logo Lexco">
        </div>
        <div class="col-md-10">
            <p class="text-white text-center fw-bold fs-3">Somos una compañía de servicios legales, especializada en
                constitución de compañías y todo lo referente a derecho de empresas.</p>
            <p class="text-center fw-bold fs-3 text-warning">Tenemos más de una década de experiencia en este campo
                legal.</p>
        </div>
    </div>
</div>

<!-- Mision y vision -->
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">

            <img src="https://lexcojuridico.com/wp-content/uploads/2023/09/franklin-mercedes-min.jpg" class="img-fluid"
                alt="Imagen">
        </div>
        <div class="col-md-6">

            <div class="d-flex flex-column align-items-center">
                <h2 class="fs-1 fw-bold text-primary text-center pb-3 pt-3">Misión y Visión</h2>
                <h3 class="fs-2 fw-bold text-center">Misión</h3>
                <p class="fs-5 container text-center">Fomentar la creación de empresas con la finalidad de impulsar la
                    inversión, el empleo y la innovación.</p>
                <h3 class="fs-2 fw-bold text-center">Visión</h3>
                <p class="fs-5 container text-center">Convertirnos en la compañía de asesoramiento de empresas más
                    grande de Ecuador.</p>
            </div>
        </div>
    </div>
</div>

<!-- Valores -->
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <!-- Primera Columna con Valores Lexco -->
            <div class="d-flex flex-column align-items-center">
                <h2 class="fs-1 fw-bold text-primary text-center pb-3">Valores Lexco</h2>
                <div>
                    <p class="fs-5 text-center">Honestidad</p>
                    <p class="fs-5 text-center">Eficiencia</p>
                    <p class="fs-5 text-center">Compromiso</p>
                    <p class="fs-5 text-center">Excelencia</p>
                    <p class="fs-5 text-center">Innovación</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Segunda Columna con la Imagen -->
            <img src="https://lexcojuridico.com/wp-content/uploads/2023/09/grupo2-min-scaled.jpg" class="img-fluid"
                alt="Imagen">
        </div>
    </div>
</div>

<!-- Gerente -->
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <!-- Primera Columna con la Imagen -->
            <img src="https://lexcojuridico.com/wp-content/uploads/2023/09/franklin2-min-scaled.jpg" class="img-fluid"
                alt="Imagen">
        </div>
        <div class="col-md-6">
            <!-- Segunda Columna con la Información del Gerente General -->
            <div class="d-flex flex-column align-items-start">
                <p class="fs-1 fw-bold text-primary pb-2 pt-3">Gerente General</p>
                <h3 class="fs-2 fw-bold text-warning pb-2">Abg. Franklin Alarcón Palomeque</h3>
                <p class="fs-5 text-start">El Abg. Franklin Alarcón Palomeque, Magister en Derecho, graduado en la
                    Universidad Católica de Santiago de Guayaquil es el Gerente General de Lexco, quien tiene más de 10
                    años de experiencia en derecho de compañías y empresas.</p>
            </div>
        </div>
    </div>
</div>

<!-- Equipo -->
<div class="container mt-5 pb-4 mb-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-warning text-decoration-underline mt-5 fw-bold pb-4">Nuestro Equipo</h2>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card shadow h-100">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://lexcojuridico.com/wp-content/uploads/2023/09/mercedes-min-scaled.jpg"
                            class="card-img" alt="Foto 1">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body fs-5">
                            <h4 class="card-title text-warning">Mercedes Veloz Román</h4>
                            <p class="card-text">Presidenta</p>
                            <p class="fs-6">Asesora empresarial, encargada de coordinar el planteamiento de estrategias
                                y objetivos de venta, asegurando la satisfacción del cliente. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow h-100">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://lexcojuridico.com/wp-content/uploads/2023/09/karen-min-scaled.jpg"
                            class="card-img" alt="Foto 2">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body fs-5">
                            <h4 class="card-title text-warning">Karen Londoño Limones</h4>
                            <p class="card-text">Coordinadora de Marketing</p>
                            <p class="fs-6">Encargada de garantizar la funcionalidad y coordinación de estrategias de
                                ventas, marketing tradicional y digital. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card shadow h-100">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://lexcojuridico.com/wp-content/uploads/2023/09/valentina-min-scaled.jpg"
                            class="card-img" alt="Foto 1">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body fs-5">
                            <h4 class="card-title text-warning">Valentina Acosta Aveiga</h4>
                            <p class="card-text">Asistente Legal</p>
                            <p class="fs-6">Encargada de asistir en trámites legales empresariales, así como participar
                                en la coordinación de funciones operativas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow h-100">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://lexcojuridico.com/wp-content/uploads/2023/09/contadora-min-scaled.jpg"
                            class="card-img" alt="Foto 1">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body fs-5">
                            <h4 class="card-title text-warning">Alejandra Aguilar Toledo</h4>
                            <p class="card-text">Contadora</p>
                            <p class="fs-6">Encargada del servicio contable, elaboración de declaraciones de impuestos,
                                reportes financieros y registros contables. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
lexco_theme_render_footer();

// Footer
get_footer();