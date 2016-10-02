<?php

  session_start();
  // print_r(explode("/",$_SERVER['REQUEST_URI']));

  $accessUri = explode("/",$_SERVER['REQUEST_URI'])[3];

  // below check if the given accessUri is a valid one or not
  // if yes then ask for pasword to be changed else redirect them to a 404 page.

    try {

      $conn = new PDO("mysql:host=localhost;dbname=ps2016","bmscehosting","webAdminps2016");
      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare('SELECT * FROM users WHERE Verification=:Verification');

      $stmt->execute(array(
        'Verification'  =>  $accessUri
      ));

      $row = $stmt->fetchAll();
      if (sizeof($row) == 0) {
        echo "Invalid or expired url";
      }
      else{


        header("Location: ../confirmPassword.php?verification=$accessUri");
      }
    } catch (Exception $e) {
      $e->getMessage();
    }

 ?>
