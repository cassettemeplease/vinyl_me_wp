<?php get_header(); ?>


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
					 <?php the_field('album_title'); ?>
 
					<?php endwhile; // end of the loop. ?>

        </h3>
      </div>
    </div>
  </div>
</section>
<section class='padding-top border-bottom double-padding-bottom double-margin-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-1'></div>
      <div class='col-md-4 margin-bottom'>
        <img class="img-responsive" 
        <?php if( get_field('album_cover') ): ?>
					<img src="<?php the_field('album_cover'); ?>" />
				<?php endif; ?>
      </div>
      <div class='col-md-6'>
          <?php while ( have_posts() ) : the_post(); ?>
						<?php the_field('vmp_review'); ?>
					<?php endwhile; // end of the loop. ?>
        <div class='col-md-1'></div>
      </div>
    </div>
  </div>
</section>

<?php query_posts(array(
'post_type' => 'record-of-the-month',
'meta_key' => 'show_additional_information', // the name of the custom field
'meta_compare' => '=', // the comparison (e.g. equals, does not equal, etc...)
'meta_value' => 'True', // the value to which the custom field is compared. In my case, 'featured_product' was a true/false checkbox. If you had a custom field called 'color' and wanted to show only those blue items, then the meta_value would be 'blue'
'paged' => $paged
)
); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


<section class='bg-cover invert-section triple-margin-bottom' style='background-image: url(<?php the_field('background_image_2'); ?>);'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-2'></div>
      <div class='col-md-8 text-center'>
        <?php while ( have_posts() ) : the_post(); ?>
						<?php the_field('press_quote'); ?>
				<?php endwhile; // end of the loop. ?>
      </div>
      <div class='col-md-2'></div>
    </div>
  </div>
</section>
<section class='padding-top double-padding-bottom double-margin-bottom border-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-1'></div>
      <div class='col-md-10 double-padding-right'>
        <?php while ( have_posts() ) : the_post(); ?>
						<?php the_field('artist_bio'); ?>
				<?php endwhile; // end of the loop. ?>
      </div>
      <div class='col-md-1'></div>
    </div>
  </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>