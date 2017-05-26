<?php
//Connecting, selecting database
$dbconn = pg_connect("host=localhost dbname=borders user=admin password=admin")
  or die('Could not connect: ' . pg_last_error());


$featureID = $_POST['idd'];

//Performing SQL query
$query = "UPDATE borders SET processed = 1 WHERE borders.gid =".$featureID;
$result = pg_query($query) or die ('Querry failed: ' . pg_last_error());

?>
