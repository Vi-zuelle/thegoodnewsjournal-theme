<?php

/**
  * Open a connection via PDO to create a
  * new database and table with structure.
  *
  */

require "config.php";

try {
  $connection = new PDO("mysql:host=$host", $username, $password, $options);
  // $sql = file_get_contents("data/init.sql");
  $sql = "

      use thegoodnewsjournal;

      CREATE TABLE xyz987_contacts (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        message VARCHAR(150) NOT NULL,
        subscribe BOOLEAN,
        country VARCHAR(50),
        city VARCHAR(50),
        date TIMESTAMP
      );";


  $connection->exec($sql);

  echo "Table xyz987_contacts created successfully.";
} catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}