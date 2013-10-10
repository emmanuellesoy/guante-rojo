<aside class="docerounds">
    <div class="docerounds-encabezado titulo-seccion">
        <div class="encabezado-box encabezado-box-docerounds">
            <div class="encabezado-estrella"><img src="<?php bloginfo( 'template_directory') ?>/img/estrella_grande.png" alt="*" /></div>
            <div class="encabezado-texto"><h3>DOCE ROUNDS</h3></div>
            <div class="encabezado-estrella"><img src="<?php bloginfo( 'template_directory') ?>/img/estrella_grande.png" alt="*" /></div>
        </div>
    </div>
    <div class="docerounds-subtitulo">
        <p>NOTAS CON MÁS</p>
        <p>PUNCH</p>
    </div>
    <div class="docerounds-listado">
        <ol>
            <?php

            function filter_where( $where = '' ) {

            $where .= " AND post_date > '" . date('Y-m-d', strtotime('-3 days')) . "'";

            return $where;

        }

        add_filter( 'posts_where', 'filter_where' );

        $args = array(

            'meta_key' => 'prize',

            'orderby' => 'meta_value_num',

            'order' => 'DESC',
            
            'posts_per_page' => 12

                );

        $result = new WP_Query($args);

        remove_filter( 'posts_where', 'filter_where' );

        $counter = 1;

        ?>

        <?php while ($result->have_posts()) : $result->the_post(); ?>
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