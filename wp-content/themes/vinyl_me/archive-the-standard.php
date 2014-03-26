<?php
/*
Template Name: The Standard
*/

get_header('stripped'); ?>

<section class='triple-padding-bottom'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-12 text-center'>
				<h1>
          The Standard
        </h1>
        <h3>
        	Archive
      </div>
    </div>
  </div>
</section>

<section class='no-padding-top border-bottom triple-margin-bottom triple-padding-bottom'>
  <div class='container'>
    <div class='row'>
    	<div class='col-md-1'></div>
        <div class='col-md-10 text-center'>
          <?php 
            $paged = get_query_var('paged');
            $paged = ($paged) ? $paged : 1;
          ?>
          <?php
            $args = array( 'post_type' => 'the-standard', 'posts_per_page' => 12, 'paged' => $paged );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <p>
            	<?php the_date();?><br />
              <a href="<?php the_permalink(); ?>"><span class='no-margin bold-font-name'><?php the_title (); ?></span> - <?php the_field('page-subheader'); ?></a>              
            </p>
          <?php endwhile; ?>
            <p class='pull-left'>
              <?php next_posts_link( 'Previous' , $loop->max_num_pages); ?>
            </p>
              
            <p class='pull-right'>
              <?php previous_posts_link( 'Next' , $loop->max_num_pages);  ?>
            </p>
        </div>
        <?php wp_reset_query(); ?>
  		</div class="col-md-1"></div>
    </div>
  </div>
</section>

<?php get_footer('stripped'); ?>