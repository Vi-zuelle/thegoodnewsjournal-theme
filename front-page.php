<?php get_header(); ?>


	<div class="row">
		<div class="col-sm-12">

      <h1><?php the_title(); ?></h1>

      <?php if( get_field('intro-title') ): ?>
          <h2><?php the_field('intro-title'); ?></h2>
      <?php endif; ?>

      <?php if( get_field('intro-text') ): ?>
          <h2><?php the_field('intro-text'); ?></h2>
      <?php endif; ?>

      <?php if( get_field('intro-about-title') ): ?>
          <h2><?php the_field('intro-about-title'); ?></h2>
      <?php endif; ?>

      <?php if( get_field('intro-about-text') ): ?>
          <h2><?php the_field('intro-about-text'); ?></h2>
      <?php endif; ?>

      <div class="img-full">
          <?php $image = get_field('intro-about-img'); ?>
          <img src="<?= $image = get_field('intro-about-img'); ?>" alt="" />
          <!-- <img src="<-?= get_sub_field('intro-about-img'); ?>" alt=""> -->
      </div>

    </div> <!-- /.col -->
  </div> <!-- /.row -->



<?php get_footer(); ?>