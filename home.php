<?php
/* Template Name: Blogs
    Template Post Type: page
*	@package Lexco Theme
*   @since Lexco Theme 1.0
*/

// Header
get_header();

// Navegacion
lexco_theme_render_nav();

// Pagina actual
$page = array_key_exists('page_data', $_GET) ? $_GET['page_data'] : 1;

// Configura los argumentos para la consulta
$args = array(
    'post_type' => 'post',
    'paged' => $page,
);

// Realiza la consulta
$query = new WP_Query($args);

// Posts
$posts = $query->posts;

// Paginacion
$paginationLinks = paginate_links(
    array(
        'total' => $query->max_num_pages,
        'current' => $page,
        'format' => '?page_data=%#%',
        'prev_text' => 'Previo',
        'next_text' => 'Siguiente',
    )
);



// Restaura las consultas originales de WordPress
wp_reset_postdata();

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-5 d-flex flex-column justify-content-center ps-4 pt-3">
            <div>
                <h1 class="display-2 mb-3 fw-bold text-primary ps-5">Blog<br>para<br>empresas</h1>
            </div>
            <div>
            </div>
        </div>
        <div class="col-md-7 d-none d-sm-none d-md-block d-lg-block">
            <img src="<?= get_template_directory_uri() . '/assets/static/images/blog.jpg' ?>" alt="Imagen de ejemplo"
                class="img-fluid">
        </div>
    </div>
</div>

<div class="container mb-5 pb-5 mt-5 pt-5">
    <div class="row justify-content-center mb-4 g-5">
        <?php if ($posts && !empty($posts)): ?>
            <?php foreach ($posts as $post): ?>
                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">
                                <?= get_the_title(); ?>
                            </h2>
                            <a href="<?= the_permalink(); ?>" class="text-secondary-subtle fs-6">LEER MÁS</a>
                        </div>
                        <div class="card-footer fs-5 text-secondary">
                            <small>Publicado:
                                <?php the_time(get_option('date_format')); ?>
                            </small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

        <!-- Paginacion -->
        <div class="pagination">
            <?= $paginationLinks ?>
        </div>

    </div>
</div>

<?php
lexco_theme_render_footer();

// Footer
get_footer();