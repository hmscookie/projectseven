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
  <div class="about">
    <section class="about-us wrapper">
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
           <div class="item">
            <?php $icon_image = get_field('about_us_image') ?>
             <img src="<?php echo $icon_image['url'] ?> " alt="">
            <div class= about-us-div>
              <h3><?php the_field('about_us'); ?> </h3>
              <hr class= "fade-line">
              <p><?php the_field('about_us_text'); ?></p>
            </div>
           </div>
         <?php endwhile ?>
     </section>
    </div>
    <div class="middle-image">
      <div class="quotes">
        <?php $icon_image_two = get_field('quotes_image') ?>
        <img src="<?php echo $icon_image_two['url'] ?> " alt="">
      </div>
      <div>
        <p><?php the_field('quote_text'); ?></p>
        <p><?php the_field('quote_author') ?> </p>
      </div>
    </div>

    <section class="work-with">
    <p><?php the_field('work_with_title') ?> </p>
      <div>
      <?php
          while(have_rows('who_we_work_with')) : the_row(); 
           ?>
        <?php $workimage = get_sub_field('client_image') ?>
        <img src="<?php echo $workimage['url'] ?>" alt="">
       <?php endwhile ?>
       </div>
//trying to flex the images now 
    </section>

<?php get_footer(); ?>