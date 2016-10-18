<?php
$username = "matepaiva_com";
$password = "fCPNPQNQ";
$hostname = "matepaiva.com.mysql";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
?>
