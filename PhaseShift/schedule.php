<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Schedule</title>
    <script src="./js/jquery.js"></script>
    <script src="./js/materialize.min.js"></script>
    <link rel="stylesheet" href="./css/materialize.min.css">
    <link rel="stylesheet" href="./css/common.css">

    <?php include 'links.php'; ?>


    <script type="text/javascript">
        $(document).ready(function(){
        $('#nav-button').sideNav();
        $('.modal-trigger').leanModal();
        $('body').css('background-color', 'floralwhite');
        $('#modal1').css('background-color', 'floralwhite');
      });
    </script>
    <link rel="stylesheet" href="./css/font-awesome.min.css">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="row">
      <div class="col s12">
        <ul class="tabs event-days">
          <li class="tab col s6"><a style="color : rgba(111,46,136,1);" href="#day1" class="active">23 September</a></li>
          <li class="tab col s6"><a style="color : rgba(111,46,136,1);" href="#day2">24 September</a></li>
        </ul>
      </div>
    </div>
    <?php include 'modal.php'; ?>
    <div class="schedule-container" id="day1">
    <table class="striped centered table-first bordered">
        <thead>
          <tr class="table-headings">
              <th data-field="place">PLACE</th>
              <th data-field="slot1">9am - 10am</th>
              <th data-field="slot2">10am - 11am</th>
              <th data-field="slot3">11am - 12pm</th>
              <th data-field="slot4">12pm - 1pm</th>
              <th data-field="slot5">1pm - 2pm</th>
              <th data-field="slot6">2pm - 3pm</th>
              <th data-field="slot7">3pm - 4pm</th>
              <th data-field="slot8">4pm - 5pm</th>
          </tr>
        </thead>

        <tbody>
          <tr class="table-events">
            <td>PG Block 6004 (EE)</td>
            <td></td>
            <td></td>
            <td colspan="2">Tardis</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>PG Block 3rd Floor BT Classroom 2</td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="5">Allele-a Biohunt</td>
          </tr>
          <tr class="table-events">
            <td>MV hall</td>
            <td></td>
            <td colspan="4">Workshop- Life saving applications of laser scanning</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>PG block 7010</td>
            <td></td>
            <td colspan="6">Mixed Bag</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>Internet Lab</td>
            <td></td>
            <td></td>
            <td colspan="5">IoT Code-A-Thon</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>CS-Lab</td>
            <td></td>
            <td colspan="7">IoT and It's Applications Using Arduino</td>
          </tr>
          <tr class="table-events">
            <td>PG block CS-5004</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">Current Trends and Opportunities In IoT</td>
          </tr>
          <tr class="table-events">
            <td>PG block CS-5003</td>
            <td></td>
            <td colspan="3">Tech JAMboree</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>EC block 2nd floor</td>
            <td colspan="8">Escape If You Can</td>
          </tr>
          <tr class="table-events">
            <td>EC 202, AEC Lab</td>
            <td colspan="8">Mega Mind</td>
          </tr>
          <tr class="table-events">
            <td>EC 201</td>
            <td colspan="8">Short Movie Making</td>
          </tr>
          <tr class="table-events">
            <td>PG block EC-6001</td>
            <td></td>
            <td colspan="3">Abstrakt It!</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>CIM lab (IEM Dept)</td>
            <td></td>
            <td></td>
            <td colspan="6">Ad-Apt</td>
          </tr>
          <tr class="table-events">
            <td>ERP LAB, TAYLOR HALL, IE Lab</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="3">PANIC!<br>(Round 1)</td>
          </tr>
          <tr class="table-events">
            <td>Gopi wall/Mech. parking lot</td>
            <td></td>
            <td></td>
            <td colspan="6">Ez Rider</td>
          </tr>
          <tr class="table-events">
            <td>PG block IS-4003</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">Hands on Workshop on IoT operators</td>
          </tr>
          <tr class="table-events">
            <td>MBA CR 1(PG Block 2nd floor)</td>
            <td></td>
            <td></td>
            <td colspan="2">A workshop on 'Invest like Warren Buffet'</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>MBA Finance CR(PG Block 3rd floor)</td>
            <td></td>
            <td></td>
            <td colspan="2">Business Plan</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>MBA CR 2(PG Block 2nd floor)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">Ad Making</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>MCA Lab</td>
            <td></td>
            <td></td>
            <td colspan="2">Code Storm</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>CA Classroom-4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">Ideas Galore</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>CAED LAB Mech Dept</td>
            <td></td>
            <td></td>
            <td colspan="2">Assemble Me</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>Mechanical workshop</td>
            <td></td>
            <td></td>
            <td colspan="4">Utility Chain</td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>Medical Ele. Dept(PG Block-5th floor)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">Mystery Inc.</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>PG block CS-5005</td>
            <td></td>
            <td colspan="2">Gridlock 2.0</td>
            <td></td>
            <td></td>
            <td colspan="2">Confoundo 2.0</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>MC Lab, Telecom Dept</td>
            <td colspan="4">Project Race(Arduino Workshop)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>AC Lab, Telecom Dept</td>
            <td></td>
            <td colspan="7">Project J</td>
          </tr>
          <tr class="table-events">
            <td>PG Block CH-6002</td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">The Sprinting Chemist</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>PG Block CH-3001</td>
            <td></td>
            <td></td>
            <td colspan="3">CHrash</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>FDC Hall</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">Congrats You're Placed!</td>
          </tr>
          <tr class="table-events">
            <td>IT Project Lab</td>
            <td></td>
            <td colspan="4">Workshop and competition on APP Development</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>RK Hall</td>
            <td colspan="8">Workshop and Competition on Sensor to Cloud Connectivity</td>
          </tr>
          <tr class="table-events">
            <td>PG block- DSP Lab(2nd Floor)</td>
            <td colspan="8">IoT - Techniques, Implementation and Future Prospects using Arduino Kit (Till 7 p.m.)</td>
          </tr>
          <tr class="table-events">
            <td>IT Classroom 3</td>
            <td></td>
            <td colspan="6">Buoyant</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>IT Classroom 2</td>
            <td colspan="8">Project Display on Home Automation(EI)</td>
          </tr>
          <tr class="table-events">
            <td>Architecture Studios</td>
            <td></td>
            <td colspan="2">JIG SAW</td>
            <td></td>
            <td></td>
            <td colspan="2">Panel Discussion(Architecture)</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>Architecture Studios</td>
            <td></td>
            <td>Picture This</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>PG block 3rd floor Chem Lab</td>
            <td></td>
            <td colspan="7">CFD Workshop</td>
          </tr>
          <tr class="table-events">
            <td>PG Block 1st Floor Measurements Lab</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="3">ABB Makeathon(24 hours)</td>
          </tr>
          <tr class="table-events">
            <td>BSN Hall</td>
            <td></td>
            <td colspan="7">Machine Learning</td>
          </tr>
          <tr class="table-events">
            <td>PG Block EE-6002 and PE lab</td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="3">Bomb Diffusion</td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>ISE Lab (EC block)</td>
            <td colspan="6">IoT Intelligence</td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>PG Block IS-4001, 4002, 4003</td>
            <td></td>
            <td></td>
            <td colspan="2">Logo Mania 3.0<br>(Round 1)</td>
            <td colspan="2">Logo Mania 3.0<br>(Round 2)</td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>PG Block IS-4001</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">IO SQL</td>
          </tr>
          <tr class="table-events">
            <td>PG Block BT Classroom 3, 3rd floor</td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="4">Start-Up Wars</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>Som Lab (Mech block)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">Best Mechanic</td>
          </tr>
          <tr class="table-events">
            <td>PG Block 4th Floor IS-4005</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">Hands on IoT workshop(ISE)</td>
          </tr>
          <tr class="table-events">
            <td>PG Block 5th Floor ML Dept.</td>
            <td colspan="8">Cimeathon (Till 6p.m.)</td>
          </tr>
          <tr class="table-events">
            <td>PG Block CS-5001</td>
            <td></td>
            <td colspan="3">Workshop on understanding Business Architecture<br>in IoT context</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>PG Block CS-5002</td>
            <td></td>
            <td colspan="4">IOT Ideathon (Continued on Day 2)</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>


    <div class="schedule-container" id="day2">
    <table class="striped centered table-first bordered">
        <thead>
          <tr class="table-headings">
              <th data-field="place">PLACE</th>
              <th data-field="slot1">9am - 10am</th>
              <th data-field="slot2">10am - 11am</th>
              <th data-field="slot3">11am - 12pm</th>
              <th data-field="slot4">12pm - 1pm</th>
              <th data-field="slot5">1pm - 2pm</th>
              <th data-field="slot6">2pm - 3pm</th>
              <th data-field="slot7">3pm - 4pm</th>
              <th data-field="slot8">4pm - 5pm</th>
          </tr>
        </thead>

        <tbody>
          <tr class="table-events">
            <td>PG Block 6003 (EE)</td>
            <td></td>
            <td colspan="3">Astrophotography Workshop</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>BT Classroom</td>
            <td></td>
            <td></td>
            <td colspan="2">Rise of Mutants</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>MV hall</td>
            <td colspan="3">Courtroom Genethics	</td>
            <td></td>
            <td></td>
            <td colspan="3">Bio entertainment quiz</td>
          </tr>
          <tr class="table-events">
            <td>PG block 7003</td>
            <td></td>
            <td></td>
            <td colspan="3">Hunting with Coordinates</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>CR-104</td>
            <td></td>
            <td colspan="6">Techzibition</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>CSE Seminar Hall(1st Floor EC Block)</td>
            <td></td>
            <td colspan="3">IoT Tech Hunt</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>CS Lab</td>            <td></td>
            <td colspan="7">Android App Development embedded with IoT(Workshop)</td>
          </tr>
          <tr class="table-events">
            <td>PG block CS-5002</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="3">IoT Ideathon(Continued from day 1)</td>
          </tr>
          <tr class="table-events">
            <td>EC 201</td>
            <td colspan="6">Short Movie Making</td>
            <td></td>
            <td></td>
          </tr>
          <!-- <tr class="table-events">
            <td>Eyantra Lab(PG block 6th floor)</td>
            <td></td>
            <td></td>
            <td colspan="6">Workshop on IoT by MediaTek on LINKIT1 Board</td>
          </tr> -->
          <tr class="table-events">
            <td>PG Block 1st Floor</td>
            <td colspan="8">Fury Road v2.0</td>
          </tr>
          <tr class="table-events">
            <td>BSN Hall</td>
            <td colspan="5">Paper Presentation Competition</td>
            <td colspan="2">LaTeX workshop</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>ERP LAB, TAYLOR HALL, IE Lab</td>
            <td colspan="8">PANIC!<br>(Round 2)</td>
          </tr>
          <tr class="table-events">
            <td>Gopi wall/Mechanical parking lot</td>
            <td></td>
            <td></td>
            <td colspan="6">Ez rider</td>
          </tr>
          <tr class="table-events">
            <td>IEM CR1 (Mech block 1st floor)</td>
            <td></td>
            <td></td>
            <td colspan="5">Materialistic</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>PG Block 5004 (CS)</td>
            <td></td>
            <td colspan="3">The Prototype</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>Library Auditorium</td>
            <td></td>
            <td colspan="3">Panel Discussion (EDC)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>ISE Lab (EC block)</td>
            <td colspan="8">Hands on Workshop on IoT Operations(ISE)</td>
          </tr>
          <tr class="table-events">
            <td>PG block 3rd floor - MBA classroom 1</td>
            <td></td>
            <td></td>
            <td colspan="2">inQUIZitive</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>PG block 3rd floor - MBA classroom 2</td>
            <td></td>
            <td></td>
            <td colspan="2">High Growth Job Roles For Engineers</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>PG block 3rd floor - MBA Finance class</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">Block and Tackle</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>FDC hall</td>
            <td></td>
            <td colspan="3">Recent Advances in IoT(Workshop)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>ICL lab</td>
            <td></td>
            <td></td>
            <td colspan="2">Project Emblazon</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>EC block parking lot</td>
            <td colspan="3">Junkyard Javelin</td>
            <td></td>
            <td></td>
            <td colspan="2">Bot Wars</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>Mesh hall</td>
            <td></td>
            <td colspan="3">Home automation workshop(Mech)</td>
            <td></td>
            <td></td>
            <td colspan="2">Automation- IoT and Architecture</td>
          </tr>
          <tr class="table-events">
            <td>Medical Electronics Department<br>(5th floor,PG Block)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="3">Criminal case 3.0- cyber</td>
          </tr>
          <tr class="table-events">
            <td>Indoor Stadium</td>
            <td colspan="4">Biz-tech Quiz</td>
            <td colspan="4">General Quiz</td>
          </tr>
          <tr class="table-events">
            <td>MC lab, telecom dept</td>
            <td colspan="7">Project race(Arduino workshop)</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>EC 207</td>
            <td></td>
            <td colspan="6">Pictonnect(TC and Mech)</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>EC 206</td>
            <td></td>
            <td colspan="5">Circuit Challenge</td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>AC Lab, telecom dept</td>
            <td colspan="7">H.A.M</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>Architecture studios</td>
            <td></td>
            <td colspan="2">Product design</td>
            <td colspan="2">Future cities and technology</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>PG block CH-3001</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="3">SciFi Battle</td>
          </tr>
          <tr class="table-events">
            <td>PG block CH-3002</td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="3">CheMUN</td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>IT Project Lab</td>
            <td></td>
            <td colspan="4">Workshop and competition on APP Development</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>RK hall</td>
            <td colspan="8">Workshop and competition on Sensor to Cloud connectivity</td>
          </tr>
          <tr class="table-events">
            <td>PG block- DSP lab(2nd floor)</td>
            <td colspan="8">Internet Of Things (IoT) - Techniques, Implementation and Future Prospects using Arduino Kit (Till 7 p.m.)</td>
          </tr>
          <tr class="table-events">
            <td>IT Classroom 2</td>
            <td colspan="8">Project Display on Home Automation(EI)</td>
          </tr>
          <tr class="table-events">
            <td>Med Elec Classrooms</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="3">Criminal case 3.0</td>
          </tr>
          <tr class="table-events">
            <td>MPH</td>
            <td></td>
            <td colspan="7">IoT in Application of Renewables - Workshop (Fluxgen)</td>
          </tr>
          <tr class="table-events">
            <td>Chem lab</td>
            <td></td>
            <td colspan="7">CFD Workshop</td>
          </tr>
          <tr class="table-events">
            <td>Measurements Lab</td>
            <td colspan="5">ABB Makeathon</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>IT Computer Lab</td>
            <td></td>
            <td colspan="6">INTEL EDISON board workshop</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>PG Block IS-4004</td>
            <td></td>
            <td colspan="4">Route IT</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>Bio- Informatics lab BT department</td>
            <td></td>
            <td colspan="6">Molecular Simulations using GROMACS (Workshop)</td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>PG block EC-6002</td>
            <td colspan="5">Workshop on Retrofitting and Maintenance of Structures Using Smart IOT Devices</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-events">
            <td>PG block 3rd floor Chem Lab</td>
            <td></td>
            <td colspan="7">CFD Workshop</td>
          </tr>
          <tr class="table-events">
            <td>PG block IS-4002</td>
            <td colspan="8">IO SQL</td>
          </tr>
          <tr class="table-events">
            <td>DSP Lab, EC Block 2nd floor</td>
            <td></td>
            <td></td>
            <td colspan="6">Workshop on Wireless Sensor Networks</td>
          </tr>
          <tr class="table-events">
            <td>PG Block CS-5001</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="3">Workshop on understanding<br>Business Architecture in IoT context</td>
          </tr>
          <tr class="table-events">
            <td>EC 203 and AEC Lab, EC Block</td>
            <td></td>
            <td colspan="6">Electroblitz</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
