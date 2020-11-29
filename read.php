<?php /* Template Name: template-read */ ?>

<?php
if (isset($_POST['submit2'])) {
  try {
    require "config.php";
    // require "../common.php";

    $connection = new PDO($dsn, $username, $password, $options);

    $sql = "SELECT *
    FROM xyz987_contacts
    WHERE city = :city";

    $city = $_POST['city'];

    $statement = $connection->prepare($sql);
    $statement->bindParam(':city', $city, PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->fetchAll();

  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}

?>

<?php get_header(); ?>



<div class="container">
  <h2>Find sent message based on city</h2>

  <form method="post" class="wrapper form-group">
    <div class="form-row">
      <div class="col-8 mb-3">
        <!-- <label for="city">City</label> -->
        <input type="text" id="city" name="city" class="form-control" placeholder="Seach by city">
      </div>

      <div class="col-4 mb-3">
        <input type="submit" name="submit2" value="View Results" class="btn btn-outline-dark">
      </div>
    </div>

  </form>

  <div class="wrapper">
    <?php
      if (isset($_POST['submit2'])) {
            if ($result && $statement->rowCount() > 0) { ?>
              <!-- open table -->
              <h2>Results</h2>

              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Message</th>
                    <th>Subscribe</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
              <?php foreach ($result as $row) { ?>
                <!-- table contents -->
                  <tr>
                    <td><?php echo escape($row["id"]); ?></td>
                    <td><?php echo escape($row["firstname"]); ?></td>
                    <td><?php echo escape($row["lastname"]); ?></td>
                    <td><?php echo escape($row["email"]); ?></td>
                    <td><?php echo escape($row["city"]); ?></td>
                    <td><?php echo escape($row["country"]); ?></td>
                    <td><?php echo escape($row["message"]); ?> </td>
                    <td><?php echo escape($row["subscribe"]); ?> </td>
                    <td><?php echo escape($row["date"]); ?> </td>
                  </tr>
              <?php } ?>
                <!-- close table -->
                </tbody>
              </table>
            <?php } else 	{ ?>
              <!-- no results -->
              No results found for <?php echo escape($_POST['city']); ?>.
        <?php }
      } ?>
  </div>

</div>



<?php get_footer(); ?>