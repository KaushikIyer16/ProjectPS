<?php

  session_start();
  error_reporting(E_ALL);
  ini_set('display_errors', TRUE);
  static $errorCode=0;
  if(isset($_SESSION['username'])){
    header("Location: myAccount.php");
  }
  if (isset($_POST['login'])) {
    try {

      $conn = new PDO("mysql:host=localhost;dbname=ps2016","bmscehosting","webAdminps2016");
      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare('SELECT * FROM users WHERE Email = :Email');
      // $getID = $conn->prepare('SELECT ID FROM users WHERE Email = :Email');

      $hashFormat = "$2y$10$";
      $salt = "qW45WE96sd89eE84df2e3w";
      $hash_and_salt = $hashFormat . $salt;


      if ($_POST['email'] != '' && $_POST['password'] != '') {

        $password = crypt($_POST['password'], $hash_and_salt);

        $stmt->execute(array(
          'Email'     =>  $_POST['email']
        ));

        $row = $stmt->fetch();


        if ($row['FullName'] == '') {

          $errorCode = 1;
        }else if ($row['Password'] !== $password) {

          $errorCode = 2;
        }else{

          $errorCode = 0;
          $_SESSION['username'] = $row['FullName'];
          $_SESSION['password'] = $row['Password'];
          $_SESSION['email'] = $row['Email'];
          $_SESSION['id'] = $row['ID'];
          $_SESSION['college'] = $row['CollegeName'];

          header("Location: myAccount.php");
        }

      }
    }catch (Exception $e) {
      $e->getMessage();
    }

  }

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="./js/jquery.js" charset="utf-8"></script>
    <script src="./js/materialize.min.js" charset="utf-8"></script>
    <title>Login</title>

    <?php include 'links.php'; ?>


    <link rel="stylesheet" href="./css/materialize.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./css/common.css" media="screen" title="no title" charset="utf-8">

    <script type="text/javascript">
        $(document).ready(function(){
        $('#nav-button').sideNav();

      });
    </script>

  </head>
  <body>
    <?php include 'header.php'; ?>


    <div class="wifi-design"></div>

    <div class="container pre-container">

      <div class="row">

        <div class="col s12 m12 l12">

          <div class="card" style="margin-top: 5%;">
            <div class="row card-content card-font login-card">

              <span class="card-title title-font"> <p class="precard-font" ><b>LOGIN</b></p> </span>
              <br>

              <form class="" action="" method="post">

                <div class="row">
                  <div class="input-field col s12 m12 l6 push-l3">
                    <input type="email" id="username" class="validate" name="email">
                    <label for="username">E-MAIL</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12 m12 l6 push-l3">
                    <input id="password" type="password" class="validate" name="password">
                    <label for="password">PASSWORD</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12 m6 l6 push-l3 push-m3">
                    <button class="btn waves-effect waves-dark login-button" type="submit" name="login">
                      LOG IN
                    </button>
                  </div>

                  <div class="input-field col s12 m6 l6">
                    <a href="signin.php" class="btn waves-effect waves-dark login-button">SIGN UP</a>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12 m6 l6 push-l3 push-m3">
                    <strong><a href="./changePassword.php" style="color:rgba(111,46,136,1);">Forgot your password?</a></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12 m12 l6 push-l4">
                    <?php

                      if ($errorCode == 1) {
                        echo "<p style='color:red;'>Account Does Not Exist</p>";
                      }else if($errorCode == 2){
                        echo "<p style='color:red;'>Invalid Password</p>";
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
