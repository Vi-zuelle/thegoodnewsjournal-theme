<div class="post-single">
  <h2 class="post-title"><?php the_title(); ?></h2>
  <p class="post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

  <!-- featured image -->
  <div class="post-img shadow-sm rounded">
    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
  </div>

  <div class="post-text">
    <?php the_content(); ?>
  </div>

</div><!-- .blog-post -->