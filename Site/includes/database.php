<?php
//database parameters
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName="remote_lab";

// database connection
$connectDatabase = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if (!$connectDatabase) {
  die("Database Connection Failed");
}

 ?>
