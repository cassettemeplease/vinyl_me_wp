<?php
/*
Template Name: With Featured Image Header
*/

get_header(); ?>




<section class='bg-cover'
	<?php

    if ( $thumbnail_id = get_post_thumbnail_id() ) {
        if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, '' ) )
            printf( ' style="background-image: url(%s);"', $image_src[0] );     
    }

?>>
</section>
<section class='padding-top padding-bottom border-bottom triple-margin-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12 text-center'>
        <h1>
          <?php the_title(); ?>
        </h1>
        <h3>
        	<?php while ( have_posts() ) : the_post(); ?>
					 <?php the_field('page-subheader'); ?>
 
					<?php endwhile; // end of the loop. ?>
        </h3>
      </div>
    </div>
  </div>
</section>
<section class='padding-top padding-bottom border-bottom triple-margin-bottom'>
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

<?php get_footer(); ?>