<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
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
    <?php include 'modal.php'; ?>
    <div class="container">
          <?php
              $k=1;
              for ($j=0; $j < 3; $j++) {
                echo '<div class="row">';
                  echo '<div style="margin:1rem 0px;" class="col l6 m6 s12">';
                    echo '<img class="responsive-img materialboxed" src="./images/gallery/g'.($k++).'.png">';
                  echo '</div>';
                  echo '<div style="margin:1rem 0px;" class="col l6 m6 s12">';
                    echo '<img class="responsive-img materialboxed" src="./images/gallery/g'.($k++).'.png">';
                  echo '</div>';
                echo '</div>';

                echo '<div class="row">';
                for ($i=0; $i < 6 ; $i++) {

                    echo '<div style="margin:1rem 0px;" class="col l4 m6 s12">';
                      echo '<img class="responsive-img materialboxed" src="./images/gallery/g'.($k++).'.png">';
                    echo '</div>';

                }
                echo '</div>';
              }


           ?>
         </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
