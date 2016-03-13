<?php
// Database connection information
if (!empty($_POST)) {
   $dbhost = 'Host Name Here';
   $dbuser = 'Database User Here';
   $dbpass = 'Datebase Password Here';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   include('inc/variables.php');
   include('inc/dataSubmit.php');

   
   mysql_close($conn);
}
?>
