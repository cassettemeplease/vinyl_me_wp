<footer class='double-margin-bottom double-margin-top double-padding-top'>
  <section class="no-padding">
    <div class='container'>
      <div class='row'>
        <div class='col-md-12 text-center double-margin-bottom double-padding-bottom' id='footer-top'>
          <img src="<?php bloginfo('template_directory');?>/images/chicago-star.png">
        </div>
        <div class='row padding-left double-margin-bottom double-padding-bottom '>
          <div class='col-sm-2'></div>
          <div class='col-sm-2 margin-bottom'>
            <nav class='margin-bottom'>
              <?php wp_nav_menu( array('theme_location' => 'footer1' , 'container' => '', 'items_wrap' => '<ul class="list-unstyled">%3$s</ul>' )); ?>
            </nav>
          </div>
          <div class='col-sm-2 margin-bottom'>
            <nav class='margin-bottom'>
              <?php wp_nav_menu( array('theme_location' => 'footer2' , 'container' => '', 'items_wrap' => '<ul class="list-unstyled">%3$s</ul>' )); ?>
            </nav>
          </div>
          <div class='col-sm-2'>
            <nav class='margin-bottom'>
              <?php wp_nav_menu( array('theme_location' => 'footer3' , 'container' => '', 'items_wrap' => '<ul class="list-unstyled">%3$s</ul>' )); ?>
            </nav>
          </div>
          <div class='col-sm-2'>
            <nav class='margin-bottom'>
              <?php wp_nav_menu( array('theme_location' => 'footer4' , 'container' => '', 'items_wrap' => '<ul class="list-unstyled">%3$s</ul>' )); ?>
            </nav>
          </div>
          <div class='col-sm-2'></div>
        </div>
      <div class='col-md-12 text-center double-margin-bottom'>
          <small class="gray-text-color">&copy; 2014 Offbeat Ventures, LLC</small>
      </div>
      </div>
    </div>
  </section>
  <?php wp_footer(); ?>
</footer>