<?php
/* Template Name: Clientes
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
<div class="container-fluid pb-5 d-none d-sm-none d-md-block d-lg-block">
    <div class="row">
        <div class="col-md-5 d-flex flex-column justify-content-center ps-4 pt-3">
            <div>
                <h1 class="display-3 mb-3 fw-bold text-primary ps-5">Nuestros<br>clientes</h1>
            </div>
        </div>
        <div class="col-md-7 d-none d-sm-none d-md-block d-lg-block">
            <img src="https://lexcojuridico.com/wp-content/uploads/2023/09/faq-min.jpg" alt="Imagen de ejemplo"
                class="img-fluid">
        </div>
    </div>
</div>

<!-- Testimonios -->
<div class="container pt-4 pb-4 mb-4 bg-white">
    <div class="pb-3">
        <h2 class="text-center display-4 text-warning">Lo que dicen</h2>
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
                        <h3 class="text-center text-primary pt-3">Byron Pérez</h3>
                        <p class="text-warning">Gerente de Smart Medic</p>
                        <p class="fs-5">"Crearon mi compañía ágilmente y me entregaron todo listo para operar. Excelente
                            servicio de Lexco. Sin pensarlo los recomendaría para la creación de cualquier compañía".
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center mb-2">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="text-center text-warning">
                            <img src="<?= get_template_directory_uri() . '/assets/static/images/enrique.JPG' ?>"
                                alt="Testimonio 2" class="img-fluid rounded-circle border border-5 border-warning w-50">
                        </div>
                        <h3 class="text-center text-primary pt-3">Enrique Marmol</h3>
                        <p class="text-warning">Gerente de NBU Capital</p>
                        <p class="fs-5">"Podemos decir que Lexco es un equipo muy profesional, que brinda un excelente
                            asesoramiento. Seguro volveremos a contratar sus servicios".</p>
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
                        <h3 class="text-center text-primary pt-3">Robin Zambrano</h3>
                        <p class="text-warning">Gerente de Robinza Fumiobras</p>
                        <p class="fs-5">"Gracias a Lexco pude cumplir con mi sueño de crear mi empresa fumigación
                            integral y ahora es una realidad. Tiene un cliente y un amigo".</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-2">
            <div class="col-md-4 text-center mb-2">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="text-center text-warning">
                            <img src="<?= get_template_directory_uri() . '/assets/static/images/genesis.jpg' ?>"
                                alt="Testimonio 4" class="img-fluid rounded-circle border border-5 border-warning w-50">
                        </div>
                        <h3 class="text-center text-primary pt-3">Genesis Pizarro</h3>
                        <p class="text-warning">Gerente de Zonemedic Ecuador</p>
                        <p class="fs-5">"Siempre acudo a Lexco por compañías, contratos, y demás temas empresariales".
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center mb-2">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="text-center text-warning">
                            <img src="<?= get_template_directory_uri() . '/assets/static/images/kevin.jpg' ?>"
                                alt="Testimonio 5" class="img-fluid rounded-circle border border-5 border-warning w-50">
                        </div>
                        <h3 class="text-center text-primary pt-3">Kevin Gavilánez</h3>
                        <p class="text-warning">Gerente de Comega</p>
                        <p class="fs-5">"Me ayudaron a crear mi centro médico, con farmacia, laboratorio, y todo. Una
                            asesoría de primera".</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center mb-2">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="text-center text-warning pt-2">
                            <img src="<?= get_template_directory_uri() . '/assets/static/images/zanabria.jpg' ?>"
                                alt="Testimonio 6" class="img-fluid rounded-circle border border-5 border-warning w-50">
                        </div>
                        <h3 class="text-center text-primary pt-3">Jorge Zanabría</h3>
                        <p class="text-warning">Gerente de Dr. Pet</p>
                        <p class="fs-5">"Siempre buenos resultados. Lexco nos ha ayudado en muchos aspectos legales de
                            nuestra empresa".</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-2">
            <div class="col-md-4 text-center mb-2">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="text-center text-warning pt-2">
                            <img src="<?= get_template_directory_uri() . '/assets/static/images/tatiana.jpg' ?>"
                                alt="Testimonio 7" class="img-fluid rounded-circle border border-5 border-warning w-50">
                        </div>
                        <h3 class="text-center text-primary pt-3">Tatiana Araujo</h3>
                        <p class="text-warning">Gerente de Bad Rabbit Ecuador</p>
                        <p class="fs-5">"Gracias por establecer nuestra compañía de Colombia en el Ecuador. Estamos muy
                            contentos con su servicio y resultados".</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center mb-2">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="text-center text-warning">
                            <img src="<?= get_template_directory_uri() . '/assets/static/images/samia.jpg' ?>"
                                alt="Testimonio 8" class="img-fluid rounded-circle border border-5 border-warning w-50">
                        </div>
                        <h3 class="text-center text-primary pt-3">Samia Handal</h3>
                        <p class="text-warning">Gerente de Capelli</p>
                        <p class="fs-5">"Estoy contenta con mi compañía. Nos dieron un charla, y con eso pudimos tener
                            todo para comenzar de la mejor manera".</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center mb-2">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="text-center text-warning">
                            <img src="<?= get_template_directory_uri() . '/assets/static/images/wla.jpg' ?>"
                                alt="Testimonio 9" class="img-fluid rounded-circle border border-5 border-warning w-50">
                        </div>
                        <h3 class="text-center text-primary pt-3">Wla Uska</h3>
                        <p class="text-warning">Gerente de Shop Tuti</p>
                        <p class="fs-5">"Excelentes profesionales, me entregaron mi compañía de manera ágil y eficaz,
                            son plenamente confiables.".</p>
                    </div>
                </div>
            </div>
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

<!-- Galeria de fotos -->
<div class="container align-items-center justify-content-center py-5 ">
    <div class="text-center">
        <h3 class="text-primary display-3 fw-bold pb-5">Galeria de fotos</h3>
    </div>
    <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner text-center">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="<?= get_template_directory_uri() . '/assets/static/images/clientes/cliente1.jpg' ?>" class=""
                    alt="..." height="500px">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="<?= get_template_directory_uri() . '/assets/static/images/clientes/cliente2.jpg' ?>" class=""
                    alt="..." height="500px">
            </div>
            <div class="carousel-item " data-bs-interval="2000">
                <img src="<?= get_template_directory_uri() . '/assets/static/images/clientes/cliente3.jpg' ?>" class=""
                    alt="..." height="500px">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="<?= get_template_directory_uri() . '/assets/static/images/clientes/cliente4.jpg' ?>" class=""
                    alt="..." height="500px">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="<?= get_template_directory_uri() . '/assets/static/images/clientes/cliente5.JPG' ?>" class=""
                    alt="..." height="500px">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="<?= get_template_directory_uri() . '/assets/static/images/clientes/cliente6.jpg' ?>" class=""
                    alt="..." height="500px">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="<?= get_template_directory_uri() . '/assets/static/images/clientes/cliente7.jpg' ?>" class=""
                    alt="..." height="500px">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="<?= get_template_directory_uri() . '/assets/static/images/clientes/cliente8.jpg' ?>" class=""
                    alt="..." height="500px">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="<?= get_template_directory_uri() . '/assets/static/images/clientes/cliente9.jpg' ?>" class=""
                    alt="..." height="500px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<?php
lexco_theme_render_footer();

// Footer
get_footer();