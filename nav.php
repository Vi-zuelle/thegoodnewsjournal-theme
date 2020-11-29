<nav class="navbar navbar-expand-md navbar-light fixed-top smart-scroll">
  <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>">
    <img src="<?= get_template_directory_uri().'/assets/img/raw/logo-tgnj.svg'?>" alt="">
  </a>
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <?php
              wp_nav_menu(array(
                'theme_location' 	=> 'header',
                'depth'             => 1,
                'container'         => 'ul',
                'container_id'      => '',
                'container_class'   => '',
                'menu_class' 		=> 'navbar-nav mr-auto',
                'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
                'menu_id'			=> '',
                // 'walker' 			=> new wp_bootstrap_navwalker(),
              ));
            ?>
  </div>
</nav>
