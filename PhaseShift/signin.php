<?php

  session_start();
  error_reporting(E_ALL);
  ini_set('display_errors', TRUE);

  static $errorCode=0;
  if (isset($_SESSION['username'])) {
    header("Location:myAccount.php");
  }
  if (isset($_POST['join'])) {
    try {

      $conn = new PDO("mysql:host=localhost;dbname=ps2016","bmscehosting","webAdminps2016");
      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare('INSERT INTO users VALUES (:ID,:FullName,:Email,:Password,:Verification,:MobileNumber,:CollegeName)');

      if ($_POST['email'] != '' && $_POST['username'] != '' && $_POST['password'] != '' && $_POST['phone'] != '' && $_POST['collegeName'] != '' ) {


        $row = emailAlreadyExist($conn,$_POST['email']);
        if (sizeof($row)==0) {
          $hashFormat = "$2y$10$";
          $salt = "qW45WE96sd89eE84df2e3w";
          $hash_and_salt = $hashFormat . $salt;
          $password = crypt($_POST['password'], $hash_and_salt);

          $stmt->execute(array(
            'ID'           =>  '',
            'FullName'     =>  $_POST['username'],
            'Email'        =>  $_POST['email'],
            'Password'     =>  $password,
            'Verification' =>  NULL,
            'MobileNumber' =>  $_POST['phone'],
            'CollegeName'  =>  $_POST['collegeName']
          ));

          $_SESSION['username'] = $_POST['username'];
          $_SESSION['password'] = $_POST['password'];
          $_SESSION['email'] = $_POST['email'];

          header('Location:myAccount.php');
        }else{
          $errorCode =1;
        }
      }else{
        echo $errorCode;
      }
    }catch (Exception $e) {
      $e->getMessage();
    }


  }

  function emailAlreadyExist($con,$email)
  {
    $stmt = $con->prepare("SELECT * FROM users WHERE Email=:Email");
    $stmt->execute(array(
      'Email' => $email
    ));

    $row = $stmt->fetchAll();
    return $row;
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="./js/jquery.js" charset="utf-8"></script>
    <script src="./js/materialize.min.js" charset="utf-8"></script>
    <title>SIGN UP</title>

    <?php include 'links.php'; ?>


    <link rel="stylesheet" href="./css/materialize.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./css/common.css" media="screen" title="no title" charset="utf-8">
    <style media="screen">
      @media (min-device-width:631px) and (max-device-width: 992px) {
        .login-card{
          margin-top: 25%;
        }
      }
    </style>
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

              <span class="card-title title-font"> <p class="precard-font" ><b>SIGN UP</b></p> </span>
              <br>

              <form class="" action="#" method="post">

                <div class="row">
                  <div class="input-field col s12 m12 l6 push-l3">
                    <input type="text" id="username" name="username" class="validate">
                    <label for="username">ENTER YOUR USERNAME/FULLNAME</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12 m12 l6 push-l3">
                    <input type="email" id="email" name="email" class="validate">
                    <label for="email">ENTER YOUR E-MAIL</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12 m12 l6 push-l3">
                    <input type="number" size="10" name="phone" id="phone" class="validate">
                    <label for="phone">ENTER YOUR PHONE NUMBER</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12 m12 l6 push-l3">
                    <input type="text" id="collegeName" name="collegeName" class="validate">
                    <label for="username">ENTER YOUR COLLEGE NAME</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12 m12 l6 push-l3">
                    <input type="password" id="password" name="password" class="validate">
                    <label for="password">SET YOUR PASSWORD</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12 m6 l6 push-l3 push-m5">
                    <button class="btn waves-effect waves-dark login-button" type="submit" name="join">
                      JOIN
                    </button>
                  </div>
                </div>

                <br>
                <div class="row">
                  <div class="col s12 m12 l6 push-l4">
                    <?php

                      if ($errorCode == 1) {
                        echo "<p style='color:red;'>Account Already Exists</p>";
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
