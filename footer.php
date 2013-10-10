<footer class="main-footer">
    <section class="main-footer-logo">
        <img src="<?php bloginfo( 'template_directory') ?>/img/IZQlogoFooter.png" alt="Izquierdazo" />
    </section>
    <section class="main-footer-texto">
        <p>
            &#169; 2013 Izquierdazo S.A. de C.V. Derechos reservados
        </p>
        <p>
            Comentarios: <a href="mailto:contacto@izquierdazo.com" title="Contactanos" target="_blank">contacto@izquierdazo.com</a> Publicidad: ¿Te interesa anunciarte en Izquierdazo?
        </p>
    </section>
</footer>
<!-- Se cargan los script de JS -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/single.js"></script>
<script type="text/javascript">
            var wp_url = "<?php bloginfo('wpurl'); ?>";
            var tp_url = "<?php bloginfo('template_directory'); ?>";
            var b = "<?php echo get_permalink(); ?>";
        </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-40131958-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- Funcion para carrusel | Se uso el complemento Orbit de Foundation -->
<?php wp_footer(); ?>
</body>
</html>