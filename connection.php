<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "student_management_crud";

// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

// Check connection
if ($conn) {
  echo "Connected successfully";
}
else{
  die("Connection failed: " .mysqli_error($conn));
}

?>