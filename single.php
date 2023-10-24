<?php
// Header
get_header();

// Navegacion
lexco_theme_render_nav();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        // Comienza el loop de WordPress.
        while (have_posts()):
            the_post();

            // Obtén el contenido de la publicación.
            get_template_part('page-templates/content', get_post_type());
        endwhile;
        ?>

    </main>
</div>

<?php
lexco_theme_render_footer();

// Footer
get_footer();