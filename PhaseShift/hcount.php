<?php
$dbserver='';
$dbuser='';
$dbpassword='';
$database='';

/* Connect to database */
$connection=mysqli_connect($dbserver,$dbuser,$dbpassword,$database);
if(! $connection ) {
  die('Could not connect: ' . mysqli_error());
}
// echo 'Connected successfully';
$sql="UPDATE hitcount SET hits = hits + 1 WHERE hits_id = 1";
$result = mysqli_query($connection, $sql);
// echo "Hit count updation successful";

?>
