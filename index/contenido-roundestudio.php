<section class="tercera-seccion">
    <section class="round-de-estudio">
        <header class="round-de-estudio-encabezado titulo-seccion">
            <div class="encabezado-box encabezado-box-rde">
                <div class="encabezado-estrella"><img src="<?php bloginfo( 'template_directory') ?>/img/estrella_grande.png" alt="*" /></div>
                <div class="encabezado-texto"><h3>ROUND DE ESTUDIO</h3></div>
                <div class="encabezado-estrella"><img src="<?php bloginfo( 'template_directory') ?>/img/estrella_grande.png" alt="*" /></div>
            </div>
        </header>
        <?php query_posts('category_name=round-de-estudio&posts_per_page=3'); ?>
        <?php while (have_posts()) : the_post(); ?>
        <article class="round-de-estudio-post">
            <div class="round-de-estudio-post-img">
                <?php $meta = get_post_custom(get_the_ID()); ?>
                <?php $video_link = $meta['Portada'][0]; ?>
                <a href="<?php echo get_permalink(); ?>" title="Leer más sobre <?php the_title(); ?>">
                    <img src="<?php echo $video_link; ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <a href="<?php echo get_permalink(); ?>" title="Leer más sobre <?php the_title(); ?>">
            </div>
            <div class="round-de-estudio-post-texto">
                <div class="round-de-estudio-post-texto-titulo titulo-mayus">
                    <a class="titulo-mayus" href="<?php echo get_permalink(); ?>" title="Leer más sobre <?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </div>
                <div class="round-de-estudio-post-texto-autor">
                    <?php the_author_posts_link(); ?>
                </div>
            </div>
            <div class="round-de-estudio-post-texto-fondo"></div>
        </article>
        <?php endwhile; ?>
    </section>
    <!-- Termina Round de Estudio -->
</section>
<!-- Termina tercera sección -->