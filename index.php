<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="blog-container">
 <div class="blog"> 
    <div>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	<div class="sarah">
    	<?php the_post_thumbnail('large' ); ?>
        </div>
        <div class="should-be-one">
    	<?php $link = get_post_permalink(); ?>
	    <a href="<?php echo $link ?>">
	    <h2><?php the_title(); ?></h2></a>
	    <h3><?php   echo date('l \t\h\e jS'); ?></h3>
			    <?php $fname = get_the_author_meta('first_name'); ?>
			    <?php $lname = get_the_author_meta('last_name'); ?>
			    <p><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?> "><?php echo $fname . ' ' . $lname ?></a></p>
	    <?php the_content(); ?>
    	</div>
    <?php endwhile ?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>