<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <title><?php if(is_home()): bloginfo('name'); else : wp_title(); endif; ?></title>
        <link rel="shortcut icon" href="<?php bloginfo(    'template_directory'  ); ?>/img/IZQfavicon.ico">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/normalize.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
        <!--
        <link href="<?php echo bloginfo('template_url'); ?>/css/320.css" rel="stylesheet" type="text/css" media="only screen and (max-width: 480px)" >
        <link href="<?php echo bloginfo('template_url'); ?>/css/568.css" rel="stylesheet" type="text/css" media="only screen and (min-width : 481px) and (max-width: 568px)" >
        -->
        <script src="<?php bloginfo('template_directory'); ?>/js/prefixfree.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script>
        <?php wp_head(); ?>
        <!-- Begin comScore Tag -->
        <script>
          var _comscore = _comscore || [];
          _comscore.push({ c1: "2", c2: "16795636" });
          (function() {
            var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
            s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
            el.parentNode.insertBefore(s, el);
          })();
        </script>
        <noscript>
          <img src="http://b.scorecardresearch.com/p?c1=2&c2=16795636&cv=2.0&cj=1" />
        </noscript>
        <!-- End comScore Tag -->
    </head>
    <body>
        <header class="main-header">
            <section class="header-logo">    
                <section class="main-header-logo-icono">
                    <!--<img src="<?php bloginfo( 'template_directory') ?>/img/izqlogo.png" alt="Izquierdazo" />-->
                </section>
                <section class="main-header-logo-texto">
                    <a href="<?php bloginfo('wpurl'); ?>" alt="Izquierdazo" title="Izquierdazo">
                        <img src="<?php bloginfo( 'template_directory') ?>/img/izqlogo.png" alt="Izquierdazo" />
                    </a>
                </section>
            </section>
            <?php get_template_part('general/contenido', 'redes'); ?>
        </header>
        <!-- Termina header principal-->
        <section class="nav-bar">
            <?php $defaults = array('theme_location' => '', 'menu' => '', 'container' => 'nav', 'container_id' => '', 'container_class' => 'main-navegador', 'menu_id' => '', 'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s main-navegador-elemento">%3$s</ul>', 'depth' => 0, 'walker' => '' ); ?>
            <?php wp_nav_menu( $defaults ); ?>             
            <aside class="main-navegador-buscar">

            </aside>
        </section>
        <!-- Termina navegador principal y buscador-->