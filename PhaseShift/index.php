<!DOCTYPE html>
<html>
  <head>
    <script src="./js/jquery.js"></script>
    <meta charset="utf-8">

    <?php include 'links.php'; ?>

    <title>ADT PhaseShift 2016</title>
    <!-- <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

    <link rel="stylesheet" href="./css/materialize.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./css/index.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="./css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>

    <nav class ="grad">
      <div class="nav-wrapper nav-container">

        <a href="#" data-activates="mobile-demo" class="show-on-large button-collapse"><img class="hamburger-icon" src="./svgs/ic_menu_black_24px.svg" alt="" width="48px"/></a>
        <ul class="side-nav side-nav-custom" id="mobile-demo">
          <img src="./svgs/wifi_design.svg" alt="" class="responsive-img"/>
          <li><a href="about_us.php"><i class="fa fa-2x fa-info-circle fa-knsi-custom" aria-hidden="true" style=""></i>About</a></li>
          <li><a href="pre_events.php"><i class="fa fa-2x fa-list fa-knsi-custom" aria-hidden="true" style=""></i>Pre-Fest Events</a></li>
          <li><a href="events.php"><i class="fa fa-2x fa-calendar-o fa-knsi-custom" aria-hidden="true" style=""></i>Events</a></li>
          <li><a href="workshops.php"><i class="fa fa-newspaper-o fa-2x fa-knsi-custom" aria-hidden="true"></i>Seminars and Workshops</a></li>
          <li><a href="schedule.php"><i class="fa fa-calendar fa-2x fa-knsi-custom" aria-hidden="true"></i>Schedule</a></li>
          <li><a href="sponsors.php"><i class="fa fa-users fa-2x fa-knsi-custom" aria-hidden="true"></i>Sponsors</a></li>
          <li><a href="gallery.php"><i class="fa fa-picture-o fa-2x fa-knsi-custom" aria-hidden="true"></i>Gallery</a></li>
          <?php
            if (isset($_SESSION['username'])) {
              echo '<li><a href="myAccount.php"><i class="fa fa-user fa-2x fa-knsi-custom" aria-hidden="true"></i>My Account</a></li>';
            }else{
              echo '<li><a href="login.php"><i class="fa fa-2x fa-sign-in fa-knsi-custom" aria-hidden="true"></i>Login</a></li>';
            }
           ?>
        </ul>
      </div>
    </nav>

    <a href="#" data-activates="mobile-demo" class="show-on-large button-collapse"><div class="upper-img"></div></a>


      <!--  the bottom is for the desktop-->

      <svg class="desktop" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      	 viewBox="0 0 120.9 77.8" enable-background="new 0 0 120.9 77.8" xml:space="preserve">
      <g id="Rectangle_3_1_" enable-background="new    ">
      	<g id="Rectangle_3">
      		<g>
      			<polygon fill="#C6C6CD" points="68.8,73.9 52,73.9 52,76.6 68.8,76.6 68.8,73.9 			"/>
      		</g>
      	</g>
      </g>
      <g id="Rectangle_4_1_" enable-background="new    ">
      	<g id="Rectangle_4">
      		<g>
      			<rect x="43.8" y="75.6" fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" width="33.2" height="1.7"/>
      		</g>
      		<g>
      			<path fill="#A6A6AA" d="M76.6,76v0.9H44.2V76H76.6 M77.4,75.2H43.3v2.6h34.1V75.2L77.4,75.2z"/>
      		</g>
      	</g>
      </g>
      <g id="Rounded_Rectangle_2_1_" enable-background="new    ">
      	<g id="Rounded_Rectangle_2">
      		<g>
      			<path fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M2.4,73.5c-0.9,0-1.7-1.1-1.7-2.4v-4c0-1.3,0.8-2.4,1.7-2.4
      				h116.1c0.9,0,1.7,1.1,1.7,2.4v4c0,1.3-0.8,2.4-1.7,2.4H2.4z"/>
      		</g>
      		<g>
      			<path fill="#A6A6AA" d="M118.5,65.4c0.5,0,1.1,0.7,1.1,1.7v4c0,1-0.6,1.7-1.1,1.7H2.4c-0.5,0-1.1-0.7-1.1-1.7v-4
      				c0-1,0.6-1.7,1.1-1.7H118.5 M118.5,64.1H2.4c-1.3,0-2.4,1.4-2.4,3.1v4c0,1.7,1.1,3.1,2.4,3.1h116.1c1.3,0,2.4-1.4,2.4-3.1v-4
      				C120.9,65.4,119.9,64.1,118.5,64.1L118.5,64.1z"/>
      		</g>
      	</g>
      </g>
      <g id="Rectangle_1_copy_1_" enable-background="new    ">
      	<g id="Rectangle_1_copy">
      		<g>
      			<rect x="3.7" y="3.8" fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" width="113.4" height="61.1"/>
      		</g>
      		<g>
      			<path fill="#A6A6AA" d="M115.8,5.1v58.5H5V5.1H115.8 M118.4,2.5H2.4v63.7h115.9V2.5L118.4,2.5z"/>
      		</g>
      	</g>
      </g>
      <g id="Rounded_Rectangle_1_1_" enable-background="new    ">
      	<g id="Rounded_Rectangle_1">
      		<g>
      			<path fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M2.4,68c-1,0-1.7-0.8-1.7-1.7V2.4c0-1,0.8-1.7,1.7-1.7h116
      				c1,0,1.7,0.8,1.7,1.7v63.8c0,1-0.8,1.7-1.7,1.7H2.4z"/>
      		</g>
      		<g>
      			<path fill="#A6A6AA" d="M118.4,1.4c0.6,0,1.1,0.5,1.1,1.1v63.8c0,0.6-0.5,1.1-1.1,1.1H2.4c-0.6,0-1.1-0.5-1.1-1.1V2.4
      				c0-0.6,0.5-1.1,1.1-1.1H118.4 M118.4,0H2.4C1.1,0,0,1.1,0,2.4v63.8c0,1.3,1.1,2.4,2.4,2.4h116c1.3,0,2.4-1.1,2.4-2.4V2.4
      				C120.9,1.1,119.8,0,118.4,0L118.4,0z"/>
      		</g>
      	</g>
      </g>
      <g id="Rounded_Rectangle_3_1_" enable-background="new    ">
      	<g id="Rounded_Rectangle_3">
      		<g>
      			<path class="desktop_animate" fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M7.7,62.8c-1,0-1.7-0.8-1.7-1.7V6.8c0-1,0.8-1.7,1.7-1.7h105.5
      				c1,0,1.7,0.8,1.7,1.7v54.3c0,1-0.8,1.7-1.7,1.7H7.7z"/>
      		</g>
      		<g>
      			<path fill="#A6A6AA" d="M113.1,5.7c0.6,0,1.1,0.5,1.1,1.1v54.3c0,0.6-0.5,1.1-1.1,1.1H7.7c-0.6,0-1.1-0.5-1.1-1.1V6.8
      				c0-0.6,0.5-1.1,1.1-1.1H113.1 M113.1,4.4H7.7c-1.3,0-2.4,1.1-2.4,2.4v54.3c0,1.3,1.1,2.4,2.4,2.4h105.5c1.3,0,2.4-1.1,2.4-2.4
      				V6.8C115.5,5.4,114.5,4.4,113.1,4.4L113.1,4.4z"/>
      		</g>
      	</g>
      </g>
      <g id="Rounded_Rectangle_3_copy_1_" display="none" enable-background="new    ">
      	<g id="Rounded_Rectangle_3_copy" display="inline">
      		<g>
      			<path fill-rule="evenodd" clip-rule="evenodd" fill="#D7D7D7" d="M7.7,62.8c-1,0-1.7-0.8-1.7-1.7V6.8c0-1,0.8-1.7,1.7-1.7h105.5
      				c1,0,1.7,0.8,1.7,1.7v54.3c0,1-0.8,1.7-1.7,1.7H7.7z"/>
      		</g>
      		<g>
      			<path fill="#A6A6AA" d="M113.1,5.7c0.6,0,1.1,0.5,1.1,1.1v54.3c0,0.6-0.5,1.1-1.1,1.1H7.7c-0.6,0-1.1-0.5-1.1-1.1V6.8
      				c0-0.6,0.5-1.1,1.1-1.1H113.1 M113.1,4.4H7.7c-1.3,0-2.4,1.1-2.4,2.4v54.3c0,1.3,1.1,2.4,2.4,2.4h105.5c1.3,0,2.4-1.1,2.4-2.4
      				V6.8C115.5,5.4,114.5,4.4,113.1,4.4L113.1,4.4z"/>
      		</g>
      	</g>
      </g>
      </svg>


      <!--  the bottom is for the android phone which looks like a moto g2-->

      <svg class = "android_phone" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      	 viewBox="0 0 71.2 124.5" enable-background="new 0 0 71.2 124.5" xml:space="preserve">
      <g id="Rounded_Rectangle_1_1_" enable-background="new    ">
      	<g id="Rounded_Rectangle_1">
      		<g>
      			<path fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M2,123.7c-0.6,0-1.2-0.8-1.2-1.7V2.5c0-0.9,0.5-1.7,1.2-1.7
      				h67.3c0.6,0,1.2,0.8,1.2,1.7V122c0,0.9-0.5,1.7-1.2,1.7H2z"/>
      		</g>
      		<g>
      			<path fill="#999A9F" d="M69.3,1.6c0.1,0,0.4,0.3,0.4,0.9V122c0,0.6-0.3,0.9-0.4,0.9l-67.3,0c-0.1,0-0.4-0.3-0.4-0.9V2.5
      				c0-0.6,0.3-0.9,0.4-0.9H69.3 M69.3,0H2C0.9,0,0,1.1,0,2.5V122c0,1.4,0.9,2.5,2,2.5h67.3c1.1,0,2-1.1,2-2.5V2.5
      				C71.2,1.1,70.4,0,69.3,0L69.3,0z"/>
      		</g>
      	</g>
      </g>
      <g id="Rounded_Rectangle_5_1_" display="none" enable-background="new    ">
      	<g id="Rounded_Rectangle_5" display="inline">
      		<g>
      			<path fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M7.9,113.9c-0.5,0-0.9-0.6-0.9-1.4V9.7C7,9,7.4,8.4,7.9,8.4
      				h55.5c0.5,0,0.9,0.6,0.9,1.4v102.8c0,0.7-0.4,1.4-0.9,1.4H7.9z"/>
      		</g>
      		<g>
      			<path fill="#999A9F" d="M63.3,9.2c0.1,0.1,0.2,0.3,0.2,0.6v102.8c0,0.3-0.1,0.5-0.2,0.6H8c-0.1-0.1-0.2-0.3-0.2-0.6V9.7
      				c0-0.3,0.1-0.5,0.2-0.6H63.3 M63.4,7.6H7.9c-0.9,0-1.7,1-1.7,2.2v102.8c0,1.2,0.8,2.2,1.7,2.2h55.5c0.9,0,1.7-1,1.7-2.2V9.7
      				C65.1,8.5,64.3,7.6,63.4,7.6L63.4,7.6z"/>
      		</g>
      	</g>
      </g>
      <g id="Rounded_Rectangle_5_copy_1_" enable-background="new    ">
      	<g id="Rounded_Rectangle_5_copy">
      		<g>
      			<path class="android_phone_animate" fill-rule="evenodd" clip-rule="evenodd" fill="#D7D7D7" d="M7.9,113.9c-0.5,0-0.9-0.6-0.9-1.4V9.7C7,9,7.4,8.4,7.9,8.4
      				h55.5c0.5,0,0.9,0.6,0.9,1.4v102.8c0,0.7-0.4,1.4-0.9,1.4H7.9z"/>
      		</g>
      		<g>
      			<path fill="#999A9F" d="M63.3,9.2c0.1,0.1,0.2,0.3,0.2,0.6v102.8c0,0.3-0.1,0.5-0.2,0.6H8c-0.1-0.1-0.2-0.3-0.2-0.6V9.7
      				c0-0.3,0.1-0.5,0.2-0.6H63.3 M63.4,7.6H7.9c-0.9,0-1.7,1-1.7,2.2v102.8c0,1.2,0.8,2.2,1.7,2.2h55.5c0.9,0,1.7-1,1.7-2.2V9.7
      				C65.1,8.5,64.3,7.6,63.4,7.6L63.4,7.6z"/>
      		</g>
      	</g>
      </g>
      <g id="Rounded_Rectangle_4_1_" enable-background="new    ">
      	<g id="Rounded_Rectangle_4">
      		<g>
      			<path fill="#999A9F" d="M41.1,3.7c0,0,0,0.1,0,0.1s0,0.1,0,0.1H29.6c0,0,0-0.1,0-0.1s0-0.1,0-0.1H41.1 M41.3,2.7H29.5
      				c-0.5,0-0.9,0.5-0.9,1.1c0,0.6,0.4,1.1,0.9,1.1h11.8c0.5,0,0.9-0.5,0.9-1.1C42.2,3.2,41.8,2.7,41.3,2.7L41.3,2.7z"/>
      		</g>
      	</g>
      </g>
      <g id="Rounded_Rectangle_4_copy_1_" enable-background="new    ">
      	<g id="Rounded_Rectangle_4_copy">
      		<g>
      			<path fill="#999A9F" d="M41.1,119.4c0,0,0,0.1,0,0.1s0,0.1,0,0.1H29.6c0,0,0-0.1,0-0.1s0-0.1,0-0.1H41.1 M41.3,118.4H29.5
      				c-0.5,0-0.9,0.5-0.9,1.1c0,0.6,0.4,1.1,0.9,1.1h11.8c0.5,0,0.9-0.5,0.9-1.1C42.2,118.9,41.8,118.4,41.3,118.4L41.3,118.4z"/>
      		</g>
      	</g>
      </g>
      </svg>

      <!--  the bottom is for the iphone -->

      <svg class="iphone" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      	 viewBox="0 0 71.2 124.5" enable-background="new 0 0 71.2 124.5" xml:space="preserve">
      <g id="Rounded_Rectangle_1_1_" enable-background="new    ">
      	<g id="Rounded_Rectangle_1">
      		<g>
      			<path fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M2,123.5c-0.5,0-1-0.6-1-1.5V2.5C1,1.6,1.5,1,2,1h67.3
      				c0.5,0,1,0.6,1,1.5V122c0,0.9-0.5,1.5-1,1.5H2z"/>
      		</g>
      		<g>
      			<path fill="#999A9F" d="M69.1,2c0.1,0.1,0.1,0.3,0.1,0.5V122c0,0.2-0.1,0.4-0.1,0.5h-67C2.1,122.4,2,122.3,2,122V2.5
      				C2,2.3,2.1,2.1,2.1,2H69.1 M69.3,0H2C0.9,0,0,1.1,0,2.5V122c0,1.4,0.9,2.5,2,2.5h67.3c1.1,0,2-1.1,2-2.5V2.5
      				C71.2,1.1,70.4,0,69.3,0L69.3,0z"/>
      		</g>
      	</g>
      </g>
      <g id="Rounded_Rectangle_5_1_" enable-background="new    ">
      	<g id="Rounded_Rectangle_5">
      		<g>
      			<path class="iphone_animate" fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M7.9,113.9c-0.5,0-0.9-0.6-0.9-1.4V9.7C7,9,7.4,8.4,7.9,8.4
      				h55.5c0.5,0,0.9,0.6,0.9,1.4v102.8c0,0.7-0.4,1.4-0.9,1.4H7.9z"/>
      		</g>
      		<g>
      			<path fill="#999A9F" d="M63.3,9.2c0.1,0.1,0.2,0.3,0.2,0.6v102.8c0,0.3-0.1,0.5-0.2,0.6H8c-0.1-0.1-0.2-0.3-0.2-0.6V9.7
      				c0-0.3,0.1-0.5,0.2-0.6H63.3 M63.4,7.6H7.9c-0.9,0-1.7,1-1.7,2.2v102.8c0,1.2,0.8,2.2,1.7,2.2h55.5c0.9,0,1.7-1,1.7-2.2V9.7
      				C65.1,8.5,64.3,7.6,63.4,7.6L63.4,7.6z"/>
      		</g>
      	</g>
      </g>
      <g id="Rounded_Rectangle_5_copy_1_" display="none" enable-background="new    ">
      	<g id="Rounded_Rectangle_5_copy" display="inline">
      		<g>
      			<path fill-rule="evenodd" clip-rule="evenodd" fill="#D7D7D7" d="M7.9,113.9c-0.5,0-0.9-0.6-0.9-1.4V9.7C7,9,7.4,8.4,7.9,8.4
      				h55.5c0.5,0,0.9,0.6,0.9,1.4v102.8c0,0.7-0.4,1.4-0.9,1.4H7.9z"/>
      		</g>
      		<g>
      			<path fill="#999A9F" d="M63.3,9.2c0.1,0.1,0.2,0.3,0.2,0.6v102.8c0,0.3-0.1,0.5-0.2,0.6H8c-0.1-0.1-0.2-0.3-0.2-0.6V9.7
      				c0-0.3,0.1-0.5,0.2-0.6H63.3 M63.4,7.6H7.9c-0.9,0-1.7,1-1.7,2.2v102.8c0,1.2,0.8,2.2,1.7,2.2h55.5c0.9,0,1.7-1,1.7-2.2V9.7
      				C65.1,8.5,64.3,7.6,63.4,7.6L63.4,7.6z"/>
      		</g>
      	</g>
      </g>
      <g id="Ellipse_1_1_" enable-background="new    ">
      	<g id="Ellipse_1">
      		<g>
      			<path fill="#999A9F" d="M35.6,117.3c0.8,0,1.4,0.7,1.4,1.5c0,0.8-0.6,1.5-1.4,1.5s-1.4-0.7-1.4-1.5
      				C34.3,118,34.9,117.3,35.6,117.3 M35.6,116.3c-1.3,0-2.4,1.1-2.4,2.5c0,1.4,1.1,2.5,2.4,2.5s2.4-1.1,2.4-2.5
      				C38,117.4,36.9,116.3,35.6,116.3L35.6,116.3z"/>
      		</g>
      	</g>
      </g>
      <g id="Rounded_Rectangle_4_1_" enable-background="new    ">
      	<g id="Rounded_Rectangle_4">
      		<g>
      			<path fill="#999A9F" d="M41.1,3.7c0,0,0,0.1,0,0.1s0,0.1,0,0.1H29.6c0,0,0-0.1,0-0.1s0-0.1,0-0.1H41.1 M41.3,2.7H29.5
      				c-0.5,0-0.9,0.5-0.9,1.1c0,0.6,0.4,1.1,0.9,1.1h11.8c0.5,0,0.9-0.5,0.9-1.1C42.2,3.2,41.8,2.7,41.3,2.7L41.3,2.7z"/>
      		</g>
      	</g>
      </g>
      </svg>

    <!--  the bottom is for the iwatch-->

    <svg class="iwatch" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 961 1780" enable-background="new 0 0 961 1780" xml:space="preserve">
    <g id="Edit_extra_stuff_1_">
      <g id="Gold_Frame_2_">
        <g id="other_1_">
          <g id="Gold_Frame">
            <g>
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M177.7,1431.6c-45,0-87.4-17.6-119.4-49.7
                c-32-32-49.7-74.4-49.7-119.4V516.8c0-44.9,17.6-87.3,49.7-119.4c32-32,74.4-49.7,119.4-49.7h587.7c45,0,87.4,17.6,119.4,49.7
                c32,32,49.7,74.4,49.7,119.4v745.7c0,44.9-17.6,87.3-49.7,119.4c-32,32-74.4,49.7-119.4,49.7H177.7z"/>
            </g>
            <g>
              <path fill="#A6A6AA" d="M765.4,355.8c21.6,0,42.7,4.3,62.5,12.7c19.2,8.1,36.4,19.8,51.3,34.6c14.8,14.8,26.5,32.1,34.6,51.2
                c8.4,19.8,12.7,40.8,12.7,62.5v745.7c0,21.6-4.3,42.6-12.7,62.5c-8.1,19.2-19.8,36.4-34.6,51.2c-14.8,14.8-32.1,26.5-51.3,34.6
                c-19.8,8.4-40.9,12.7-62.5,12.7H177.7c-21.6,0-42.7-4.3-62.5-12.7c-19.2-8.1-36.4-19.8-51.3-34.6
                c-14.8-14.8-26.5-32.1-34.6-51.2c-8.4-19.8-12.7-40.8-12.7-62.5V516.8c0-21.6,4.3-42.6,12.7-62.5c8.1-19.2,19.8-36.4,34.6-51.2
                c14.8-14.8,32.1-26.5,51.3-34.6c19.8-8.4,40.9-12.7,62.5-12.7H765.4 M765.4,339.8H177.7c-97.4,0-177.1,79.7-177.1,177v745.7
                c0,97.4,79.7,177,177.1,177h587.7c97.4,0,177.1-79.7,177.1-177V516.8C942.5,419.5,862.8,339.8,765.4,339.8L765.4,339.8z"/>
            </g>
          </g>
          <g id="Inner_Frame">
            <g>
              <path class="iwatch_animate" fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M175,1384.7c-32.9,0-63.9-12.9-87.3-36.3
                c-23.4-23.4-36.3-54.4-36.3-87.3V517.3c0-32.9,12.9-63.9,36.3-87.3c23.4-23.4,54.4-36.3,87.3-36.3h591.1
                c32.9,0,63.9,12.9,87.3,36.3c23.4,23.4,36.3,54.4,36.3,87.3v743.8c0,32.9-12.9,63.9-36.3,87.3c-23.4,23.4-54.4,36.3-87.3,36.3
                H175z"/>
            </g>
            <g>
              <path fill="#A6A6AA" d="M766.1,401.6c30.7,0,59.7,12.1,81.7,34c21.9,21.9,34,50.9,34,81.7v743.8c0,30.7-12.1,59.8-34,81.7
                c-21.9,21.9-50.9,34-81.7,34H175c-30.7,0-59.7-12.1-81.7-34c-21.9-21.9-34-50.9-34-81.7V517.3c0-30.7,12.1-59.8,34-81.7
                c21.9-21.9,50.9-34,81.7-34H766.1 M766.1,385.6H175c-72.4,0-131.6,59.2-131.6,131.7v743.8c0,72.4,59.2,131.7,131.6,131.7h591.1
                c72.4,0,131.6-59.2,131.6-131.7V517.3C897.7,444.9,838.5,385.6,766.1,385.6L766.1,385.6z"/>
            </g>
          </g>
          <g id="Inner_Frame_copy" display="none">
            <g display="inline">
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#D7D7D7" d="M175,1384.7c-32.9,0-63.9-12.9-87.3-36.3
                c-23.4-23.4-36.3-54.4-36.3-87.3V517.3c0-32.9,12.9-63.9,36.3-87.3c23.4-23.4,54.4-36.3,87.3-36.3h591.1
                c32.9,0,63.9,12.9,87.3,36.3c23.4,23.4,36.3,54.4,36.3,87.3v743.8c0,32.9-12.9,63.9-36.3,87.3c-23.4,23.4-54.4,36.3-87.3,36.3
                H175z"/>
            </g>
            <g display="inline">
              <path fill="#A6A6AA" d="M766.1,401.6c30.7,0,59.7,12.1,81.7,34c21.9,21.9,34,50.9,34,81.7v743.8c0,30.7-12.1,59.8-34,81.7
                c-21.9,21.9-50.9,34-81.7,34H175c-30.7,0-59.7-12.1-81.7-34c-21.9-21.9-34-50.9-34-81.7V517.3c0-30.7,12.1-59.8,34-81.7
                c21.9-21.9,50.9-34,81.7-34H766.1 M766.1,385.6H175c-72.4,0-131.6,59.2-131.6,131.7v743.8c0,72.4,59.2,131.7,131.6,131.7h591.1
                c72.4,0,131.6-59.2,131.6-131.7V517.3C897.7,444.9,838.5,385.6,766.1,385.6L766.1,385.6z"/>
            </g>
          </g>
          <g id="Rounded_Rectangle_1">
            <g>
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M950.7,758c-3.6,0-6.5-2.9-6.5-6.5V608.8
                c0-3.6,2.9-6.5,6.5-6.5s6.5,2.9,6.5,6.5v142.7C957.2,755.1,954.3,758,950.7,758z"/>
            </g>
            <g>
              <path fill="#A6A6AA" d="M950.7,605.7c1.7,0,3,1.4,3,3v142.7c0,1.7-1.4,3-3,3s-3-1.4-3-3V608.8
                C947.6,607.1,949,605.7,950.7,605.7 M950.7,598.7c-5.5,0-10,4.5-10,10v142.7c0,5.5,4.5,10,10,10c5.5,0,10-4.5,10-10V608.8
                C960.7,603.2,956.2,598.7,950.7,598.7L950.7,598.7z"/>
            </g>
          </g>
        </g>
      </g>
    </g>
    <g id="EDIT_THESE_1_">
      <g id="Watch_Band_EDIT_COLOR">
        <g>
          <path fill="#C6C6CD" d="M265.9,1771.7c-35,0-63.5-28.5-63.5-63.6v-0.3l-9.8-128.6c-2.6-34.5-10.1-68.5-22.2-100.9l-0.1-0.4
            l-17.2-34.8h639.9l-12.5,28.4c-16.6,37.7-26.6,77.6-29.9,118.6l-9.4,117.6v0.3c0,35-28.5,63.6-63.5,63.6H265.9z M150.3,337.2
            l12.5-28.4c16.6-37.7,26.6-77.6,29.9-118.6l9.4-117.6v-0.3c0-35,28.5-63.6,63.5-63.6h411.6c35,0,63.5,28.5,63.5,63.6v0.3
            l9.8,128.6c2.6,34.5,10.1,68.5,22.2,100.9l0.1,0.4l17.2,34.8H150.3z"/>
        </g>
        <g>
          <path fill="#A6A6AA" d="M677.3,16.7c30.6,0,55.5,24.9,55.5,55.6v0.6l0,0.6l9.8,128.3c2.7,35.3,10.3,70,22.7,103.1l0.3,0.8
            l0.4,0.7l11.3,22.8H162.6l7.5-17.2c16.9-38.5,27.2-79.3,30.6-121.2l9.4-117.3l0.1-0.6v-0.6c0-30.6,24.9-55.6,55.5-55.6H677.3
             M780.5,1451.2l-7.5,17.2c-16.9,38.5-27.2,79.3-30.6,121.2l-9.4,117.3l-0.1,0.6v0.6c0,30.6-24.9,55.6-55.5,55.6H265.9
            c-30.6,0-55.5-24.9-55.5-55.6v-0.6l0-0.6l-9.8-128.3c-2.7-35.3-10.3-70-22.7-103.1l-0.3-0.8l-0.4-0.7l-11.3-22.8H780.5
             M677.3,0.7H265.7c-39.5,0-71.5,32-71.5,71.6l-9.4,117.3c-3.2,40-13.1,79.3-29.3,116.1l-17.4,39.6h665l-22.8-45.9
            c-11.9-31.7-19.2-64.9-21.7-98.7l-9.8-128.3C748.8,32.8,716.8,0.7,677.3,0.7L677.3,0.7z M805.1,1435.2H140l22.8,45.9
            c11.9,31.7,19.2,64.9,21.7,98.7l9.8,128.3c0,39.5,32,71.6,71.5,71.6h411.6c39.5,0,71.5-32,71.5-71.6l9.4-117.3
            c3.2-40,13.1-79.3,29.3-116.1L805.1,1435.2L805.1,1435.2z"/>
        </g>
      </g>
    </g>
    </svg>

    <!--  bottom is for the tablet-->
    <svg class="tablet" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    	 viewBox="0 0 118.7 163.3" enable-background="new 0 0 118.7 163.3" xml:space="preserve">
    <g id="Rounded_Rectangle_1_1_" enable-background="new    ">
    	<g id="Rounded_Rectangle_1">
    		<g>
    			<path fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M3.3,162.5c-1.4,0-2.5-1.1-2.5-2.5V3.3c0-1.4,1.1-2.5,2.5-2.5
    				h112.1c1.4,0,2.5,1.1,2.5,2.5V160c0,1.4-1.1,2.5-2.5,2.5H3.3z"/>
    		</g>
    		<g>
    			<path fill="#999A9F" d="M115.4,1.6c0.9,0,1.7,0.8,1.7,1.7V160c0,0.9-0.8,1.7-1.7,1.7H3.3c-0.9,0-1.7-0.8-1.7-1.7V3.3
    				c0-0.9,0.8-1.7,1.7-1.7H115.4 M115.4,0H3.3C1.5,0,0,1.5,0,3.3V160c0,1.8,1.5,3.3,3.3,3.3h112.1c1.8,0,3.3-1.5,3.3-3.3V3.3
    				C118.7,1.5,117.2,0,115.4,0L115.4,0z"/>
    		</g>
    	</g>
    </g>
    <g id="Rounded_Rectangle_5_1_" enable-background="new    ">
    	<g id="Rounded_Rectangle_5">
    		<g>
    			<path class="tablet_animate" fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M13.1,149.5c-1.1,0-2-0.9-2-2V12.8c0-1.1,0.9-2,2-2h92.4
    				c1.1,0,2,0.9,2,2v134.7c0,1.1-0.9,2-2,2H13.1z"/>
    		</g>
    		<g>
    			<path fill="#999A9F" d="M105.5,11.5c0.7,0,1.2,0.6,1.2,1.2v134.7c0,0.7-0.6,1.2-1.2,1.2H13.1c-0.7,0-1.2-0.6-1.2-1.2V12.8
    				c0-0.7,0.6-1.2,1.2-1.2H105.5 M105.5,9.9H13.1c-1.6,0-2.8,1.3-2.8,2.8v134.7c0,1.6,1.3,2.8,2.8,2.8h92.4c1.6,0,2.8-1.3,2.8-2.8
    				V12.8C108.4,11.2,107.1,9.9,105.5,9.9L105.5,9.9z"/>
    		</g>
    	</g>
    </g>
    <g id="Rounded_Rectangle_5_copy_1_" display="none" enable-background="new    ">
    	<g id="Rounded_Rectangle_5_copy" display="inline">
    		<g>
    			<path fill-rule="evenodd" clip-rule="evenodd" fill="#D7D7D7" d="M13.1,149.5c-1.1,0-2-0.9-2-2V12.8c0-1.1,0.9-2,2-2h92.4
    				c1.1,0,2,0.9,2,2v134.7c0,1.1-0.9,2-2,2H13.1z"/>
    		</g>
    		<g>
    			<path fill="#999A9F" d="M105.5,11.5c0.7,0,1.2,0.6,1.2,1.2v134.7c0,0.7-0.6,1.2-1.2,1.2H13.1c-0.7,0-1.2-0.6-1.2-1.2V12.8
    				c0-0.7,0.6-1.2,1.2-1.2H105.5 M105.5,9.9H13.1c-1.6,0-2.8,1.3-2.8,2.8v134.7c0,1.6,1.3,2.8,2.8,2.8h92.4c1.6,0,2.8-1.3,2.8-2.8
    				V12.8C108.4,11.2,107.1,9.9,105.5,9.9L105.5,9.9z"/>
    		</g>
    	</g>
    </g>
    <g id="Ellipse_1_1_" enable-background="new    ">
    	<g id="Ellipse_1">
    		<g>
    			<path fill="#999A9F" d="M59.3,153.5c1.6,0,2.9,1.3,2.9,2.9s-1.3,2.9-2.9,2.9s-2.9-1.3-2.9-2.9S57.7,153.5,59.3,153.5 M59.3,152.5
    				c-2.2,0-3.9,1.8-3.9,3.9s1.8,3.9,3.9,3.9s3.9-1.8,3.9-3.9S61.5,152.5,59.3,152.5L59.3,152.5z"/>
    		</g>
    	</g>
    </g>
    <g id="Rounded_Rectangle_4_1_" enable-background="new    ">
    	<g id="Rounded_Rectangle_4">
    		<g>
    			<path fill="#999A9F" d="M68.8,4.5c0.2,0,0.4,0.2,0.4,0.4S69,5.4,68.8,5.4H49.1c-0.2,0-0.4-0.2-0.4-0.4s0.2-0.4,0.4-0.4H68.8
    				 M68.8,3.5H49.1c-0.8,0-1.4,0.6-1.4,1.4s0.6,1.4,1.4,1.4h19.7c0.8,0,1.4-0.6,1.4-1.4S69.6,3.5,68.8,3.5L68.8,3.5z"/>
    		</g>
    	</g>
    </g>
    </svg>


    <!--  bottom is for the android watch -->

    <svg class="android_watch" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    	 viewBox="0 0 48.4 82.8" enable-background="new 0 0 48.4 82.8" xml:space="preserve">
    <g id="Rounded_Rectangle_1_1_" enable-background="new    ">
    	<g id="Rounded_Rectangle_1">
    		<g>
    			<path fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M14.9,27.8c-1.4,0-2-0.6-2-0.7V1.5c0-0.1,0.7-0.7,2-0.7h18.5
    				c1.4,0,2,0.6,2,0.7v25.6c0,0.1-0.7,0.7-2,0.7H14.9z"/>
    		</g>
    		<g>
    			<path fill="#A6A6AA" d="M33.4,1.6c0.6,0,1,0.1,1.2,0.2v24.9C34.5,26.9,34,27,33.4,27H14.9c-0.6,0-1-0.1-1.2-0.2V1.8
    				c0.2-0.1,0.6-0.2,1.2-0.2H33.4 M33.4,0H14.9c-1.6,0-2.8,0.7-2.8,1.5v25.6c0,0.8,1.3,1.5,2.8,1.5h18.5c1.6,0,2.8-0.7,2.8-1.5V1.5
    				C36.3,0.7,35,0,33.4,0L33.4,0z"/>
    		</g>
    	</g>
    </g>
    <g id="Rounded_Rectangle_1_copy_1_" enable-background="new    ">
    	<g id="Rounded_Rectangle_1_copy">
    		<g>
    			<path fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M14.9,82c-1.4,0-2-0.6-2-0.7V55.7c0-0.1,0.7-0.7,2-0.7h18.5
    				c1.4,0,2,0.6,2,0.7v25.6c0,0.1-0.7,0.7-2,0.7H14.9z"/>
    		</g>
    		<g>
    			<path fill="#A6A6AA" d="M33.4,55.8c0.6,0,1,0.1,1.2,0.2v24.9c-0.2,0.1-0.6,0.2-1.2,0.2H14.9c-0.6,0-1-0.1-1.2-0.2V56
    				c0.2-0.1,0.6-0.2,1.2-0.2H33.4 M33.4,54.2H14.9c-1.6,0-2.8,0.7-2.8,1.5v25.6c0,0.8,1.3,1.5,2.8,1.5h18.5c1.6,0,2.8-0.7,2.8-1.5
    				V55.7C36.3,54.9,35,54.2,33.4,54.2L33.4,54.2z"/>
    		</g>
    	</g>
    </g>
    <g id="Ellipse_1_1_" enable-background="new    ">
    	<g id="Ellipse_1">
    		<g>
    			<path fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M24.2,64.8c-12.9,0-23.4-10.5-23.4-23.4
    				C0.8,28.5,11.3,18,24.2,18c12.9,0,23.4,10.5,23.4,23.4C47.6,54.3,37.1,64.8,24.2,64.8z"/>
    		</g>
    		<g>
    			<path fill="#A6A6AA" d="M24.2,18.8c12.5,0,22.6,10.1,22.6,22.6S36.6,64,24.2,64S1.6,53.8,1.6,41.4S11.7,18.8,24.2,18.8
    				 M24.2,17.2C10.8,17.2,0,28,0,41.4s10.8,24.2,24.2,24.2s24.2-10.8,24.2-24.2S37.5,17.2,24.2,17.2L24.2,17.2z"/>
    		</g>
    	</g>
    </g>
    <g id="Ellipse_2_1_" display="none" enable-background="new    ">
    	<g id="Ellipse_2" display="inline">
    		<g>
    			<circle fill-rule="evenodd" clip-rule="evenodd" fill="#D7D7D7" cx="24.2" cy="41.4" r="19.6"/>
    		</g>
    	</g>
    </g>
    <g id="Ellipse_2_copy_1_" enable-background="new    ">
    	<g id="Ellipse_2_copy">
    		<g>
    			<circle class="android_watch_animate" fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" cx="24.2" cy="41.4" r="19.6"/>
    		</g>
    	</g>
    </g>
    <g id="Rounded_Rectangle_2_1_" enable-background="new    ">
    	<g id="Rounded_Rectangle_2">
    		<g>
    			<path fill-rule="evenodd" clip-rule="evenodd" fill="#A6A6AA" d="M46.1,52c-0.6-0.4-1.4-0.2-1.8,0.4L42.1,56
    				c-0.4,0.6-0.2,1.4,0.4,1.8s1.4,0.2,1.8-0.4l2.2-3.5C46.9,53.2,46.7,52.4,46.1,52z"/>
    		</g>
    	</g>
    </g>
    <g id="Rounded_Rectangle_2_copy_1_" enable-background="new    ">
    	<g id="Rounded_Rectangle_2_copy">
    		<g>
    			<path fill-rule="evenodd" clip-rule="evenodd" fill="#A6A6AA" d="M45.1,26.3l-2.7-3.2c-0.5-0.6-1.3-0.6-1.9-0.1
    				c-0.6,0.5-0.6,1.3-0.1,1.9l2.7,3.2c0.5,0.6,1.3,0.6,1.9,0.1C45.5,27.7,45.5,26.9,45.1,26.3z"/>
    		</g>
    	</g>
    </g>
    </svg>


    <!--  this is a repeat of the first android_phone-->

    <svg class = "android_phone2" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 71.2 124.5" enable-background="new 0 0 71.2 124.5" xml:space="preserve">
    <g id="Rounded_Rectangle_1_1_" enable-background="new    ">
      <g id="Rounded_Rectangle_1">
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M2,123.7c-0.6,0-1.2-0.8-1.2-1.7V2.5c0-0.9,0.5-1.7,1.2-1.7
            h67.3c0.6,0,1.2,0.8,1.2,1.7V122c0,0.9-0.5,1.7-1.2,1.7H2z"/>
        </g>
        <g>
          <path fill="#999A9F" d="M69.3,1.6c0.1,0,0.4,0.3,0.4,0.9V122c0,0.6-0.3,0.9-0.4,0.9l-67.3,0c-0.1,0-0.4-0.3-0.4-0.9V2.5
            c0-0.6,0.3-0.9,0.4-0.9H69.3 M69.3,0H2C0.9,0,0,1.1,0,2.5V122c0,1.4,0.9,2.5,2,2.5h67.3c1.1,0,2-1.1,2-2.5V2.5
            C71.2,1.1,70.4,0,69.3,0L69.3,0z"/>
        </g>
      </g>
    </g>
    <g id="Rounded_Rectangle_5_1_" display="none" enable-background="new    ">
      <g id="Rounded_Rectangle_5" display="inline">
        <g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M7.9,113.9c-0.5,0-0.9-0.6-0.9-1.4V9.7C7,9,7.4,8.4,7.9,8.4
            h55.5c0.5,0,0.9,0.6,0.9,1.4v102.8c0,0.7-0.4,1.4-0.9,1.4H7.9z"/>
        </g>
        <g>
          <path fill="#999A9F" d="M63.3,9.2c0.1,0.1,0.2,0.3,0.2,0.6v102.8c0,0.3-0.1,0.5-0.2,0.6H8c-0.1-0.1-0.2-0.3-0.2-0.6V9.7
            c0-0.3,0.1-0.5,0.2-0.6H63.3 M63.4,7.6H7.9c-0.9,0-1.7,1-1.7,2.2v102.8c0,1.2,0.8,2.2,1.7,2.2h55.5c0.9,0,1.7-1,1.7-2.2V9.7
            C65.1,8.5,64.3,7.6,63.4,7.6L63.4,7.6z"/>
        </g>
      </g>
    </g>
    <g id="Rounded_Rectangle_5_copy_1_" enable-background="new    ">
      <g id="Rounded_Rectangle_5_copy">
        <g>
          <path class="android_phone_animate" fill-rule="evenodd" clip-rule="evenodd" fill="#D7D7D7" d="M7.9,113.9c-0.5,0-0.9-0.6-0.9-1.4V9.7C7,9,7.4,8.4,7.9,8.4
            h55.5c0.5,0,0.9,0.6,0.9,1.4v102.8c0,0.7-0.4,1.4-0.9,1.4H7.9z"/>
        </g>
        <g>
          <path fill="#999A9F" d="M63.3,9.2c0.1,0.1,0.2,0.3,0.2,0.6v102.8c0,0.3-0.1,0.5-0.2,0.6H8c-0.1-0.1-0.2-0.3-0.2-0.6V9.7
            c0-0.3,0.1-0.5,0.2-0.6H63.3 M63.4,7.6H7.9c-0.9,0-1.7,1-1.7,2.2v102.8c0,1.2,0.8,2.2,1.7,2.2h55.5c0.9,0,1.7-1,1.7-2.2V9.7
            C65.1,8.5,64.3,7.6,63.4,7.6L63.4,7.6z"/>
        </g>
      </g>
    </g>
    <g id="Rounded_Rectangle_4_1_" enable-background="new    ">
      <g id="Rounded_Rectangle_4">
        <g>
          <path fill="#999A9F" d="M41.1,3.7c0,0,0,0.1,0,0.1s0,0.1,0,0.1H29.6c0,0,0-0.1,0-0.1s0-0.1,0-0.1H41.1 M41.3,2.7H29.5
            c-0.5,0-0.9,0.5-0.9,1.1c0,0.6,0.4,1.1,0.9,1.1h11.8c0.5,0,0.9-0.5,0.9-1.1C42.2,3.2,41.8,2.7,41.3,2.7L41.3,2.7z"/>
        </g>
      </g>
    </g>
    <g id="Rounded_Rectangle_4_copy_1_" enable-background="new    ">
      <g id="Rounded_Rectangle_4_copy">
        <g>
          <path fill="#999A9F" d="M41.1,119.4c0,0,0,0.1,0,0.1s0,0.1,0,0.1H29.6c0,0,0-0.1,0-0.1s0-0.1,0-0.1H41.1 M41.3,118.4H29.5
            c-0.5,0-0.9,0.5-0.9,1.1c0,0.6,0.4,1.1,0.9,1.1h11.8c0.5,0,0.9-0.5,0.9-1.1C42.2,118.9,41.8,118.4,41.3,118.4L41.3,118.4z"/>
        </g>
      </g>
    </g>
    </svg>

    <!-- this is for the htc one -->

    <svg class="android_one android_phone" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    	 viewBox="0 0 71.2 124.5" enable-background="new 0 0 71.2 124.5" xml:space="preserve">
    <g id="Rounded_Rectangle_6_1_" enable-background="new    ">
    	<g id="Rounded_Rectangle_6">
    		<g>
    			<path fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M12.3,123.6c-6.3,0-11.5-4.7-11.5-10.5V11.5
    				C0.8,5.7,5.9,1,12.3,1H59c6.3,0,11.5,4.7,11.5,10.5v101.6c0,5.8-5.1,10.5-11.5,10.5H12.3z"/>
    		</g>
    		<g>
    			<path fill="#999A9F" d="M59,1.8c5.9,0,10.7,4.4,10.7,9.7v101.6c0,5.4-4.8,9.7-10.7,9.7H12.3c-5.9,0-10.7-4.4-10.7-9.7V11.5
    				c0-5.4,4.8-9.7,10.7-9.7H59 M59,0.2H12.3C5.5,0.2,0,5.3,0,11.5v101.6c0,6.3,5.5,11.3,12.3,11.3H59c6.8,0,12.3-5.1,12.3-11.3V11.5
    				C71.2,5.3,65.8,0.2,59,0.2L59,0.2z"/>
    		</g>
    	</g>
    </g>
    <g id="Ellipse_3_1_" enable-background="new    ">
    	<g id="Ellipse_3">
    		<g>
    			<circle fill-rule="evenodd" clip-rule="evenodd" fill="#999A9F" cx="11.9" cy="8.5" r="1.8"/>
    		</g>
    	</g>
    </g>
    <g id="Rectangle_1_1_" enable-background="new    ">
    	<g id="Rectangle_1">
    		<g>
    			<rect x="0.8" y="14" fill="#C6C6CD" width="69.6" height="97.4"/>
    		</g>
    		<g>
    			<path fill="#999A9F" d="M69.6,14.8v95.8h-68V14.8H69.6 M71.2,13.2H0v99h71.2V13.2L71.2,13.2z"/>
    		</g>
    	</g>
    </g>
    <g id="Rectangle_2_1_" enable-background="new    ">
    	<g id="Rectangle_2">
    		<g>
    			<rect class="android_one_animate" x="3.4" y="17.5" fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" width="64.5" height="90.3"/>
    		</g>
    		<g>
    			<path fill="#999A9F" d="M67.5,17.9v89.6H3.7V17.9H67.5 M68.2,17.2H3v91h65.2V17.2L68.2,17.2z"/>
    		</g>
    	</g>
    </g>
    <g id="Rounded_Rectangle_7_1_" enable-background="new    ">
    	<g id="Rounded_Rectangle_7">
    		<g>
    			<path fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M20.4,8.6c-0.2,0-0.3-0.1-0.3-0.3S20.2,8,20.4,8h30.4
    				c0.2,0,0.3,0.1,0.3,0.3S51,8.6,50.8,8.6H20.4z"/>
    		</g>
    		<g>
    			<path fill="#999A9F" d="M50.8,7.4H20.4c-0.5,0-0.9,0.4-0.9,0.9s0.4,0.9,0.9,0.9h30.4c0.5,0,0.9-0.4,0.9-0.9S51.3,7.4,50.8,7.4
    				L50.8,7.4z"/>
    		</g>
    	</g>
    </g>
    <g id="Rounded_Rectangle_7_copy_1_" enable-background="new    ">
    	<g id="Rounded_Rectangle_7_copy">
    		<g>
    			<path fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M20.4,117.8c-0.2,0-0.3-0.1-0.3-0.3c0-0.2,0.1-0.3,0.3-0.3h30.4
    				c0.2,0,0.3,0.1,0.3,0.3c0,0.2-0.1,0.3-0.3,0.3H20.4z"/>
    		</g>
    		<g>
    			<path fill="#999A9F" d="M50.8,116.6H20.4c-0.5,0-0.9,0.4-0.9,0.9c0,0.5,0.4,0.9,0.9,0.9h30.4c0.5,0,0.9-0.4,0.9-0.9
    				C51.7,117,51.3,116.6,50.8,116.6L50.8,116.6z"/>
    		</g>
    	</g>
    </g>
    </svg>

    <!-- this is for the iphone 2 which is a bit more curved -->

    <svg class="iphone2 android_phone" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    	 viewBox="0 0 71.2 124.5" enable-background="new 0 0 71.2 124.5" xml:space="preserve">
    <g id="Rounded_Rectangle_8_1_" enable-background="new    ">
    	<g id="Rounded_Rectangle_8">
    		<g>
    			<path fill="#C6C6CD" d="M10,123.7c-5.3-0.9-9.2-5.3-9.2-10.3V11.5C0.8,5.7,5.9,1,12.1,1h47.1c6.2,0,11.3,4.7,11.3,10.5v101.9
    				c0,5.1-3.9,9.4-9.2,10.3H10z"/>
    		</g>
    		<g>
    			<path fill="#999A9F" d="M59.2,1.8c5.8,0,10.5,4.4,10.5,9.7v101.9c0,4.7-3.6,8.7-8.5,9.5H10.1c-4.9-0.9-8.5-4.9-8.5-9.5V11.5
    				c0-5.4,4.7-9.7,10.5-9.7H59.2 M59.2,0.2H12.1C5.4,0.2,0,5.3,0,11.5v101.9c0,5.6,4.3,10.2,9.9,11.1h51.4c5.6-1,9.9-5.6,9.9-11.1
    				V11.5C71.2,5.3,65.8,0.2,59.2,0.2L59.2,0.2z"/>
    		</g>
    	</g>
    </g>
    <g id="Rounded_Rectangle_4_1_" enable-background="new    ">
    	<g id="Rounded_Rectangle_4">
    		<g>
    			<path fill="#999A9F" d="M48.7,7.4c0.9,0,1.5,0.4,1.5,0.6s-0.6,0.6-1.5,0.6H21.8c-0.9,0-1.5-0.4-1.5-0.6s0.6-0.6,1.5-0.6H48.7
    				 M48.7,6.9H21.8c-1.1,0-2,0.5-2,1.1s0.9,1.1,2,1.1h26.9c1.1,0,2-0.5,2-1.1S49.8,6.9,48.7,6.9L48.7,6.9z"/>
    		</g>
    	</g>
    </g>
    <g id="Ellipse_2_1_" enable-background="new    ">
    	<g id="Ellipse_2">
    		<g>
    			<path fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" d="M35.6,121.2c-2.4,0-4.3-1.9-4.3-4.3s1.9-4.3,4.3-4.3
    				s4.3,1.9,4.3,4.3S38,121.2,35.6,121.2z"/>
    		</g>
    		<g>
    			<path fill="#999A9F" d="M35.6,112.6c2.3,0,4.2,1.9,4.2,4.2s-1.9,4.2-4.2,4.2s-4.2-1.9-4.2-4.2S33.3,112.6,35.6,112.6 M35.6,112.3
    				c-2.5,0-4.5,2-4.5,4.5s2,4.5,4.5,4.5c2.5,0,4.5-2,4.5-4.5S38.1,112.3,35.6,112.3L35.6,112.3z"/>
    		</g>
    	</g>
    </g>
    <g id="Rectangle_2_1_" enable-background="new    ">
    	<g id="Rectangle_2">
    		<g>
    			<rect class="iphone2_animate"x="6.9" y="14.1" fill-rule="evenodd" clip-rule="evenodd" fill="#C6C6CD" width="57.5" height="96.6"/>
    		</g>
    		<g>
    			<path fill="#999A9F" d="M64,14.5v95.9H7.2V14.5H64 M64.7,13.8H6.5v97.3h58.2V13.8L64.7,13.8z"/>
    		</g>
    	</g>
    </g>
    </svg>


  <script src="./js/materialize.min.js" charset="utf-8"></script>
  <script src="./js/mo.min.js"></script>

  <!-- bottom line contains the file for the initial implosion and the waves -->
  <script src="./js/index.js" charset="utf-8"></script>
  <script type="text/javascript">
  $( document ).ready(function(){
    $(".button-collapse").sideNav();
    setTimeout(function(){
      $(".grad").addClass("visible");
      $(".upper-img").addClass("visible");
      $(".desktop").css("visibility","visible");
      $(".android_phone").css("visibility","visible");
      $(".android_phone2").css("visibility","visible");
      $(".iphone").css("visibility","visible");
      $(".iwatch").css("visibility","visible");
      $(".tablet").css("visibility","visible");
      $(".android_watch").css("visibility","visible");
    },1800);
  });


</script>
  </body>
</html>
