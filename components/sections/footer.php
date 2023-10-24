<?php
function lexco_theme_render_footer()
{
    // Validar si es la pagina landing
    $pageLanding = is_page('constitucion-de-companias');
    $hiddenWs = '';

    // Ocultar el boton de whatsapp en esta pagina
    if ($pageLanding) {
        $hiddenWs = 'd-none';
    }

    ?>

    <!-- Footer -->
    <footer class="container-fluid bg-secondary-subtle">
        <div class="row py-4 px-5">
            <div class="col-md-4">
                <h4 class="text-warning fs-4 pb-2">Información de Contacto</h4>
                <p><i class="bi bi-whatsapp text-warning "></i> 0962675062 - 0995065034</p>
                <p><i class="bi bi-geo-alt text-warning "></i> Puerto Santa Ana, Edificio The Point, Piso 12, Oficina 1204.
                </p>
                <p><i class="bi bi-envelope text-warning "></i> info@lexcojuridico.com</p>
            </div>

            <div class="col-md-4">
            </div>

            <div class="col-md-4">
                <h4 class="text-warning fs-4">Horario</h4>
                <p>De lunes a viernes</p>
                <p>De 08H00 - 17h00</p>

                <h4 class="fs-4 pb-2 text-warning">Redes Sociales</h4>
                <div class="social-icons">
                    <a href="https://www.facebook.com/lexcoec/"><i class="bi bi-facebook fs-2 pe-3"></i></a>
                    <a href="https://www.instagram.com/lexco_cj/?hl=es"><i class="bi bi-instagram fs-2 pe-3"></i></a>
                    <a href="https://www.linkedin.com/company/lexco-cj/"><i class="bi bi-linkedin fs-2 pe-3"></i><a>
                            <a href="https://www.tiktok.com/@lexco_cj"><i class="bi bi-tiktok fs-2 pe-3"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center p-3 mb-2 bg-white fw-bold text-secondary fs-5">
                <p>Copyright © 2023 Lexco. Reservados todos los derechos.</p>
            </div>
        </div>
    </footer>

    <!-- Boton de WS -->
    <div class="position-fixed bottom-0 end-0 m-4 z-1 <?= $hiddenWs; ?>">
        <a class="btn btn-success rounded-circle rebote" type="button"
            href="https://wa.me/593962675062?text=Hola%20me%20interesan%20los%20servicios%20de%20Lexco.%20Quiero%20más%20información."
            target="_blank" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left"
            data-bs-trigger="hover focus" data-bs-content="¿Cómo te podemos ayudar?">
            <i class="bi bi-whatsapp fs-2"></i>
        </a>
    </div>
<?php }