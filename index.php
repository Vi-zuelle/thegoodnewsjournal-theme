<?php get_header(); ?>

<div class="news">
  <div class="container">
    <div class="wrapper">
      <h1>The Good News daily</h1>
    </div>
    <div class="row">
      <div class="col-sm-8">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="news-post shadow-lg p-3 mb-5 bg-white rounded">
            <?php  get_template_part( 'content', get_post_format() ); ?>
          </div>
        <?php endwhile; ?>

        <nav>
          <ul class="pager">
            <li><?php next_posts_link( 'Previous' ); ?></li>
            <li><?php previous_posts_link( 'Next' ); ?></li>
          </ul>
        </nav>
        <?php endif;?>
      </div> <!-- /.col -->
      <?php get_sidebar(); ?>
    </div> <!-- /.row -->

  </div>
</div>
<?php get_footer(); ?>
