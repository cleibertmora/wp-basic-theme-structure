<?php
/* Template Name: Inicio
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
        <div class="col-md-5 d-flex flex-column justify-content-center pt-3">
            <div>
                <h1 class="display-3 mb-3 fw-bold text-primary ps-5">Innovamos <br>el servicio <br>jurídico</h1>
            </div>
            <div>
                <a href="/servicios" class="btn btn-warning btn-lg text-white ms-5">SERVICIOS</a>
            </div>
        </div>
        <div class="col-md-7 d-none d-sm-none d-md-block d-lg-block">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/inicio2.jpg' ?>" alt="Imagen de ejemplo"
                class="img-fluid">
        </div>
    </div>
</div>


<!-- Contactos -->
<div class="container pt-5 fs-4">
    <div class="row">
        <div class="col-md-4 mb-2 fs-3">
            <div class="card bg-primary text-white h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Síguenos</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-facebook text-warning"></i> Facebook</li>
                        <li><i class="bi bi-instagram text-warning"></i> Instagram</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-2 fs-3">
            <div class="card bg-primary text-white h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Contáctanos</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-whatsapp text-warning"></i> 0962675062</li>
                        <li><i class="bi bi-telephone text-warning"></i> 0995065034</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-2 fs-3">
            <div class="card bg-primary text-white h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Encuéntranos</h5>
                    <p class="card-text fs-4"><i class="bi bi-geo-alt text-warning"></i> Puerto Santa Ana, Edificio The
                        Point, Piso 12, Oficina 1204.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quienes Somos -->
<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-md-6 p-1">
            <img src="https://lexcojuridico.com/wp-content/uploads/2023/09/grupo1-min-scaled.jpg"
                alt="Imagen de la Firma" class="img-fluid">
        </div>
        <div class="col-md-6 p-4">
            <h2 class="fs-1 fw-bold text-primary">¿Quiénes <br> somos?</h2><br>
            <p class="fs-6 container text-justify">Somos una firma de abogados especializada en constitución de
                compañías y todo lo referente al derecho de empresas, con más de una década de experiencia en este
                campo.
                Nuestro equipo se enfoca en brindar una asesoría integral y especializada a los clientes, centrándonos
                en el cumplimiento de sus sueños, metas empresariales, y aportando al crecimiento económico del país.
            </p>
            <a class="btn btn-warning btn-md btn-hover-warning text-white fw-bold" href="/nosotros">NOSOTROS</a><br>
        </div>
    </div>
</div>

<!-- Nuestro Servicios -->
<div class=" pt-4 pb-4 bg-secondary-subtle">
    <div>
        <h2 class="text-center fs-3 text-warning">Nuestros Servicios</h2>
        <p class="text-center fs-1 text-primary">Somos expertos en</p>
    </div>
    <div class="">
        <div class="row m-2">
            <div class="col-md-4 text-center mb-2">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="text-center text-warning pb-2">
                            <img src="<?= get_template_directory_uri() . '/assets/static/icon/edificio2.svg' ?>"
                                alt="Icono 1" height="100px">
                        </div>
                        <h3 class="text-center text-primary">Constitución de Compañías</h3>
                        <p class="fs-5">Somos expertos en todo el proceso legal que conlleva constituir compañías para
                            todas las actividades económicas en Ecuador. Asesoramiento paso a paso.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center mb-2">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="text-center text-warning pb-2">
                            <img src="<?= get_template_directory_uri() . '/assets/static/icon/hand.svg' ?>"
                                alt="Icono 2" height="100px">
                        </div>
                        <h3 class="text-center text-primary">Socios y Representantes</h3>
                        <p class="fs-5">Realizamos cambios de socios y accionistas para nuevas inversiones o
                            restructuración Asimismo, cambios de representantes legales de compañías.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center mb-2">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="text-center text-warning pb-2">
                            <img src="<?= get_template_directory_uri() . '/assets/static/icon/documento.svg' ?>"
                                alt="Icono 3" height="100px">
                        </div>
                        <h3 class="text-center text-primary">Contratos</h3>
                        <p class="fs-5">Hacemos contratos empresariales personalizados para los trabajadores,
                            colaboradores externos, clientes, proveedores, y otros.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center pt-3">
        <a type="submit" class="btn btn-lg btn-warning btn-form text-white fw-bold pt-1" href="/servicios">SERVICIOS</a>
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
            <img src="<?= get_template_directory_uri() . '/assets/static/images/paradox.png' ?>" alt="Cliente 5"
                class="img-fluid">
        </div>
        <div class="col-md-3 col-sm-6 col-6">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/dryclean.png' ?>" alt="Cliente 6"
                class="img-fluid">
        </div>
        <div class="col-md-3 col-sm-6 col-6">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/boloncity.png' ?>" alt="Cliente 7"
                class="img-fluid">
        </div>
        <div class="col-md-3 col-sm-6 col-6">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/ainsa.png' ?>" alt="Cliente 8"
                class="img-fluid">
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <a class="btn btn-warning text-white text-center fw-bold mt-3" href="/clientes">
            NUESTROS CLIENTES
        </a>
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

<!-- Ebook -->
<div class="pb-5 mb-5 px-3">
    <div class="">
        <h3 class="display-3 text-primary text-center fw-bold pb-4">Solicita gratis nuestro ebook</h3>
    </div>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="text-center pb-5 col-md-4 col-lg-3">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/ebook.png' ?>" alt="Portada del Libro"
                height="300px">
        </div>
        <div class="fs-6 text-center col-md-4 col-lg-3 align-items-center justify-content-center">
            <p>Este libro te permitirá:</p>
            <div>
                <p><i class="far fa-check-circle text-success"></i> Impulsar tus ventas</p>
                <p><i class="far fa-check-circle text-success"></i> Dominar tus finanzas</p>
                <p><i class="far fa-check-circle text-success"></i> Legalizar tu empresa</p>
                <p><i class="far fa-check-circle text-success"></i> Crear un equipo sólido</p>
            </div>
            <p>¡No esperes más e impulsa el crecimiento de tu empresa!</p>
        </div>
    </div>

    <div class="d-flex align-items-center justify-content-center">
        <a class="btn btn-warning text-center text-white fw-bold"
            href="https://api.whatsapp.com/send/?phone=593962675062&text=Hola+me+interesa+el+ebook.&type=phone_number&app_absent=0"
            target="_blank">SOLICÍTALO</a>
    </div>
</div>


<?php
lexco_theme_render_footer();

// Footer
get_footer();