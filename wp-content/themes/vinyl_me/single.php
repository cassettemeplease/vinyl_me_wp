<?php get_header(); ?>
<section class='bg-cover' style='background-image: url(images/how_it_works_feature.jpg);'></section>
<section class='padding-top padding-bottom border-bottom triple-margin-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12 text-center'>
        <h1>
          <?php the_title(); ?>
        </h1>
        <h3>
          Build your collection, discover new music, join the community
        </h3>
      </div>
    </div>
  </div>
</section>
<section class='padding-top border-bottom triple-padding-bottom triple-margin-bottom'>
  <div class='container'>
    <div class='row'>
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>