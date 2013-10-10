<?php $meta = get_post_custom(get_the_ID()); ?>
<?php $entrada = $meta['Entrada'][0]; ?>
<?php 
$imagen = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');
$ruta_imagen = $imagen[0];
?>
<section class="dale-punch">
    <div class="dale-punch-caja" data-premio="false">
        <div class="dale-punch-caja-facebook">
            <a href="http://www.facebook.com/sharer.php?s=100&p[url]=<?php echo get_permalink( get_the_ID() ); ?>&p[title]=<?php echo get_the_title(get_the_ID()); ?>&p[summary]=<?php echo (!empty($entrada)) ? $entrada : entradas(the_excerpt(), 1); ?>&p[images][0]=<?php echo $ruta_imagen; ?>" target="_blank" title="Compartelo en Facebook">
                <img alt="Comprtir en Facebook" src="<?php bloginfo('template_directory'); ?>/img/BTNCompartirFB.png" title="Compartelo en Facebook" />
            </a>
        </div>
        <div class="dale-punch-img-caja">
                <img class="dale-punch-img" alt="Dale Punch" title="Dale Punch" src="<?php bloginfo('template_directory'); ?>/img/IZQpunch.png" />
        </div>
        <div class="dale-punch-img-texto" onmouseover="imagen_over()" onmouseout="imagen_out()" onclick="premialo('<?php echo get_the_ID(); ?>')">
            <?php echo ($_COOKIE['punch'] != '') ? $meta['prize'][0] : ''; ?>
        </div>
        <div class="dale-punch-caja-twitter">
            <?php $title = cuenta_recorta(get_the_title(get_the_ID())); ?>
            <?php $twitter_url = $title.'+'.urlencode(get_permalink(get_the_ID()).' via @izquierdazobox'); ?>
            <a class="left-sidebar-share-floating-icon twitter" target="_blank" href="http://twitter.com/home?status=<?php echo $twitter_url ?>" title="Compartelo en Twitter">
                <img class="" alt="Comprtir en Twitter" src="<?php bloginfo('template_directory'); ?>/img/BTNCompartirTW.png" title="Comprtir en Twitter" />
            </a>
        </div>
    </div>
</section>