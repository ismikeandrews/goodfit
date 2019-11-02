<?php
  include_once 'connection.php';

  $email = $_POST['email'];

  $sql = "INSERT INTO email(email) VALUES('$email');";
  mysqli_query($con, $sql);

  header("Location: ../index.php?cadastro=success");
