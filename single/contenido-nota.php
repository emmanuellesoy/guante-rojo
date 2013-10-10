<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
    /*
     *  Se una lectura.
     */ 
    $update_readed = $meta['readed'][0] + 1;
    
    add_post_meta(get_the_ID(), '_readed', 1, true) or update_post_meta(get_the_ID(), 'readed', $update_readed);
?>

<section class="single-post-img-box">
    <div class="single-post-img-box-img">
        <?php if (in_category('izqtv')) : ?>
        <?php $meta = get_post_custom(get_the_ID()); ?>
        <?php $video_link = $meta['Link'][0]; ?>
            <iframe width="652" height="370" src="<?php echo $video_link; ?>" frameborder="0" allowfullscreen></iframe>
        <?php else : ?>
        <a href="<?php echo get_permalink(); ?>" title="Leer más sobre <?php the_title(); ?>">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
        </a>
        <?php endif; ?>
    </div>
    <div class="single-post-img-box-texto" onmouseover="texto_img();">
        <div class="single-post-img-box-texto-category">
            <?php $post_id = get_the_ID(); ?>
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
        <header class="single-post-img-box-texto-titulo">
            <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_title(); ?>
            </a>
        </header>
    </div>
    <div class="single-post-img-box-texto-fondo"></div>
</section>
<section class="single-post-metadatos">
    <div class="single-post-metadatos-author">
        POR <?php the_author_posts_link(); ?>
    </div>
    <?php $autor_tn = get_the_author_meta( 'twitter' ); ?>
    <?php if(!empty($autor_tn)){ ?>
        <a href="https://twitter.com/<?php echo $autor_tn; ?>" class="twitter-follow-button" data-show-count="false" data-lang="es">Seguir a @<?php echo $autor_tn; ?></a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        <?php } ?>
    <div class="single-post-metadatos-fecha titulo-mayus">
        <?php the_date(); ?>. <?php the_time(); ?>
    </div>
</section>
<div class="single-post-metadatos-redes">
      <?php get_template_part('general/contenido', 'redespost'); ?>  
</div>
<section class="single-post-contenido">
    <?php the_content(); ?>
</section>
<section class="single-post-dalepunch">
    
</section>
<section class="single-post-ant-sig">
    <div class="single-post-ant-sig-anterior">
        <header class="single-post-ant-sig-anterior-titulo">
            
        </header>
        <div class="single-post-ant-sig-anterior-img">
            
        </div>
        <div class="single-post-ant-sig-anterior-titulo">
            
        </div>
        <div class="single-post-ant-sig-anterior-titulo-fondo">
            
        </div>
    </div>
    <div class="single-post-ant-sig-siguiente">
        
    </div>
</section>
<?php add_post_meta(get_the_ID(), 'prize', 0, true); ?>
<?php get_template_part('single/contenido', 'dalepunch'); ?>
<?php get_template_part('single/contenido', 'anterior_siguiente'); ?>
<?php endwhile; endif;?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_MX/all.js#xfbml=1&appId=366667626772412";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php $permalink = get_permalink(); ?>
<div class="fb-comments" data-href="<?php echo $permalink; ?>" data-width="625" data-num-posts="50"></div>