<?php /* Template Name: template-about */ ?>
<?php get_header(); ?>

	<div class="row">
		<div class="col-sm-12">

    <?php if( get_field('about-title') ): ?>
          <h2><?php the_field('about-title'); ?></h2>
      <?php endif; ?>

      <?php if( get_field('about-short-text') ): ?>
          <h2><?php the_field('about-short-text'); ?></h2>
      <?php endif; ?>



      <div class="img-full">
        <?php $image = get_field('about-img'); ?>
        <img src="<?= $image = get_field('about-img'); ?>" alt="" />
        <!-- <img src="<-?= get_sub_field('img'); ?>" alt=""> -->
      </div>

      <?php if( get_field('about-long-text') ): ?>
          <h2><?php the_field('about-long-text'); ?></h2>
      <?php endif; ?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>