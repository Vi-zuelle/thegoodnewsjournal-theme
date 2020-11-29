<?php /* Template Name: template-about */ ?>
<?php get_header(); ?>

<div class="about container">
	<div class="row">
		<div class="col-sm-12">

      <div class="wrapper intro">
        <?php if( get_field('intro-title') ): ?>
            <h2 class="h4"><?php the_field('intro-title'); ?></h2>
        <?php endif; ?>

        <?php if( get_field('intro-text') ): ?>
            <h3><?php the_field('intro-text'); ?></h3>
        <?php endif; ?>
      </div>

      <div class="wrapper long-text">
        <?php if( get_field('about-long-text') ): ?>
          <div class="text"><?php the_field('about-long-text'); ?></div>
        <?php endif; ?>
      </div>

      <div class="wrapper mission-cta shadow-sm rounded" style="background-image: url('<?= get_field('cta-img'); ?>');">
        <div class="wrapper-cta">
          <?php if( get_field('cta-title') ): ?>
              <h2 class="h4"><?php the_field('cta-title'); ?></h2>
          <?php endif; ?>

          <?php if( get_field('cta-text') ): ?>
              <h3 class="cta-text"><?php the_field('cta-text'); ?></h3>
          <?php endif; ?>

          <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
            <button type="button" class="btn btn-outline-light btn-lg"><?= the_field('cta-text-btn')?></button>
          </a>
        </div>
      </div>


		</div> <!-- /.col -->
	</div> <!-- /.row -->

</div>

<?php get_footer(); ?>