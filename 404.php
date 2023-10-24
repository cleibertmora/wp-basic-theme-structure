<?php

get_header();

// Navegacion
lexco_theme_render_nav();
?>

<!-- Pagina no encontrada -->
<div class="container py-5">
    <h1 class="text-center text-uppercase">Página no encontrada</h1>
    <p class="text-center">Parece que la página que estás buscando no existe en este sitio.</p>
    <p class="text-center mt-5">
        <a href="<?php echo get_home_url(); ?>" class="btn btn-b2w-danger">Volver al Inicio</a>
    </p>
</div>

<!-- Footer -->
<?php
get_footer();
?>