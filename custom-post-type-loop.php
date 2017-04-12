<!--- *************************************
Simple custom post type loop
In this case my custom post type is slider  
************************************* --->

<?php $loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => -1 ) ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <h1><?php echo the_title(); ?></h1>
<?php endwhile; wp_reset_query(); ?>

