<section class="sexta-seccion">
    <?php query_posts('category_name=izqtv&posts_per_page=1'); ?>
    <?php while (have_posts()) : the_post(); ?>
    <section class="izq-tv">
        <div class="izq-tv-texto">
            <header class="izq-tv-texto-encabezado titulo-seccion">
                <div class="encabezado-box encabezado-box-izq">
                <div class="encabezado-estrella"><img src="<?php bloginfo( 'template_directory') ?>/img/estrella_grande.png" alt="*" /></div>
                <div class="encabezado-texto"><h3>IZQ-TV</h3></div>
                <div class="encabezado-estrella"><img src="<?php bloginfo( 'template_directory') ?>/img/estrella_grande.png" alt="*" /></div>
            </div>
            </header>
            <div class="izq-tv-texto-datos">
                <div class="izq-tv-texto-titulo titulo-mayus">
                    <a class="titulo-mayus" href="<?php echo get_permalink(); ?>" title="Leer más sobre<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </div>
                <div class="izq-tv-texto-descripcion">
                    <?php echo entradas(get_the_excerpt(), 2); ?>
                </div>
            </div>
        </div>
        <div class="izq-tv-video">
            <?php $meta = get_post_custom(get_the_ID()); ?>
            <?php $video_link = $meta['Link'][0]; ?>
            <div class="butaca-video">
                <iframe width="625" height="380" src="<?php echo $video_link; ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <!-- Termina IZQ-TV -->
    <?php endwhile; ?>
</section>
<!-- Termina sexta sección -->