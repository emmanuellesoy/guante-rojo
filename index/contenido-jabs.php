<aside class="jabs">
    <div class="jabs-encabezado titulo-seccion">
        <div class="encabezado-box encabezado-box-jabs">
            <div class="encabezado-estrella"><img src="<?php bloginfo( 'template_directory') ?>/img/estrella_grande.png" alt="*" /></div>
            <div class="encabezado-texto"><h3>JABS</h3></div>
            <div class="encabezado-estrella"><img src="<?php bloginfo( 'template_directory') ?>/img/estrella_grande.png" alt="*" /></div>
        </div>
    </div>
    <div class="jabs-listado">
        <ol>
            <?php query_posts('category_name=los-jabs&posts_per_page=6'); ?>
            <?php while (have_posts()) : the_post(); ?>
            <li>
                <a href="<?php echo get_permalink(); ?>" title="Leer más sobre <?php the_title(); ?>">
                    <?php the_title(); ?>
                </a>
            </li>
            <?php endwhile; ?>
        </ol>
    </div>
</aside>
<!-- Terminan los jabs-->