<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
  }



  function eventDiv($event)
  {

   $format = '<div class="col s12 m12 l4">
    <div class="card small sticky-action event-card">
      <div class="card-content">
        <div class="activator grey-text text-darken-4 row">
          <div class="col l10 m10 s10">
            <span class="event-head">'.$event[1].'</span>
          </div>
          <div class="event-info">
            <i class="fa fa-info right event-info-icon" aria-hidden="true"></i>
          </div>

        </div>
        <div class="row">
          <div class="col l12 m12 s12">
              <br>
              <span class="event-desc">REGISTRATION FEE:</span> <i class="fa fa-inr" aria-hidden="true"></i> '.$event[2].'<br>
              <span class="event-desc">EVENT COORDINATOR:</span> '.$event[5].'<br>
              <span class="event-desc">CONTACT:</span> '.$event[6].'<br>
              <span class="event-desc">VENUE:</span> '.$event[8].'<br>
              <span class="event-desc">DATE:</span> '.$event[9].'
          </div>
        </div>
      </div>
      <div class="card-action card-grad">';

      $format.='</div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">RULES:<i class="fa fa-times right event-info-icon" aria-hidden="true"></i></span>
        <p>'.$event[7].'</p>';
        if ($event[3] != 'Nil') {
          $format .= '<span class="event-desc">FIRST PLACE:</span> <i class="fa fa-inr" aria-hidden="true"></i> '.$event[2].'<br>';
        }
        if ($event[4] != 'Nil') {
          $format .=  '<span class="event-desc">SECOND PLACE:</span> <i class="fa fa-inr" aria-hidden="true"></i> '.$event[3].'<br>';
        }
        $format .= '</div></div></div>';

        return $format;
  }

  function userDetails()
  {

   $format = '<table class="striped bordered">
     <tbody>
       <tr>
         <td><strong> USERNAME </strong></td>
         <td class="account-table">'.$_SESSION['username'].' </td>
       </tr>
       <tr>
         <td><strong> E-MAIL </strong></td>
         <td class="account-table"> '.$_SESSION['email'].'</td>
       </tr>
       <tr>
         <td><strong> COLLEGE </strong></td>
         <td class="account-table"> '.$_SESSION['college'].'</td>
       </tr>
     </tbody>
   </table><br>';
   return $format;
  }

 ?>
<!DOCTYPE html>
<html>
  <head>
    <script src="./js/jquery.js" charset="utf-8"></script>
    <script src="./js/materialize.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="./css/materialize.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./css/common.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <meta charset="utf-8">
    <title>MY ACCOUNT</title>
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

    <div class="wifi-design">

    </div>

    <?php include 'modal.php'; ?>

    <div class="container pre-container">

      <div class="row">
        <div class="col s12 m12 l12">
          <div class="card  darken-1" style="margin-top: 5%;">
            <div class="card-content card-font">
              <span class="card-title title-font">
                <p class="precard-font" ><b>MY ACCOUNT</b></p> </span>
              <br>
              <?php
                    echo userDetails();
               ?>
               <span><a href="logout.php" class="btn logout-btn right">LOGOUT</a></span><br>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="container pre-container">

      <div class="row">
        <div class="col s12 m12 l12">
          <div class="card  darken-1">
            <div class="card-content card-font">
              <span class="card-title title-font">
                <p class="precard-font" ><b>REGISTERED EVENTS AND WORKSHOPS</b></p> </span>
            </div>
          </div>
        </div>
      </div>

    </div>


    <div class="container pre-container">
      <div class="row row-cards">

        <?php

            $conn = new PDO("mysql:host=localhost;dbname=ps2016","bmscehosting","webAdminps2016");
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $userEventsList=array();
            $userEvents = $conn->prepare('SELECT EventID FROM Registrations WHERE UserID = :UserID');
            $userEvents->execute(array(
              'UserID'  =>  $_SESSION['id']
            ));
            $returnList = $userEvents->fetchAll();
            foreach ($returnList as $item ) {
              array_push($userEventsList,$item[0]);
            }

            $userEventsList = array_values($userEventsList);

            $stmt = $conn->prepare('SELECT * FROM events WHERE ID=:ID');

            foreach ($userEventsList as $list) {
              $stmt->execute(array(
                'ID' => $list
              ));

              echo eventDiv($stmt->fetch());
            }


         ?>
       </div>
    </div>


    <?php include 'modal.php'; ?>
    <?php include 'footer.php'; ?>
  </body>

</html>
