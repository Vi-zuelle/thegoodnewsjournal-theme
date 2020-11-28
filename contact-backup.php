

<?php
  // ============== Block start - Form backend

  //response generation function
  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

  }
  //response messages variables
  $not_human       = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $human = $_POST['message_human'];

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

  // VALIDATIONS
  if(!$human == 0){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else
        {
          //send email
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);
  // ============== Block end .Form backend
?>

<!-- Connection to the DB -->
<?php
//establish connection
$con = mysqli_connect("localhost","root","","thegoodnewsjournal");
//on connection failure, throw an error
if(!$con) {
die('Could not connect: '.mysql_error());
}
?>

<!-- Insert the form values into the database -->
<?php
$sql="INSERT INTO `thegoodnewsjournal`.`xyz987_contacts` ( `name` , `email` ) VALUES ( '$name','$email')";
mysqli_query($con,$sql);
?>


<?php get_header(); ?>

	<div class="row">
		<div class="col-sm-12">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
      <?php the_title(); ?>
      <?php the_content(); ?>
    <?php endwhile;  endif;?>

    <p>Contact form here</p>

    <!-- Form frontend -->
    <div id="respond">
      <?php echo $response; ?>
      <form action="<?php the_permalink(); ?>" method="post">

        <p><label for="name">Name: <span>*</span>
        <input type="text" name="name" value="<?php echo esc_attr($_POST['name']); ?>"></label></p>

        <p><label for="email">Email: <span>*</span>
        <input type="text" name="email" value="<?php echo esc_attr($_POST['email']); ?>"></label></p>

        <p><label for="message">Message: <span>*</span>
        <textarea type="text" name="message"><?php echo esc_textarea($_POST['message']); ?></textarea></label></p>

        <p><label for="message_human">Human Verification: <span>*</span>
        <input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></p>

        <input type="hidden" name="submitted" value="1">

        <p><input type="submit"></p>

      </form>
    </div>
    <!-- .Form frontend -->
		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>