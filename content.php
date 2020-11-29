<div class="post">
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <p class="post-meta"><?php the_date(); ?> by
  <a href="#"><?php the_author(); ?></a>
  <a href="<?php comments_link(); ?>">
    <?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
  </a>
  </p>

  <?php if ( has_post_thumbnail() ) { ?>
    <div class="row">
      <div class="col-md-4 col-sm-12">
       <div class="post-small-img shadow-sm rounded">
         <?php the_post_thumbnail( 'thumbnail' ); ?>
       </div>
      </div>
      <div class="col-md-8 col-sm-12">
        <?php the_excerpt(); ?>
      </div>
    </div>
    <?php } else { ?>
      <?php the_excerpt(); ?>
  <?php } ?>

  <!-- the rest of the content -->
</div><!-- /.blog-post -->
