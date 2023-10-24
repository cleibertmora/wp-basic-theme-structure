<?php
/* Template Name: Servicios
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
        <div class="col-md-5 d-flex flex-column justify-content-center ps-3 pt-3">
            <div>
                <h1 class="display-2 mb-3 fw-bold text-primary ps-5">El mejor<br>servicio<br>para<br>empresas</h1>
            </div>
            <div>
                <a href="<?= esc_url(home_url('/contactanos')); ?>"
                    class="btn btn-warning btn-lg text-white ms-5">CONTÁCTANOS</a>
            </div>
        </div>
        <div class="col-md-7 d-none d-sm-none d-md-block d-lg-block">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/servicios.jpg' ?>"
                alt="Imagen de ejemplo" class="img-fluid">
        </div>
    </div>
</div>

<!-- Que hacemos -->
<div class="container mt-5 p-1 d-flex align-items-center">
    <div class="row">
        <div class="col-lg-6 p-4">
            <h2 class="fs-1 fw-bold text-primary">¿Qué hacemos?</h2>
            <p><strong class="fs-4 text-primary">Constitución de Compañías</strong></p>
            <p class="fs-6 text-justify">Nosotros constituimos compañías en el Ecuador, dando asesoramiento constante a
                nuestros clientes en todo el proceso.</p>
            <p class="fs-6">A lo largo de nuestra experiencia hemos ayudado a formar un sin número de compañías de
                diversas actividades, tales como: exportadoras, importadoras, comercio en general, centros de
                capacitación, actividad agrícola, agencias de turismo, constructoras, inmobiliarias, catering, limpieza,
                courier, seguridad privada, broker de seguros, transporte de carga pesada, servicios legales, de
                marketing, contables, y otras actividades.</p>
        </div>
        <div class="col-lg-6 p-1 d-flex justify-content-center">
            <img src="https://lexcojuridico.com/wp-content/uploads/2023/09/grupo3-min-scaled.jpg"
                alt="Imagen de Constitución de Compañías" class="img-fluid">
        </div>
    </div>
</div>

<!-- Constitucion de compañías -->
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <!-- Foto a la Izquierda -->
            <img src="https://lexcojuridico.com/wp-content/uploads/2023/09/manos-min-scaled.jpg" class="img-fluid"
                alt="Foto">
        </div>
        <div class="col-md-6 ps-5 pt-4">
            <!-- Texto a la Derecha -->
            <h2 class="fs-1 text-primary text-center">Constitución de Compañías</h2><br>
            <p class="fs-4 fw-bold text-warning">CREAMOS EMPRESAS Y CONSTITUIMOS COMPAÑÍAS</p>
            <p class="fs-6 fw-bold text-justify text-body-secondary"> En el menor tiempo posible, asesorando a nuestros
                clientes en todo el proceso.</p> <br>
            <p class="fs-4 fw-bold text-justify">Tener una compañía tiene muchos beneficios, tales como:</p>
            <ul>
                <li class="fs-6 text-start">Préstamos bancarios con tasas de interés menores.</li>
                <li class="fs-6 text-start">Generar confianza y seriedad ante los clientes y potenciales clientes.</li>
                <li class="fs-6 text-start">Tener mejores oportunidades para conseguir contratos con el Estado y otras
                    compañías.</li>
                <li class="fs-6 text-start">Tener las cuentas claras entre socios.</li>
                <li class="fs-6 text-start">Formalizar el negocio.</li>
                <li class="fs-6 text-start">Generar un patrimonio para la familia.</li>
                <li class="fs-6 text-start">Entre otros beneficios.</li>
            </ul>
            <div>
                <a class="btn btn-warning text-white" href="<?= esc_url(home_url('/preguntas-frecuentes')); ?>">
                    PREGUNTAS FRECUENTES
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Nuestros Servicios -->
<div class="container-fluid mb-4 mt-4 pt-4 pb-4 bg-white">
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
                        <h3 class="text-center text-primary pb-3">Servicios Empresariales</h3>
                        <p class="fs-5">Dirigido a compañías que deseen el servicio tributario y laboral externo para
                            cumplir las obligaciones empresariales con el SRI, Superintendencia de Compañías, Ministerio
                            del Trabajo, el IESS, y Municipio.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center mb-2">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="text-center text-warning pb-2">
                            <img src="<?= get_template_directory_uri() . '/assets/static/icon/corte.svg' ?>"
                                alt="Icono 2" height="100px">
                        </div>
                        <h3 class="text-center text-primary pb-3">Cambio de Representantes Legales y Accionistas</h3>
                        <p class="fs-5">Dirigido a compañías que deseen cambiar de gerente general y/o presidente. Así
                            mismo, cuando se requiere cambiar de socios en la compañía, o cambiar porcentaje de las
                            acciones de los mismos.</p>
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
                        <h3 class="text-center text-primary pb-3">Contratos</h3>
                        <p class="fs-5">Dirigido a compañías o personas naturales que deseen contratos para sus
                            trabajadores, colaboradores externos, proveedores, clientes, socios estrategicos,
                            inversionistas, y otros contratos para el buen manejo de su negocio.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-2">
            <div class="col-md-4 text-center mb-2">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="text-center text-warning pb-2">
                            <img src="<?= get_template_directory_uri() . '/assets/static/icon/hand.svg' ?>"
                                alt="Icono 4" height="100px">
                        </div>
                        <h3 class="text-center text-primary pb-3">Consulta jurídica</h3>
                        <p class="fs-5">Dirigido a compañías o personas naturales que requieran asesorías sobre los
                            ámbitos legales de una empresa o negocio. Muchos problemas se pueden resolver solamente con
                            un buen asesoramiento.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center mb-2">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="text-center text-warning pb-2">
                            <img src="<?= get_template_directory_uri() . '/assets/static/icon/task.svg' ?>"
                                alt="Icono 5" height="100px">
                        </div>
                        <h3 class="text-center text-primary pb-3">Reglamentos Internos</h3>
                        <p class="fs-5">Dirigido a empleadores (compañías o personas naturales) que tengan más de 1
                            trabajador en relación de dependencia y afiliados el seguro social; y deseen regular las
                            relaciones de trabajo dentro de su negocio.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center mb-2">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="text-center text-warning pb-2">
                            <img src="<?= get_template_directory_uri() . '/assets/static/icon/edificio1.svg' ?>"
                                alt="Icono 6" height="100px">
                        </div>
                        <h3 class="text-center text-primary pb-3">Negociaciones</h3>
                        <p class="fs-5">Dirigida a compañías y personas naturales que tengan problemas legales con algún
                            trabajador, socio, representante legal, proveedor o cliente, asociado, inversionista, y
                            deseen resolver el conflicto de manera rápida y directa.</p>
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