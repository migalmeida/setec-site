<?php
$conn_string = "host= db.fe.up.pt dbname=ee11134 user=ee11134 password=setec";
  $conn = pg_pconnect($conn_string);
  if (!$conn) {
    echo "An error occured.\n";
    exit;
  }
  
  $query = "set search_path to \"setec\";";
	$result = pg_exec($conn, $query);
  

  $queryZ = "set search_path to \"setec\";";
	$resultZ = pg_exec($conn, $queryZ);
?>

