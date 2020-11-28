<!-- <nav>
  <div class="blog-masthead" style="background: red">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="<-?php echo get_bloginfo( 'wpurl' );?>">LOGO</a>
          <-?php wp_list_pages('&title_li='); ?>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">
          <a href="<-?php echo get_bloginfo( 'wpurl' );?>"><-?php echo get_bloginfo('name'); ?></a>
        </h1>
        <p class="lead blog-description"><-?php echo get_bloginfo('description'); ?></p>
      </div>

</nav> -->
<header>
  <nav class="navbar container-fluid navbar-expand-md">
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-3 col-sm-8"> -->

          <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>">
            <img src="<?= get_template_directory_uri().'/assets/img/raw/logo-tgnj.svg'?>" alt="">
          </a>

        <!-- </div> -->
        <!-- <div class="col-md-9 col-sm-4"> -->
          <div class="menu">
            <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-collapse">
              <?php
                  wp_nav_menu(array(
                    'theme_location' 	=> 'header',
                    'depth'             => 1,
                    'container'         => 'ul',
                    'container_id'      => '',
                    'container_class'   => '',
                    'menu_class' 		=> '',
                    'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
                    'menu_id'			=> '',
                    // 'walker' 			=> new wp_bootstrap_navwalker(),
                  ));
                ?>
              </div>

          </div> <!-- .menu -->


        <!-- </div>  -->


      </div> <!-- .row -->

      </div> <!-- .container -->


    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
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
                    'container_class'   => 'navbar-nav mr-auto',
                    'menu_class' 		=> '',
                    'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
                    'menu_id'			=> '',
                    // 'walker' 			=> new wp_bootstrap_navwalker(),
                  ));
                ?>

        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>



</header>