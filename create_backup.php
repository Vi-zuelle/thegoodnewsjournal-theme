

<?php
if (isset($_POST['submit'])) { //run if the form has been submitted
  require "./config.php";
  // /Users/Vi/GoogleDrive/projetsweb/thegoodnewsjournal/wp-content/themes/thegoodnewsjournal-theme/create.php
  // /Users/Vi/GoogleDrive/projetsweb/thegoodnewsjournal/wp-content/plugins/akismet/views/config.php

  try {
    $connection = new PDO($dsn, $username, $password, $options);
    // insert new user code will go here
    $new_contact = array(
      "name"       => $_POST['name'],
      "email"      => $_POST['email'],
      "message"    => $_POST['message'],
      "subscribe"  => $_POST['subscribe'],
      "location"   => $_POST['location']
    );

    $sql = sprintf(
      "INSERT INTO %s (%s) values (%s)",
      "xyz987_contacts",
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


    <form method="post">
    	<label for="name">Name</label>
      <input type="text" name="name" id="name">

    	<label for="email">Email Address</label>
      <input type="text" name="email" id="email">

    	<label for="message">Message</label>
      <input type="textarea" name="message" id="message">

    	<label for="subscribe">Subscribe to the newsletter</label>
    	<input type="checkbox" name="subscribe" id="subscribe">

      <label for="location">Location</label>
      <input type="text" name="location" id="location">

    	<input type="submit" name="submit" value="Submit">
    </form>

    <a href="index.php">Back to home</a>

<?php get_footer(); ?>