<?php get_header();  ?>

<div class="main wrapper">
  <div class="container">


      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>

      <?php endwhile; // end the loop?>



  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>