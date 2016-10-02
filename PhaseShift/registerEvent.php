<?php

  session_start();
  if(!isset($_SESSION['id'])){
    header("Location: login.php");
  }
  $eventId = $_GET['id'];
  $conn = new PDO("mysql:host=localhost;dbname=ps2016","bmscehosting","webAdminps2016");
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare('INSERT INTO Registrations (UserID,EventID) VALUES (:UserID,:EventID)');

  $stmt->execute(array(
    "UserID"   =>  $_SESSION['id'],
    "EventID"  =>  $eventId
  ));

  header("Location: myAccount.php");
 ?>
