<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">

      <h1>The Good News Journal</h1>

      <div class="wrapper intro">
        <?php if( get_field('intro-title') ): ?>
            <h2 class="h4"><?php the_field('intro-title'); ?></h2>
        <?php endif; ?>

        <?php if( get_field('intro-text') ): ?>
            <h3><?php the_field('intro-text'); ?></h3>
        <?php endif; ?>
      </div>

      <div class="wrapper mission-cta shadow-sm rounded" style="background-image:linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(0, 0, 0, 0.73)), url('<?= get_field('cta-img'); ?>');">
        <div class="wrapper-cta">
          <?php if( get_field('cta-title') ): ?>
              <h2 class="h4"><?php the_field('cta-title'); ?></h2>
          <?php endif; ?>

          <?php if( get_field('cta-text') ): ?>
              <h3><?php the_field('cta-text'); ?></h3>
          <?php endif; ?>

          <a href="<?php echo esc_url( home_url( '/news' ) ); ?>">
            <button type="button" class="btn btn-outline-light btn-lg"><?= the_field('cta-text-btn')?></button>
          </a>
        </div>
      </div>

    </div> <!-- /.col -->
  </div> <!-- /.row -->

</div>




<?php get_footer(); ?>