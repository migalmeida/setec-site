<?php
include("phpsqlajax_dbinfo.php");

// Start XML file, create parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("pandlets");
$parnode = $dom->appendChild($node);
// Opens a connection to a pgSQL server
$conn_string = "host=$host dbname=$database user=$username password=$password" ;
$conn = pg_connect($conn_string);  
if(!$conn){
    die ("Could not open connection to database server");
}
$query = "SELECT * FROM setec.pandlets";
$result = pg_query($conn, $query);
if(!$result){
    die('Invalid query : ' . pg_last_error());
}
header("Content-type: text/xml");
// Iterate through the rows, adding XML nodes for each
while ($row = pg_fetch_assoc($result)){
// ADD TO XML DOCUMENT NODE
$node = $dom->createElement("pandlets");
$newnode = $parnode->appendChild($node);
$newnode->setAttribute("id",$row['id']);
$newnode->setAttribute("username",$row['username']);
$newnode->setAttribute("name", $row['name']);
$newnode->setAttribute("lat", $row['lat']);
$newnode->setAttribute("lng", $row['lng']);
$newnode->setAttribute("battery", $row['battery']);
}
echo $dom->saveXML();
?>
 
