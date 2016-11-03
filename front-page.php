<?php get_header();  ?>
<div class="hero">
   <div class="content">
          <?php // Start the loop ?>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <div class="header-wrapper">
              <h2><?php the_field('small_tagline'); ?></h2>
              <h1><?php the_field('headline') ?> </h1>
              <h2><?php the_field('tagline'); ?></h2>
            </div> 
            
          <?php endwhile; // end the loop?>
    </div> <!-- /,content -->
  </div>
  <div class="about-wrapper">
    <div class="about-us">
      <?php // Start the loop ?>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            
            <?php endwhile; // end the loop?>
      
    </div>
  </div>
  <div class="main">
    <div class="container">

     

      <?php get_sidebar(); ?>

    </div> <!-- /.container -->
  </div> <!-- /.main -->

<?php get_footer(); ?>