<section class="main-header-redes-post">
    <div class="redes-elemento-post">
        <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink()); ?>&amp;send=false&amp;layout=box_count&amp;width=70&amp;show_faces=false&amp;font=arial&amp;colorscheme=light&amp;action=like&amp;height=90&amp;appId=279290438845254" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:90px;" allowTransparency="true"></iframe>
    </div>
    <div class="redes-elemento-post">
        <a href="https://twitter.com/share" class="twitter-share-button" data-via="IzquierdazoBox" data-lang="es" data-count='vertical'>Twittear</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>
    <div class="redes-elemento-post redes-elemento-post-gplus">
        
        <div class="g-plusone" data-size="tall"></div>
    
    <script type="text/javascript">
      window.___gcfg = {lang: 'es'};

      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>
    </div>
    <div class="redes-elemento-post redes-elemento-post-punch">
        <div class="redes-elemento-post-punch-img">
            <img class="redes-elemento-post-punch-img-objeto" src="<?php bloginfo(    'template_directory'  ); ?>/img/BTNConteoPunch.png" onclick="premialo('<?php echo get_the_ID(); ?>')" />
        </div>
        <div class="redes-elemento-post-punch-contador">
            <?php
            
            /*
             * Se obtiene el número de punchs
             */
            
            ?>
            <?php $meta = get_post_custom(get_the_ID()); ?>
            <p><?php echo $meta['prize'][0]; ?></p>
        </div>
    </div>
</section>