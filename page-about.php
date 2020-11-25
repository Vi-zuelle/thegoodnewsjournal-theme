<?php get_header(); ?>

	<div class="row">
		<div class="col-sm-12">

			<!-- <-?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
        endwhile; endif;
      ?> -->

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>
        <!-- <-?php the_post_thumbnail(); ?> -->

      <?php endwhile;  endif;?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>