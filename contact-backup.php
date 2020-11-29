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
 <div class="container">
  <form method="post" class="form-group">
    <div class="form-row">
      <div class="col mb-3">
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name">
      </div>
      <div class="col mb-3">
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name">
      </div>
    </div>

    <div class="form-row">
      <div class="col mb-3">
        <label for="email">Email Address</label>
        <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
      </div>
    </div>

    <div class="form-row">
      <div class="col mb-3">
        <label for="country">Country</label>
        <input type="text" name="country" id="country" class="form-control" placeholder="Country">
      </div>
      <div class="col mb-3">
        <label for="city">City</label>
        <input type="text" name="city" id="city" class="form-control" placeholder="City">
      </div>
    </div>

    <div class="form-row">
      <div class="col mb-3">
        <label for="message">Message</label>
        <textarea type="text" name="message" class="form-control" rows="3" placeholder="Message"></textarea>
      </div>
    </div>

    <!-- <div class="form-row">
      <div class="col mb-3 form-center">
        <input class="form-check-input" type="checkbox" value="" id="checkbox">
        <label class="form-check-label" for="checkbox">Subscribe to our newsletter</label>
      </div>
    </div> -->

    <div class="form-row">
      <div class="col mb-3 form-center">
        <input type="submit" name="submit" value="Send" class="btn btn-outline-dark">
      </div>
    </div>
  </form>

 </div>





<?php get_footer(); ?>