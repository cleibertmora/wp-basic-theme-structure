<!-- Plantilla de un posts individual -->
<div class="container blog_template mt-5">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="card border-0 ">
            <?php if (get_the_post_thumbnail_url()): ?>
                <img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img-top" alt="...">
            <?php endif; ?>
            <div class="card-body p-0">
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        <!-- Titulo -->
                        <h1 class="display-4">
                            <?php the_title(); ?>
                        </h1>

                        <!-- Contenido -->
                        <div class="entry-meta"></div>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>

                        <!-- Texto de publicado -->
                        <p>
                            Publicado en:
                            <?php the_time(get_option('date_format')); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>