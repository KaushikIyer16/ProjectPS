<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>About</title>
    <script src="./js/jquery.js"></script>
    <script src="./js/materialize.min.js"></script>
    <link rel="stylesheet" href="./css/materialize.min.css">
    <link rel="stylesheet" href="./css/common.css">


    <?php include 'links.php'; ?>

    <script type="text/javascript">
        $(document).ready(function(){
        $('.parallax').parallax();
        $('#nav-button').sideNav();
        $('.modal-trigger').leanModal();
        $('h2').css('font-weight','500');
      });
    </script>
    <link rel="stylesheet" href="./css/font-awesome.min.css">
  </head>
  <body>
    <?php include 'header.php'; ?>

    <div class="section other-card-section bg-color">
      <div class="container about-data-container">
        <!-- <div class="card-panel"> -->
          <h2 class="header">ABOUT PHASE SHIFT</h2>
          <p>Phase Shift 2016, a National Level Annual Tech Symposium, aims at having students of all disciplines to collaborate, learn, discuss, present and explore possibilities for innovation, development and applications around the theme <b style="color:rgba(111,46,136,1);">Internet of Things(IoT)</b> in all fields of science, engineering and management.</p>
          <p>It provides an oppurtunity to explore one's interest and potentials through hackathons, makeathons, paper presentations and other events organized through professional connections.It sets the tone to kindle and nurture a spark through partnerships with reputed organizations associated with diverse interests.</p>
          <p>The past editions of Phase Shift have been a staggering success. Each edition has helped develop students into globally competent professionals.</p>
        <!-- </div> -->
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="images/collage1.png"></div>
    </div>

    <div class="section second-card-section bg-color">
      <div class="row container about-data-container">
        <!-- <div class="card-panel"> -->
          <h2 class="header">ABOUT BMSCE</h2>
          <p>BMS College of Engineering, Bengaluru was founded in the year 1946 by Late Sri B.M.Sreenivasaiah, a great visionary and philanthropist and nurtured by his son Late Sri B.S. Narayan. BMSCE is the first private sector initiative from the erstwhile state of Mysore towards engineering education in India. Started with only three undergraduate courses, BMSCE today offers 13 undergraduate and 16 postgraduate courses both in conventional and engineering areas. Fifteen of its departments are recognised as Research Centres offering PhD/M.Sc. (Engineering by Research) degrees in Science, Engineering, Architecture and Management. Modernisation, expansion and sophistication have not changed the basic philosophy of education at BMSCE.</p>
          <p style="color:rgba(111,46,136,1);"><b>Noteworthy Attributes</b></p>
          <p>BMSCE is the first institution in the state to be bestowed with NBA Accreditation in Tier-I format(Washington Accord) for UG programs.  It is a beneficiary of TEQIP Phase I and II(Technical Education Quality Improvement Programme, under World Bank Assistance) with an established Centre of Excellence in the Area of Advanced Materials.  Accredited with A grade by NAAC with CGPA of 3.14/4.00.  Approved by Council of Architecture (COA), New Delhi.  BMSCE is currently ranked first in the state of Karnataka,14th among top 150 Engineering Institutions in India  as per the Times Engineering Institutes Ranking Survey 2016.</p>
        <!-- </div> -->
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="images/collage2.png"></div>
    </div>

    <div class="section other-card-section bg-color">
      <div class="row container about-data-container">
        <!-- <div class="card-panel"> -->
          <h2 class="header">EXPECTED OUTCOMES</h2>
          <p>The ability to,
          <ul>
            <li><i class="fa fa-chevron-right" aria-hidden="true"></i> Deploy the skills acquired for development of prototypes in support of ideas using latest technologies.</li>
            <br/>
            <li><i class="fa fa-chevron-right" aria-hidden="true"></i> Initiate connects for sustained partnerships with organisations of diverse interests that may lead to establishment of further enterprises.</li>
            <br/>
            <li><i class="fa fa-chevron-right" aria-hidden="true"></i> Work  with  multidisciplinary teams towards a common  goal.</li>
            <br/>
            <li><i class="fa fa-chevron-right" aria-hidden="true"></i> Organise and manage the un-foreseen  operational  challenges.</li>
          </ul>
        </p>
        <!-- </div> -->
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="images/collage3.png"></div>
    </div>

    <?php include 'modal.php'; ?>
    <?php include 'footer.php'; ?>
  </body>
</html>
