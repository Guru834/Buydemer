<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Guruansh123@123";
$dbname = "buydemer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
else
{
  $sql = "INSERT INTO Electronic (modelname, eleccondition, elecstorage, color, quantity, descriptionelec)
  VALUES ('".$_POST["modelname"]."','".$_POST["eleccondition"]."','".$_POST["elecstorage"]."','".$_POST["color"]."','".$_POST["quantity"]."','".$_POST["descriptionelec"]."')";

  if (mysqli_query($conn, $sql)) {
    include '../HTML/congrats.html';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
