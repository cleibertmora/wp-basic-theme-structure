<?php
function lexco_theme_render_nav()
{
    // Global de wordpress
    global $wp;

    // Obtener los items del menu
    $menuItems = wp_get_nav_menu_items('Menu principal');

    // Asignar vacio en caso de que no exista
    if (!$menuItems) {
        $menuItems = [];
    }

    ?>
    <!-- Menu de navegación -->
    <nav class="navbar navbar-expand-lg border-bottom bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="<?= get_template_directory_uri() . '/assets/static/images/logo-lexco.png' ?>" alt="Logo"
                    class="img-fluid ps-3" style="height: 110px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end pe-6" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <?php foreach ($menuItems as $item):
                        $className = '';

                        $currentUrl = rtrim(home_url(add_query_arg(array(), $wp->request)), '/');
                        $url = rtrim($item->url, '/');
                        if ($currentUrl === $url) {
                            $className = 'text-warning';
                        } else {
                            $className = 'text-primary';
                        }

                        ?>

                        <!-- Render de cada item -->
                        <a class="icon-link custom-nav-hover fs-5 pe-5 pb-2 <?= $className; ?>" aria-current="page"
                            href="<?= $item->url; ?>">
                            <?= $item->title ?>
                        </a>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </nav>
<?php }