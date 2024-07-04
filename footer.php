<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package aveiromais
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('aveiromais_container_type');
?>


<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>



<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="footer-bar" style="border:unset;">

          <!-- end logo -->
          <div class="phone-box"> </div>
          <!-- end phone-box -->
        </div>
        <!-- end footer-bar -->
      </div>
      <!-- end col-12 -->
      <div class="col-12 d-flex align-items-center">
        <div class="newsletter-box">

        </div>
        <!-- end newsletter-box -->
        <ul class="social-media">
          <li><a href="https://facebook.com/aveiromais"><i class="fab fa-facebook-f"></i> <span>Facebook</span></a></li>
          <li><a href="https://instagram.com/aveiromais"><i class="fab fa-instagram"></i> <span>Instagram</span></a></li>
        </ul>
      </div>
      <!-- end col-12 -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-widget">
          <h6 class="widget-title">Evento</h6>
          <p>Centro de Congressos de Aveiro<br />
            Cais da Fonte Nova<br />3810-164 Aveiro</p>
        </div>
        <!-- end footer-widget -->
      </div>
      <!-- end col-4 -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-widget">
          <h6 class="widget-title">Info</h6>
          <p>E-mail: <a href="mailto:info@aveiromais.pt">info@aveiromais.pt</a></p>
          <p><a href="<?php echo home_url(); ?>/politicas-de-privacidade/">Politicas de Privacidade</a></p>


        </div>
        <!-- end footer-widget -->
      </div>
      <!-- end col-4 -->
      <div class="col-lg-4">
        <div class="footer-widget">
          <h6 class="widget-title">Liga-nos</h6>
          <p>Telefone: <a href="callto:+351 965 731 511">+351 965 731 511</a></p>
        </div>
        <!-- end footer-widget -->
      </div>
      <!-- end col-4 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
  <div class="bottom-bar">
    <div class="container">

      <?php aveiromais_site_info(); ?>

    </div>
    <!-- end container -->
  </div>
  <!-- end bottom-bar -->
</footer>
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>