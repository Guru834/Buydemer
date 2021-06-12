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

  $description = $_POST["descriptionelec"];
  $description = filter_var($description, FILTER_SANITIZE_SPECIAL_CHARS);

  $modelname = $_POST["modelname"];
  $modelname = filter_var($modelname, FILTER_SANITIZE_SPECIAL_CHARS);



  $sql = "INSERT INTO Electronic (modelname, eleccondition, elecstorage, color, quantity, descriptionelec)
  VALUES ('".$modelname."','".$_POST["eleccondition"]."','".$_POST["elecstorage"]."','".$_POST["color"]."','".$_POST["quantity"]."','".$description."')";

  if (mysqli_query($conn, $sql)) {
    include '../HTML/congrats.html';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
