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
  $sql = "INSERT INTO RealEstate (namereal, cityreal, statereal, countryreal, postalcode, descriptionreal, expectederent, expectedlease)
  VALUES ('".$_POST["namereal"]."','".$_POST["cityreal"]."','".$_POST["statereal"]."','".$_POST["countryreal"]."','".$_POST["postalcode"]."','".$_POST["descriptionreal"]."','".$_POST["expectedRent"]."','".$_POST["expectedLease"]."')";

  if (mysqli_query($conn, $sql)) {
    include '../HTML/congrats.html';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
