<?php
/*
Template Name: Friends & Family
*/

get_header(); ?>

<section class='triple-padding-bottom'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-12 text-center'>
				<h1>
          <?php the_title(); ?>
        </h1>
        <h3>
        	<? the_field('page-subheader'); ?>
      </div>
    </div>
  </div>
</section>

<section class='no-padding-top triple-margin-bottom triple-padding-bottom border-bottom'>
  <div class='container'>
    <div class='row'>
      <?php
        $args = array(
          'post_type' => 'friends-family',
        );
        $friends = new WP_Query( $args );
        if( $friends->have_posts() ) {
          while( $friends->have_posts() ) {
            $friends->the_post();
      ?>
        <div class='col-md-4'>
          <div class='panel padding-right padding-left padding-top double-margin-bottom'>
            <img class="padding-bottom full-width" src="<?php the_field('company_logo'); ?>" />
            <p class='no-margin bold-font-name'>
              <?php the_title (); ?>
            </p>
            <p>
                <?php the_field('company_description'); ?>
            </p>
            <a href="<?php the_field('company_link'); ?>">View Website</a>
          </div>
        </div>
      <?php
          }
        }
        else {
          echo 'Nothing to see here. Keep moving.';
        }
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
