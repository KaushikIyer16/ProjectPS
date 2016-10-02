<div class="navbar-fixed nav-size ">
    <nav class="grad nav-size">
      <div class="nav-wrapper nav-container">
        <a href="./index.php" class="brand-logo ps-logo"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse nav-white-button" id="nav-button"><i class="fa fa-2x fa-bars" style="font-size: 4.5rem !important;" aria-hidden="true"></i></a>
        <ul class="right hide-on-med-and-down nav-list">
          <li><a href="about_us.php">ABOUT</a></li>
          <li><a href="pre_events.php">PRE-FEST EVENTS</a></li>
          <li><a href="events.php">EVENTS</a></li>
          <li><a href="workshops.php">WORKSHOPS AND SEMINARS</a></li>
          <li><a href="schedule.php">SCHEDULE</a></li>
          <li><a href="sponsors.php">SPONSORS</a></li>
          <li><a href="gallery.php">GALLERY</a></li>
          <?php
            if (isset($_SESSION['username'])) {
              echo '<li><a href="myAccount.php">MY ACCOUNT</a></li>';
            }else{
              echo '<li><a href="login.php">LOGIN</a></li>';
            }
           ?>
        </ul>

        <ul class="side-nav bg-color nav-size-mobile side-nav-custom" id="mobile-demo">
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
</div>
