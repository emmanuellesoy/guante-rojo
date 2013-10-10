<?php query_posts('category_name=el-ring&posts_per_page=1'); ?>
<?php while (have_posts()) : the_post(); ?>
<section class="ring">
    <section class="ring-imagen">
        <a href="<?php echo get_permalink(); ?>" title="Leer más sobre <?php the_title(); ?>">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
        </a>
    </section>
    <section class="ring-caja-texto">
        <section class="ring-caja-texto-titulo titulo-mayus">
            <h2>
                <a href="<?php echo get_permalink(); ?>" title="Leer más sobre <?php the_title(); ?>">
                    - <?php the_title(); ?> -
                </a>
            </h2>
        </section>
        <section class="ring-caja-texto-resumen">
            <?php $meta = get_post_custom(get_the_ID()); ?>
            <?php $entrada = $meta['Entrada'][0]; ?>
            <?php echo (!empty($entrada)) ? $entrada : entradas(the_excerpt(), 1); ?>
        </section>
    </section>
    <div class="ring-caja-texto-fondo"></div>
</section>
<?php endwhile; ?>
<!-- Termina ring -->