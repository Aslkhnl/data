<?php
$username = "ayauly";
$password = "1q2w3e4R";
$hostname = "174.138.15.211"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
?>