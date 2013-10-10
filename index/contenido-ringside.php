<section class="segunda-seccion">
    <section class="ring-side">
        <header class="ring-side-encabezado titulo-seccion">
            <div class="encabezado-box">
                <div class="encabezado-estrella"><img src="<?php bloginfo( 'template_directory') ?>/img/estrella_grande.png" alt="*" /></div>
                <div class="encabezado-texto"><h3>RINGSIDE</h3></div>
                <div class="encabezado-estrella"><img src="<?php bloginfo( 'template_directory') ?>/img/estrella_grande.png" alt="*" /></div>
            </div>
        </header>
        <?php query_posts('category_name=ring-side&posts_per_page=3'); ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php $post_id = get_the_ID(); ?>
            <article class="ring-side-post">
                <section class="ring-side-post-img">
                    <div class="ring-side-post-img-img">
                        <a href="<?php echo get_permalink(); ?>" title="Leer más sobre <?php the_title(); ?>">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                        </a>
                    </div>
                    <div class="ring-side-post-img-categoria titulo-mayus">
                        <?php 
                            $post_categories = wp_get_post_categories( $post_id );
                            $cats = array();

                            foreach($post_categories as $c){
                                    $cat = get_category( $c );
                                    $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
                            }
                            echo $cats[0]['name'];
                        ?>
                    </div>
                    <div class="ring-side-post-img-categoria-fondo"></div>
                </section>
                <section class="ring-side-post-texto">
                    <div class="ring-side-post-texto-titulo titulo-mayus">
                        <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </div>
                    <div class="ring-side-post-texto-resumen">
                        <?php $meta = get_post_custom(get_the_ID()); ?>
                        <?php $entrada = $meta['Entrada'][0]; ?>
                        <?php echo (!empty($entrada)) ? $entrada : entradas(the_excerpt(), 1); ?>
                    </div>
                    <div class="ring-side-post-texto-verm">
                        <a href="<?php echo get_permalink(); ?>" title="Leer más sobre: <?php the_title(); ?>.">
                            +VER MÁS
                        </a>
                    </div>
                </section>
            </article>
        <?php endwhile; ?>
    </section>
    <!-- Termina ringside-->
    <?php get_template_part('anuncios/contenido', 'banner'); ?>
    <?php get_template_part('index/contenido', 'jabs'); ?>
</section>
<!-- Termina segunda sección-->