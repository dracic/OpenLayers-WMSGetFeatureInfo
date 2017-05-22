<?php
//Connecting, selecting database
$dbconn = pg_connect("host=localhost dbname=borders user=admin password=admin")
  or die('Could not connect: ' . pg_last_error());

var_dump($_POST['featureId']);
$featureID = $_POST['featureId'];
?>
