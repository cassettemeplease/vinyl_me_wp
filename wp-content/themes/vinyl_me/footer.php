<section class='border-bottom padding-top margin-top triple-padding-bottom margin-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-2'></div>
      <div class='col-md-8 text-center'>
        <h1 class='double-margin-bottom'>
          Request your invite today
        </h1>
        <div class='row'>
          <div class='col-sm-1'></div>
          <div class='col-sm-7'>
            <div id='mc_embed_signup'>
              <form action='/invite-confirmation' class='validate' id='mc-embedded-subscribe-form' method='post' name='mc-embedded-subscribe-form' novalidate='' target='_blank'></form>
              <input class='email margin-bottom' id='mce-EMAIL' name='EMAIL' placeholder='Enter your email address' required='' type='email' value=''>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups -->
              <div style='position: absolute; left: -5000px;'>
                <input name='b_cb57573547a3ccd3fbaea702e_54d98d20ab' type='text' value=''>
              </div>
            </div>
          </div>
          <div class='col-sm-2'>
            <input class='btn btn-default' id='mc-embedded-subscribe' name='subscribe' type='submit' value='Request an Invite'>
          </div>
          <div class='col-sm-1'></div>
        </div>
      </div>
      <div class='col-sm-2'></div>
    </div>
  </div>
</section>

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