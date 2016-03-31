<?php
/*
Template Name: No Featured Image Header
*/

get_header(); ?>
<div class="theme-wrapper">
<section class='triple-padding-bottom'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-12 text-center'>
				<h1>
          <?php the_title(); ?>
        </h1>
      </div>
    </div>
  </div>
</section>
<section class='padding-top double-padding-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-1'></div>
        <?php
        if (have_posts()) :
           while (have_posts()) :
              the_post();
                 the_content();
           endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
</section>
</div>
<?php get_footer(); ?>