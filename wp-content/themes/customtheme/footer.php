        <?php
/**
 * The template for displaying the footer
 *
 * Displays all of the footer element.
 *
 * @package customtheme
 * @subpackage 
 * @since customtheme 1.0
 */
?><?php wp_footer(); ?>
        <footer class="footer-container">
          <div class="container">
                <div class="row">
                    <div class="text col-md-4 col-sm-4 col-xs-6">
                      <p class="company-ztorg">© Zac Taylor | Louisville, KY</p>
                    </div>
                    <div class="social-wrapper col-md-4 col-sm-4 col-xs-6">
                      <p>
                      <a href="https://www.facebook.com/ztaylor555" target="_blank"><img src="<?php bloginfo('template_directory');?>/assets/images/fb_share.png" alt="My facebook page"></a>
                      <a href="https://www.linkedin.com/in/zac-taylor-068875119" target="_blank"><img src="<?php bloginfo('template_directory');?>/assets/images/LinkedIn_share.jpg" alt="My linkedIn page."></a>
                      <a href="https://github.com/gitZac" target="_blank" ><img src="<?php bloginfo('template_directory');?>/assets/images/github-logo.png" alt="My Twitter Feed"></a></p>
                    </div>
                    <div class="number-text col-md-4 col-sm-4 col-xs-12">
                      <p>724.255.3138  |  ztaylor555@gmail.com</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 footer-nav">
                        <a href="http://zactaylor.org/">Home</a>
                        <a href="http://zactaylor.org/what-i-do/">What I Do</a>
                        <a href="http://zactaylor.org/my-portfolio/">My Portfolio</a>
                    </div>
                </div>
            </div>
        </footer> 

  <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/portfolio.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/js/waypoints/lib/jquery.waypoints.js"></script>
</body>
</html>