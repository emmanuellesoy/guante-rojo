<?php get_header(); ?>
<section class="single">
    <article class="single-post">
        <?php get_template_part('single/contenido', 'nota'); ?>
    </article>
    <aside class="single-sidebar">
        <?php get_template_part('anuncios/contenido', 'banner'); ?>
        <?php get_template_part('index/contenido', 'jabs'); ?>
        <?php get_template_part('anuncios/contenido', 'banner_1'); ?>
        <?php get_template_part('anuncios/contenido', 'banner_2'); ?>
        <?php get_template_part('general/contenido', 'docerounds'); ?>
    </aside>
</section>
<?php get_template_part('index/contenido', 'ponchador'); ?>
<?php get_footer(); ?>