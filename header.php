<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="UTF-8">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/835eaa4395.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Lexco</title>

    <?php wp_head(); ?>

    <!-- Estilos -->
    <style></style>

    <script>
        const GLOBAL_SITE_URL = '<?php echo site_url() ?>' 
    </script>

    <script src="//www.googletagmanager.com/gtag/js?id=G-038MN85CVE" data-cfasync="false" data-wpfc-render="false"
        async></script>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
                w[l] = w[l] || []; w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                }); var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-5CNCJSH');</script>
    <!-- End Google Tag Manager -->

</head>

<body <?php body_class("wp_lexco_theme webfont fs-4"); ?> x-data="{ enviado: false }">