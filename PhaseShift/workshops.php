<?php


  session_start();


function eventDiv($event,$userEventsList)
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
            <span class="event-desc">DEPARTMENT:</span> '.$event[11].'<br>
            <span class="event-desc">EVENT COORDINATOR:</span> '.$event[5].'<br>
            <span class="event-desc">CONTACT:</span> '.$event[6].'<br>
            <span class="event-desc">VENUE:</span> '.$event[8].'<br>
            <span class="event-desc">DATE:</span> '.$event[9].'
        </div>
      </div>
    </div>
    <div class="card-action card-grad">';
    // if (!in_array($event[0],$userEventsList) && isset($_SESSION['id'])) {
    //   $format .= '<a href="registerEvent.php?id='.$event[0].'" class="register-link">REGISTER</a>';
    // }else if(!isset($_SESSION['id'])){
    //   $format .= '<a class="register-link tooltipped" data-position="bottom" data-delay="50" data-tooltip="Login to register">REGISTER</a>';
    // }


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
 ?>
<!DOCTYPE html>
<html>
  <head>
    <script src="./js/jquery.js"></script>
    <meta charset="utf-8">
    <title>Workshops</title>

    <?php include 'links.php'; ?>

    <link rel="stylesheet" href="./css/materialize.min.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">

    <script type="text/javascript">
        $(document).ready(function(){
        $('.parallax').parallax();
        $('#nav-button').sideNav();
        $('.modal-trigger').leanModal();
        $('body').css('background-color','floralwhite');
      });
    </script>
  </head>
  <body>

    <?php include 'header.php'; ?>

    <div class="wifi-design">
    </div>

    <?php include 'modal.php'; ?>

    <div class="container pre-container">
      <div class="row row-cards">

        <?php

            $conn = new PDO("mysql:host=localhost;dbname=ps2016","bmscehosting","webAdminps2016");
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare('SELECT * FROM events WHERE Type = :Type ORDER BY id');

            $stmt->execute(array(
              'Type'   =>   'Seminar and Competition'
            ));
            $row = $stmt->fetchAll();

            $userEventsList=array();
            if(isset($_SESSION['id'])){
              $userEvents = $conn->prepare('SELECT EventID FROM Registrations WHERE UserID = :UserID');
              $userEvents->execute(array(
                'UserID'  =>  $_SESSION['id']
              ));
              $returnList = $userEvents->fetchAll();
              foreach ($returnList as $item ) {
                array_push($userEventsList,$item[0]);
              }
            }
            $userEventsList = array_values($userEventsList);
            foreach ($row as $event) {
              echo eventDiv($event,$userEventsList);
            }
            $stmt->execute(array(
              'Type'   =>   'Workshop'
            ));
            $row = $stmt->fetchAll();

            $userEventsList=array();
            if(isset($_SESSION['id'])){
              $userEvents = $conn->prepare('SELECT EventID FROM Registrations WHERE UserID = :UserID');
              $userEvents->execute(array(
                'UserID'  =>  $_SESSION['id']
              ));
              $returnList = $userEvents->fetchAll();
              foreach ($returnList as $item ) {
                array_push($userEventsList,$item[0]);
              }
            }
            $userEventsList = array_values($userEventsList);
            foreach ($row as $event) {
              echo eventDiv($event,$userEventsList);
            }
            $stmt->execute(array(
              'Type'   =>   'Seminar'
            ));
            $row = $stmt->fetchAll();

            $userEventsList=array();
            if(isset($_SESSION['id'])){
              $userEvents = $conn->prepare('SELECT EventID FROM Registrations WHERE UserID = :UserID');
              $userEvents->execute(array(
                'UserID'  =>  $_SESSION['id']
              ));
              $returnList = $userEvents->fetchAll();
              foreach ($returnList as $item ) {
                array_push($userEventsList,$item[0]);
              }
            }
            $userEventsList = array_values($userEventsList);
            foreach ($row as $event) {
              echo eventDiv($event,$userEventsList);
            }

         ?>
       </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
