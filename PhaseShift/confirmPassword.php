<?php

  session_start();
  $accessUri = $_GET['verification'];
  static $errorCode =0;
  try {

      $conn = new PDO("mysql:host=localhost;dbname=ps2016","bmscehosting","webAdminps2016");

      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare('UPDATE users SET Password=:Password WHERE Verification=:Verification');

      $hashFormat = "$2y$10$";
      $salt = "qW45WE96sd89eE84df2e3w";
      $hash_and_salt = $hashFormat . $salt;

      if (isset($_POST['confirm'])) {
        if($_POST['password'] != $_POST['confirmPassword']){
          $errorCode =1;
        }else if($_POST['password']=='' || $_POST['confirmPassword']==''){
            $errorCode =2;
        }else{
          $password = crypt($_POST['password'], $hash_and_salt);
          $stmt->execute(array(
            'Password'  => $password,
            'Verification'     => $accessUri
          ));

          $stmt = $conn->prepare('UPDATE users SET Verification = NULL WHERE Verification=:Verification');
          $stmt->execute(array(
            'Verification' => $accessUri
          ));

          header("Location: ./logout.php");
        }
      }

  } catch (Exception $e) {
      echo $e->getMessage();
  }


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="./css/materialize.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./css/common.css" media="screen" title="no title" charset="utf-8">

    <script src="./js/jquery.js" charset="utf-8"></script>
    <script src="./js/materialize.min.js" charset="utf-8"></script>
    <title>Recover Password</title>

    <?php include 'links.php'; ?>
  </head>
  <body>
    <div class="wifi-design"></div>

    <div class="container pre-container">

      <div class="row">

        <div class="col s12 m12 l12">

          <div class="card" style="margin-top: 5%;">
            <div class="row card-content card-font login-card">

              <span class="card-title title-font"> <p class="precard-font" ><b>CHANGE YOUR PASSWORD</b></p> </span>
              <br>

              <form class="" action="#" method="post">

                <div class="row">
                  <div class="input-field col s12 m12 l6 push-l3">
                    <input type="password" id="password" name="password" class="validate">
                    <label for="password">TYPE YOUR NEW PASSWORD</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12 m12 l6 push-l3">
                    <input type="password" id="password" name="confirmPassword" class="validate">
                    <label for="confirmPassword">RETYPE YOUR NEW PASSWORD</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12 m6 l6 push-l3 push-m5">
                    <button class="btn waves-effect waves-dark login-button" type="submit" name="confirm">
                      CONFIRM
                    </button>
                  </div>
                </div>

                <div class="row">
                  <div class="col l6 s12 m6 push-m3 push-l3">
                    <?php
                      if ($errorCode == 1) {
                        echo "<p style='color:red;'>Passwords do not match</p>";
                      }else if($errorCode == 2){
                        echo "<p style='color:red;'>Column(s) are left blank</p>";
                      }
                     ?>
                  </div>
                </div>

              </form>

            </div>
          </div>

        </div>

      </div>

    </div>
  </body>
</html>
