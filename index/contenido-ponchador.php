<section class="quinta-seccion">
    <section class="ponchador">
        <?php query_posts('category_name=el-ponchador&posts_per_page=3'); ?>
        <?php $count = 1; ?>
        <?php while (have_posts()) : the_post(); ?>
        <article class="ponchador-post <?php echo($count > 1) ? 'ponchador-post-right' : ''; ?>">
            <div class="ponchador-post-texto <?php echo($count > 1) ? 'ponchador-post-texto-right' : ''; ?>">
                <div class="ponchador-post-texto-categoria titulo-mayus">
                    <h6>
                        <?php 
                            $post_categories = wp_get_post_categories( get_the_ID() );
                            $cats = array();

                            foreach($post_categories as $c){
                                    $cat = get_category( $c );
                                    $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
                            }
                            echo $cats[0]['name'];
                        ?>
                    </h6>
                </div>
                <div class="ponchador-post-texto-titulo">
                    <a href="<?php echo get_permalink(); ?>" title="Leer más sobre <?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </div>
            </div>
            <div class="ponchador-postimg <?php echo($count > 1) ? 'ponchador-postimg-right' : ''; ?>">
                <a href="<?php echo get_permalink(); ?>" title="Leer más sobre <?php the_title(); ?>">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                </a>
            </div>
        </article>
        <?php $count++; ?>
        <?php endwhile; ?>
    </section>
    <!-- Termina el ponchador -->
</section>
<!--Termina quinta sección -->