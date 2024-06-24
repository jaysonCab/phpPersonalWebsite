<?php
//Anything related to connecting the database
  $dbServer = "localhost";
  $dbUser = "root";
  $dbPassword = "";
  $dbName = "jchart";
  $conn = "";
  
  try {
    $conn = mysqli_connect($dbServer, $dbUser, $dbPassword, $dbName);
  } catch(mysqli_sql_exception) {
    echo "Didnt connect";
  }
  
  //Check if connection is good
  if ($conn) {
    echo "Connected";
  }
?>