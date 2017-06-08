<?php
//Connecting, selecting database
$dbconn = pg_connect("host=vm1006.exovps.hr port=5432 dbname=egn user=egn password=egn")
  or die('Could not connect: ' . pg_last_error());


$featureID = $_POST['idd'];

//Performing SQL query
$query = "UPDATE tk25_grid_qc SET qc = 1 WHERE tk25_grid_qc.gid =".$featureID;
$result = pg_query($query) or die ('Querry failed: ' . pg_last_error());

?>
