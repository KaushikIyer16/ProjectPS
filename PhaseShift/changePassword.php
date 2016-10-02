<?php

session_start();
// now i am going to create a paaword forget statement..  so what are the steps :

// step 1: on clicking a link open a model for asking their email address.
// step 2: now generate a string tht has a particular time of validity.
// step 3: now if i get a request to a changePassword.php file from one of the valid key's.
// step 4: ask them for the new password and once changed set the verification key to "".

  static $errorCode = 0 ;
  if (isset($_POST['retrieve'])) {

    $conn = new PDO("mysql:host=localhost;dbname=ps2016","bmscehosting","webAdminps2016");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $email = $_POST['email'];
    if ($email == '') {
      $errorCode = 1;
    }else if(emailDoesNotExist($conn,$email)){
      $errorCode = 2;
    }else{
      generateRecoveryMail($conn,$email);
      // here errorCode variable is actually used to set the success status of the operation
      $errorCode = 3;
    }
  }

  function generateRecoveryMail($conn,$email)
  {

    $BASE_URI = "http://bmscephaseshift.com/recoverAccount.php/";

    $to = $email;

    $stmt = $conn->prepare('UPDATE users SET Verification = :Verification WHERE Email = :Email');
    $accessString = getRandomString(40);
    $stmt->execute(array(
      'Verification'  =>  $accessString,
      'Email'         =>  $email
    ));

    $subject = "Password Recovery System";
    $txt = "Please find attached the link to recover your password. The given link
    is valid for one time usage. Have a nice time in PhaseShift 2016".$BASE_URI.$accessString;
    $headers = "From: admin@bmscephaseshift.com" . "\r\n" ;
    mail($to,$subject,$txt,$headers);
  }
  function getRandomString($length)
  {
    $validCharacters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randomString="";
    for ($i=0; $i < $length; $i++) {
      $randomString = $randomString.$validCharacters[rand(0,61)];
    }
    return $randomString;
  }

  function emailDoesNotExist($con,$email)
  {


    $stmt = $con->prepare("SELECT * FROM users WHERE Email=:Email");
    $stmt->execute(array(
      'Email' => $email
    ));

    $row = $stmt->fetchAll();
    if (sizeof($row) == 0) {
      return true;
    }else{
      return false;
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Password Recovery System</title>
    <script src="./js/jquery.js" charset="utf-8"></script>
    <link rel="stylesheet" href="./css/materialize.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./css/common.css" media="screen" title="no title" charset="utf-8">
    <?php include 'links.php'; ?>

    <script type="text/javascript">
        $(document).ready(function(){
        $('.parallax').parallax();
        $('#nav-button').sideNav();
        $('.modal-trigger').leanModal();
        $('h2').css('font-weight','500');
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

              <span class="card-title title-font"> <p class="precard-font" ><b>PASSWORD RECOVERY SYSTEM</b></p> </span>
              <br>

              <form class="" action="#" method="post">


                <div class="row">
                  <div class="input-field col s12 m12 l6 push-l3">
                    <input type="email" id="email" name="email" class="validate">
                    <label for="email">ENTER YOUR E-MAIL</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12 m6 l6 push-l3 push-m5">
                    <button class="btn waves-effect waves-dark login-button" type="submit" name="retrieve">
                      RETRIEVE
                    </button>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12 m6 l6 push-l3 push-m5">
                    <?php

                      if ($errorCode ==1) {
                        echo "<p style='color:red;'>No email address given</p>";
                      }else if ($errorCode ==2) {
                        echo "<p style='color:red;'>Account with this email address does not exist</p>";
                      }elseif ($errorCode == 3) {
                        echo "<p style='color:green;'>Email was sent successfully</p>";
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


    <?php include 'modal.php'; ?>
    <?php include 'footer.php'; ?>
  </body>
</html>
