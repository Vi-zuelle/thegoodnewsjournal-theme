<?php /* Template Name: template-contact */ ?>


<?php

  if (isset($_POST['submit'])) {
    require "config.php";
    // require "functions.php";

    try {
      $connection = new PDO($dsn, $username, $password, $options);

      $new_contact = array(
        "firstname" => $_POST['firstname'],
        "lastname"  => $_POST['lastname'],
        "email"     => $_POST['email'],
        "message"   => $_POST['message'],
        "subscribe" => $_POST['subscribe'],
        "country"   => $_POST['country'],
        "city"      => $_POST['city']
      );

      $sql = sprintf(
        "INSERT INTO %s (%s) values (%s)",
        "xyz987_contacts", // table name
        implode(", ", array_keys($new_contact)),
        ":" . implode(", :", array_keys($new_contact))
      );

      $statement = $connection->prepare($sql);
      $statement->execute($new_contact);

    } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
    }
  }
?>

<?php get_header(); ?>

<?php if (isset($_POST['submit']) && $statement) { ?>
  <?php echo $_POST['firstname']; ?>, your message is sent.
<?php } ?>

<!--
  check to see if a $_POST was submitted,
  and if a $statement was successful.
  If so, it will print a success message that
  includes the first name of the successfully added user.
 -->


<!--
  SEND INFO IN DB
 -->
<form method="post">
    	<label for="firstname">First Name</label>
      <input type="text" name="firstname" id="firstname">

    	<label for="lastname">Last Name</label>
      <input type="text" name="lastname" id="lastname">

    	<label for="email">Email Address</label>
      <input type="text" name="email" id="email">

    	<label for="country">Country</label>
      <input type="text" name="country" id="country">

    	<label for="city">City</label>
      <input type="text" name="city" id="city">

    	<label for="message">Message</label>
      <textarea type="text" name="message"></textarea>


    	<input type="submit" name="submit" value="Submit">
    </form>






<?php get_footer(); ?>