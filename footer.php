    <?php wp_footer(); ?> <!-- get the enqueue from function.php -->

    <footer class="footer">
      <div class="row">
        <div class="col-3 p-2">
          <ul class="social-media-list">
            <li><a href="<?php echo get_option('instagram'); ?>"><i class="fab fa-instagram"></i></a></li>
            <li><a href="<?php echo get_option('twitter'); ?>"><i class="fab fa-twitter"></i></a></li>
            <li><a href="<?php echo get_option('facebook'); ?>"><i class="fab fa-facebook-f"></i></a></li>
          </ul>
        </div>
        <div class="col-6 p-2 d-flex align-items-center justify-content-center">
          <a href="#"><p>Back to top</p></a>
        </div>
        <div class="col-3 p-2 d-flex align-items-center justify-content-center">
          <p>Demo built for Index by Vi.</p>
        </div>
      </div>

      <!-- <p>
        <a href="#">Back to top</a>
      </p> -->
    </footer>

    <?php wp_head(); ?>
  </body>
</html>
