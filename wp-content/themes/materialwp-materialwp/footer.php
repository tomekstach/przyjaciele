<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package materialwp
 */
?>

</div>
<!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

  <div class="container">
    <div id="bip-cloud">
      <p><a href="www.fundacjaprzyjaciol.org">www.fundacjaprzyjaciol.org</a> is also a site of Biuletyn Informacji Publicznej (Bulletin of Public Information), according to the obligation requested by Article 6, point 6 of the Polish Law on Access to Public Information from September 6, 2001. Information included in the financial reports and reports on our activities (folder: Who we are / Documents) meet the requirements of the Regulation of the Minister of Internal Affairs and Administration regarding the Public Information Bulletin BIP from January 18, 2007.</p>
    </div>

    <!-- 				<div class="col-lg-12 under-footer"></div> -->
    <div class="first row clearfix">

      <div class="col-xs-12 col-sm-6 col-md-3 footer-number information-text">
        <p class="contact-list"><img src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/12/phone-1.svg"> +48 22 324 52 22</p>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 footer-mail information-text">
        <p class="contact-list"><img src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/12/msg.svg"> kontakt@fundacjaprzyjaciol.org</p>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 footer-krs information-text">
        <p class="contact-list"><a id="krs_foot_link" href="http://www.fundacjaprzyjaciol.org/pl/zostan-przyjacielem/#tax_one_percent"><img src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/12/1proc-1.svg"></a> KRS: 0000093204</p>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-2 img-footer-icon">
        <div class="img-wrapper-footer">
          <a href="https://www.facebook.com/fundacjaprzyjaciolwwarszawie/" target="_blank" class="foot-face"><img src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/12/fb.svg"></a>
          <a href="https://www.linkedin.com/company/27126747/" class="foot-linked" target="_blank"><img src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/12/linkedin.svg"></a>
          <a href="#" class="foot-bip"><img id="footerBipIcon" src="<?php echo esc_url(site_url('/')); ?>wp-content/uploads/2017/12/bip_white.svg"></a>
        </div>
      </div>

    </div>
    <hr />

    <div class="row">
      <div class="second">
        <!--<div class="footer-menu">-->
        <?php wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'menu_class' => 'footer-menu'
        ));
        ?>
        <!--<a href="<?php echo esc_url(site_url('/')); ?>en/who-we-are/">Who we are</a>-->
        <!--<a href="<?php echo esc_url(site_url('/')); ?>en/how-we-help/">How we help</a>-->
        <!--<a href="<?php echo esc_url(site_url('/')); ?>en/become-a-friend/">Become a Friend</a>-->
        <!--<a href="<?php echo esc_url(site_url('/')); ?>en/our-friends/">Our Friends</a>-->
        <!--<a href="<?php echo esc_url(site_url('/')); ?>en/contact-us/">Contact us</a>-->
        <!--<a href="<?php echo esc_url(site_url('/')); ?>en/privacy-cookies-policy/">Privacy Policy</a>-->
        <!--</div>-->
      </div>
      <div class="site-info pull-right">
        <?php //printf( __( '%1$s by %2$s.', 'materialwp' ), 'MaterialWP', '<a href="https://braginteractive.com" target="_blank" rel="designer">Brad Williams</a>' ); 
        ?>
      </div>
      <!-- .site-info -->

    </div>
    <!-- .row -->
  </div>
  <!-- .containr -->
  <div class="container-fluid text-center">
    <p class="copyright-by">designed at <a href="https://13f.pl/">13th Floor</a></p>
  </div>
</footer>
<!-- #colophon -->
</div>
<!-- #page -->

<?php wp_footer(); ?>

</body>

</html>