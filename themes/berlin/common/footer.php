</div><!-- end content -->

<footer>

    <div id="footer-content" class="center-div">
<!--         <?php if($footerText = get_theme_option('Footer Text')): ?> -->
<!--         <div id="custom-footer-text"> -->

<!--             <p><?php echo get_theme_option('Footer Text'); ?></p> -->
<!--         </div> -->
<!--
        <?php endif; ?>
        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
        <p><?php echo $copyright; ?></p>
        <?php endif; ?>
        <nav><?php echo public_nav_main()->setMaxDepth(0); ?></nav>
 -->
       <a href="http://library.columbia.edu/locations/dhc.html"><img style="float:left" src="/images/dhc-logo.png"/></a>
       <div id="boilerplate">
       <p style="margin-bottom:2px"><a href="/copyright">Terms and Conditions</a></p>
          </div>

    </div><!-- end footer-content -->

     <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>

</footer>

<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.showAdvancedForm();
               Omeka.dropDown();
    });
</script>
<!-- CULTNBW START -->
<script type="text/javascript">
  CULh_style = 'standard'; // limited, staticlink, static, search, standard (default)
  //CULh_width = ''; // fixed, fluid (default)
  CULh_colorfg = '#025d86'; // topnavbar foreground color. hex value. ex: #002B7F
  //CULh_colorbg = '#666666'; // topnavbar background color. hex value. ex: #779BC3
  //CULh_nobs = 1; // uncomment to NOT load our bootstrap javascript file and or use your own (v2.3.x required)
  //CULh_notk = 1; // uncomment to NOT load our ldpd-toolkit.js and or use your own.
  //CULh_links = { "http://clio.columbia.edu/" : "CLIO", "http://hours.library.columbia.edu" : "Hours" }; // custom (CUL/IS menu) dropdown links. "URL1":"TEXT1", "URL2":"TEXT2", "URL3":"TEXT3"
  //CULh_brand = { url : 'http://library.columbia.edu', tablet : 'Columbia University Libraries', phone : 'Libraries' }; // custom "brand" titles for tablet and phone
</script>
<script src="//cdn.cul.columbia.edu/ldpd-toolkit/build/js/jquery-cul.js"></script>
<script src="//cdn.cul.columbia.edu/ldpd-toolkit/widgets/cultnbw.min.js"></script>
<!-- /CULTNBW END -->
</body>

</html>
