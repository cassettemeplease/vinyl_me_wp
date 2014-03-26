<?php
/*
Template Name: Archive
*/

get_header(); ?>


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

<section class='no-padding-top triple-margin-bottom triple-padding-bottom border-bottom'>
  <div class='container'>
    <div class='row'>
                <?php 
            $paged = get_query_var('paged');
            $paged = ($paged) ? $paged : 1;
          ?>
          <?php
            $args = array( 'post_type' => 'record-of-the-month', 'posts_per_page' => 12, 'paged' => $paged );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class='col-md-4'>
          <div class='panel padding-right padding-left padding-top double-margin-bottom'>
            <img class="padding-bottom full-width" src="<?php the_field('album_cover'); ?>" />
              <?php
 
                if(get_field('featured_month'))
                {
                  echo '<p class="half-margin-bottom">' . get_field('featured_month') . '</p>';
                }
                 
              ?>
            <a href="<?php the_permalink(); ?>"><p class='no-margin bold-font-name'>
              <?php the_title (); ?>
            </p>
            <p class="no-margin-bottom">
                <?php the_field('album_title'); ?></a>
            </p>
          </div>
        </div>
        <?php endwhile; ?>
    </div>
    <p class='pull-left'>
      <?php next_posts_link( 'Previous' , $loop->max_num_pages); ?>
    </p>
      
    <p class='pull-right'>
      <?php previous_posts_link( 'Next' , $loop->max_num_pages);  ?>
    </p>
  </div>
</section>

<?php get_footer(); ?>

