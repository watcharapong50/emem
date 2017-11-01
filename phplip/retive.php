<?php
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $db = "cruddatabase";

  // Create connection
  $conn = new mysqli($servername, $username, $password,$db);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
  }
  //echo "Connected successfully";
  
?>
