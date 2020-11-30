<div class="post">


  <?php if ( has_post_thumbnail() ) { ?>
    <div class="row">


      <div class="col-md-5 col-sm-12">
        <div class="post-small-img shadow-sm rounded">
          <!-- <-?php the_post_thumbnail( 'thumbnail' ); ?> -->
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
        </div>
      </div>


      <div class="col-md-7 col-sm-12">
        <a href="<?php the_permalink(); ?>">
          <h5 class="title"><?php the_title(); ?></h5>
          <p class="post-meta"><?php the_date(); ?> by
            <?php the_author(); ?>
            <!-- <a href="<-?php comments_link(); ?>">
              <-?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
            </a> -->
          </p>

          <?php the_excerpt(); ?>
        </a>
      </div>
    </div>

  <?php } else { ?>

      <?php the_excerpt(); ?>
  <?php } ?>

  <!-- the rest of the content -->
</div><!-- /.blog-post -->
