<?php

// =============== Scripts and stylesheets
function scripts() {
  wp_enqueue_style( 'Raleway', 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' );
  wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.min.css' );
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
  wp_enqueue_style( 'boostrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );

  wp_enqueue_script( 'customjs', get_template_directory_uri() . '/assets/js/custom.min.js', array('jquery'), '', true );
  wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'scripts' );
// =============== .Scripts and stylesheets


// =============== Google fonts
function google_fonts() {
  wp_register_style( 'Raleway', 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' );
  wp_enqueue_style( 'Raleway', sans-serif );
}
add_action( 'wp_print_styles', 'google_fonts' );
// =============== .Google fonts


// =============== Wordpress titles
add_theme_support( 'title_tag' );
// =============== .Wordpress titles


// =============== Featured images
add_theme_support( 'post-thumbnails' );
// =============== .Featured images


// =============== Email
function shortcode_adresse_email() {
  $adresse = explode('@', get_field('email', pll_current_language('slug')));
  $prefixe = $adresse[0];
  $suffixe = $adresse[1];
  $email = '
    <script type="text/javascript">
      function genereadresse(nom,reste) {
         document.write("<a href=" + "mail" + "to:" + nom + "@" + reste + ">" + nom + "@" + reste + "</a>")
      }
      genereadresse("' . $prefixe . '","' . $suffixe . '");
    </script>
  ';
  return $email;
}
add_shortcode('adresse-email', 'shortcode_adresse_email');
// =============== .Email


// =============== Custom settings section in the admin panel
// Custom Settings menu in panel
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );
// Build the page - section and save changes button
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
      <?php
        settings_fields( 'section' );
        do_settings_sections( 'theme-options' );
        submit_button();
      ?>
    </form>
  </div>
<?php }
// Build input field for TWITTER
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }
// Build input field for INSTAGRAM
function setting_instagram() { ?>
  <input type="text" name="instagram" id="instagram" value="<?php echo get_option( 'instagram' ); ?>" />
<?php }
// Build input field for FACEBOOK
function setting_facebook() { ?>
  <input type="text" name="facebook" id="facebook" value="<?php echo get_option( 'facebook' ); ?>" />
<?php }
// Page setup: show, accept and save
function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );

  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
  add_settings_field( 'instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section' );
  add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section' );

  register_setting( 'section', 'twitter' );
  register_setting( 'section', 'instagram' );
  register_setting( 'section', 'facebook' );
}
add_action( 'admin_init', 'custom_settings_page_setup' );
// =============== .Custom settings section in the admin panel


// =============== Make sure basic setup stay
if(!function_exists('_tk_setup')):
  function _tk_setup() {
    global $cap, $content_width;
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    add_editor_style();
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array( 'aside', 'image', 'video', 'quote', 'link'));
    add_theme_support('custom-background', apply_filters('_tk_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    )));
    load_theme_textdomain( '_tk', get_template_directory_uri() . '/languages' );

    register_nav_menus(array(
      'header'  => __('header')
    ));
  }
endif;
add_action('after_setup_theme', '_tk_setup');
// =============== .Make sure basic setup stay


// =============== Escapes HTML for output - TO DO
// With this function, we can wrap any variable in the escape() function, and the HTML entities will be protected
function escape($html) {
  return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8", true);
}
// =============== .Escapes HTML for output


// =============== jQuery Migrate
// function wpb_jquery_migrate($scripts) {
//   $scripts->remove('jquery');
//   $scripts->add('jquery', false, array( 'jquery-core' ), '1.12.4');
//   $scripts->remove('wp-embed');
// }
// add_filter('wp_default_scripts', 'wpb_jquery_migrate');
// =============== .jQuery Migrate


// =============== Change the excerpt length
function my_excerpt_length($length){
  return 40;
}
add_filter('excerpt_length', 'my_excerpt_length');
// =============== .Change the excerpt length


// =============== Next function

// =============== .Next function