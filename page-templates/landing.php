<?php
/* Template Name: Landing
    Template Post Type: page
*	@package Lexco Theme
*   @since Lexco Theme 1.0
*/

// Header
get_header();
?>

<!-- Header landing -->
<div class="container-fluid d-md-none text-center">
    <img src="<?= get_template_directory_uri() . '/assets/static/images/logo-lexco.png' ?>" height="80px" alt="logo"
        class="">
</div>

<div class="container-fluid img-lexco">
    <div class="row">
        <!-- Columna Izquierda -->
        <div class="col-md-7 d-flex flex-column justify-content-start pb-5 pt-5 ps-md-5">
            <h3 class="text-warning display-2 fw-bold movil mb-5">Transforma <span class="sm-gold">tu negocio en la
                    empresa de </span> tus sueños</h3>
            <h1 class="display-4 fw-bold text-warning d-none d-md-block">Constitución de compañías</h1>
            <h1 class="display-4 fw-bold text-dark d-md-none movil">Constitución de compañías</h1>
            <h2 class="text-white fw-bold display-6 d-none d-md-block">Constituimos tu empresa en 15 días desde $360
                (precio no incluye IVA).</h2>
            <h2 class="text-dark fw-bold display-5 d-md-none movil">Constituimos tu empresa en 15 días desde $360
                (precio no incluye IVA).</h2>
        </div>
        <!-- Columna Derecha -->
        <div class="col-md-5 text-center d-flex flex-column justify-content-center align-items-center">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/logo-lexco.png' ?>" height="150px"
                alt="logo" class="d-none d-md-block">
            <div id="otraSeccion" class="bg-white pb-4 pt-4 px-5 mb-3 rounded">
                <p class="text-center text-warning fs-4">REGÍSTRATE PARA UNA</p>
                <p class="text-center text-primary fs-1 fw-bold">ASESORÍA GRATIS</p>

                <!-- Formulario -->
                <div class="form_landind_page">
                    <?= do_shortcode('[contact-form-7 id="c8877d0" title="Landing"]'); ?>
                </div>
            </div>
            <!-- Fin del contenido del formulario -->
        </div>
    </div>
</div>

<!-- Beneficios de contratar -->
<div class="container-fluid bg-secondary-subtle py-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="fs-1 text-primary fw-bold">BENEFICIOS QUE PUEDES CONSEGUIR</h3>
            <h3 class="mt-3 fs-2 text-secondary pb-5 fw-bold">AL CONTRATAR NUESTROS SERVICIOS</h3>
        </div>
    </div>
    <div class="row mt-4 px-3">
        <div class="col-md-3 text-center col-sm-6 col-12">
            <img src="<?= get_template_directory_uri() . '/assets/static/icon/agilidad.svg' ?>" alt="Agilidad"
                height="150px">
            <p class="pt-3 fs-3">Agilidad del trámite según las necesidades del cliente.</p>
        </div>
        <div class="col-md-3 text-center col-sm-6 col-12">
            <img src="<?= get_template_directory_uri() . '/assets/static/icon/guia.svg' ?>" alt="Guia" height="150px">
            <p class="pt-3 fs-3">Asesoría sobre los pasos a seguir después de la constitución.</p>
        </div>
        <div class="col-md-3 text-center col-sm-6 col-12">
            <img src="<?= get_template_directory_uri() . '/assets/static/icon/documento.svg' ?>" alt="Documento"
                height="150px">
            <p class="pt-3 fs-3">Documentos para apertura de la cuenta bancaria de tu empresa.</p>
        </div>
        <div class="col-md-3 text-center col-sm-6 col-12">
            <img src="<?= get_template_directory_uri() . '/assets/static/icon/sesion.svg' ?>" alt="Sesion"
                height="150px">
            <p class="pt-3 fs-3">Asesoramiento empresarial.</p>
        </div>
    </div>
</div>

<!-- Lo que incluye el servicio -->
<div class="container mt-5 mb-5 pb-5 border-bottom border-dark-subtle">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3 class="display-3 fw-bold text-primary pb-5">Lo que incluye el servicio</h3>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <ul>
                <p><i class="far fa-check-circle text-success"></i> Estatuto inscrito</p>
                <p><i class="far fa-check-circle text-success"></i> Nombramiento inscrito</p>
                <p><i class="far fa-check-circle text-success"></i> RUC de la empresa</p>
                <p><i class="far fa-check-circle text-success"></i> Claves del SRI y Superintendencia</p>
            </ul>
        </div>
        <div class="col-md-6">
            <ul>
                <p><i class="far fa-check-circle text-success"></i> Certificados para abrir cuenta bancaria</p>
                <p><i class="far fa-check-circle text-success"></i> Charla de asesoría empresarial</p>
                <p><i class="far fa-check-circle text-success"></i> Guía escrita de asesoría empresarial</p>
                <p><i class="far fa-check-circle text-success"></i> Asesoría sobre apertura de cuentas bancarias</p>
            </ul>
        </div>
    </div>
    <div class="py-4 justify-content-center align-items-center text-center">
        <button id="scrollButton2" class="btn btn-lg btn-warning text-white fw-bold text-center">ASESORÍA
            GRATIS</button>
    </div>
</div>

<!-- Testimonios -->
<div class="container-fluid pt-4 pb-4 mb-4 bg-white">
    <div class="pb-3">
        <h3 class="text-center display-4 text-warning">Lo que dicen</h3>
        <p class="text-center display-3 text-primary fw-bold">Nuestros clientes</p>
    </div>
    <div class="">
        <div class="row m-2">
            <div class="col-md-4 text-center mb-2">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="text-center text-warning pt-2">
                            <img src="<?= get_template_directory_uri() . '/assets/static/images/byron.JPG' ?>"
                                alt="Testimonio 1" class="img-fluid rounded-circle border border-5 border-warning w-50">
                        </div>
                        <p class="text-center text-primary pt-3">Byron Pérez</p>
                        <p class="text-warning">Gerente de Smart Medic</p>
                        <p>"Crearon mi compañía ágilmente y me entregaron todo listo para operar. Excelente servicio de
                            Lexco. Sin pensarlo los recomendaría para la creación de cualquier compañía".</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center mb-2">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="text-center text-warning pt-2">
                            <img src="<?= get_template_directory_uri() . '/assets/static/images/tatiana.jpg' ?>"
                                alt="Testimonio 7" class="img-fluid rounded-circle border border-5 border-warning w-50">
                        </div>
                        <p class="text-center text-primary pt-3">Tatiana Araujo</p>
                        <p class="text-warning">Gerente de Bad Rabbit Ecuador</p>
                        <p>"Gracias por establecer nuestra compañía de Colombia en el Ecuador. Estamos muy contentos con
                            su servicio y resultados".</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center mb-2">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="text-center text-warning">
                            <img src="<?= get_template_directory_uri() . '/assets/static/images/robin.JPG' ?>"
                                alt="Testimonio 3" class="img-fluid rounded-circle border border-5 border-warning w-50">
                        </div>
                        <p class="text-center text-primary pt-3">Robin Zambrano</p>
                        <p class="text-warning">Gerente de Robinza Fumiobras</p>
                        <p>"Gracias a Lexco pude cumplir con mi sueño de crear mi empresa fumigación integral y ahora es
                            una realidad. Tiene un cliente y un amigo".</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Foto con formulario -->
<div class="container-fluid img-lexco2 more-py">
    <div class="row">
        <div class="col-md-7 d-none d-md-block">
        </div>
        <div
            class="col-md-5 col-sm-12 col-12 text-center d-flex flex-column justify-content-center align-items-center m-movil">
            <div id="targetSection" class="bg-white py-5 px-5 my-5 rounded">
                <p class="text-center text-warning fs-4">REGÍSTRATE PARA UNA</p>
                <p class="text-center text-primary fs-1 fw-bold">ASESORÍA GRATIS</p>

                <!-- Formulario -->
                <div class="form_landind_page">
                    <?= do_shortcode('[contact-form-7 id="c8877d0" title="Landing"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Grandes empresas -->
<div class=" container-fluid mt-5">
    <h3 class="text-center fs-1 text-primary fw-bold">GRANDES EMPRESAS CONFÍAN EN NOSOTROS</h3>
    <div class="row mx-4">
        <div class="col-md-3 col-sm-6 col-6">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/dharma.png' ?>" alt="Cliente 1"
                class="img-fluid">
        </div>
        <div class="col-md-3 col-sm-6 col-6">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/ecuadental.png' ?>" alt="Cliente 2"
                class="img-fluid">
        </div>
        <div class="col-md-3 col-sm-6 col-6">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/fehierro.png' ?>" alt="Cliente 3"
                class="img-fluid">
        </div>
        <div class="col-md-3 col-sm-6 col-6">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/drpet.png' ?>" alt="Cliente 4"
                class="img-fluid">
        </div>
    </div>
    <div class="row mx-4">
        <div class="col-md-3 col-sm-6 col-6">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/paradox.png ' ?>" alt="Cliente 5"
                class="img-fluid">
        </div>
        <div class="col-md-3 col-sm-6 col-6">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/dryclean.png ' ?>" alt="Cliente 6"
                class="img-fluid">
        </div>
        <div class="col-md-3 col-sm-6 col-6">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/boloncity.png ' ?>" alt="Cliente 7"
                class="img-fluid">
        </div>
        <div class="col-md-3 col-sm-6 col-6">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/ainsa.png ' ?>" alt="Cliente 8"
                class="img-fluid">
        </div>
    </div>
</div>

<!-- Banner sobre experiencia y compañias -->
<div class="container-fluid py-5 my-3 px-4">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-12 text-center bg-primary py-5">
            <i class="fa-regular fa-hourglass-half fa-4x py-3 text-warning"></i>
            <h4 class="text-white fs-3">+ de 10 años <br> de experiencia</h4>
        </div>
        <div class="col-md-4 col-sm-4 col-12 text-center bg-primary text-white py-5">
            <i class="fa-solid fa-handshake fa-4x py-3 text-warning"></i>
            <h4 class="fs-3">+ de 1500 <br> compañías constituidas</h4>
        </div>
        <div class="col-md-4 col-sm-4 col-12 text-center bg-primary text-white py-5">
            <i class="fa-solid fa-people-line fa-4x py-3 text-warning"></i>
            <h4 class="fs-3">+ del 98% <br> de clientes satisfechos</h4>
        </div>
    </div>
</div>

<!-- Banderas extranjeras -->
<div class="container pb-5 mb-5">
    <div class="row">
        <div class="col-md-12 text-center px-4">
            <!-- <h2 class="fw-bold display-6 text-primary "></h2> -->
            <p class="display-6 pb-5 text-primary fw-bold">Tenemos clientes de</p>
        </div>
    </div>
    <div class="row d-flex justify-content-center align-items-center text-center px-3">
        <div class="col-md-3 col-sm-3 col-3">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/colombia.png' ?>"
                alt="Bandera de Colombia" class="img-fluid rounded-circle h-100 w-50 border border-dark">
        </div>
        <div class="col-md-3 col-sm-3 col-3">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/peru.png' ?>" alt="Bandera de Venezuela"
                class="img-fluid rounded-circle h-100 w-50 border border-dark">
        </div>
        <div class="col-md-3 col-sm-3 col-3">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/chile.png' ?>" alt="Bandera de Chile"
                class="img-fluid rounded-circle h-100 w-50 border border-dark">
        </div>
        <div class="col-md-3 col-sm-3 col-3">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/argentina.png' ?>"
                alt="Bandera de Argentina" class="img-fluid rounded-circle h-100 w-50 border border-dark">
        </div>
    </div>
</div>


<!-- Foto de equipo con suscribete -->
<div class="container-fluid mb-5 img-lexco3 d-flex justify-content-center align-items-end">
    <div class="text-center">
        <button id="scrollButton" class="btn-asesoria">
            ASESORÍA GRATIS
        </button>
    </div>
</div>

<?php
lexco_theme_render_footer();

// Footer
get_footer();