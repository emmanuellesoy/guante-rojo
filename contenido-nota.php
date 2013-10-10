<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="single-post-img-box">
    <div class="single-post-img-box-img">
        <?php if (in_category('izqtv')) : ?>
            <iframe width="652" height="370" src="<?php //echo $video_link; ?>" frameborder="0" allowfullscreen></iframe>
        <?php else : ?>
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single'    ); } ?>
        <?php endif; ?>
    </div>
    <div class="single-post-img-box-texto">
        <div class="single-post-img-box-texto-category">
            
        </div>
        <header class="single-post-img-box-texto-titulo">
            
        </header>
    </div>
</section>
<section class="single-post-metadatos">
    <div class="single-post-metadatos-author">
        
    </div>
    <div class="single-post-metadatos-fecha">
        
    </div>
    <div class="single-post-metadatos-redes">
        
    </div>
</section>
<section class="single-post-contenido">
    
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
<?php endwhile; endif;?>