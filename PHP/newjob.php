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

$description = $_POST["descriptionjob"];
  $description = filter_var($description, FILTER_SANITIZE_SPECIAL_CHARS);

  $experience = $_POST["experience"];
  $experience = filter_var($experience, FILTER_SANITIZE_SPECIAL_CHARS);


$sql = "INSERT INTO Jobs (jobname, city, state, country, salary, descriptionjob, experience, startingdate, currentstatus)
VALUES ('".$_POST["jobname"]."','".$_POST["city"]."','".$_POST["state"]."','".$_POST["country"]."','".$_POST["salary"]."','".$description."','".$_POST["experience"]."','".$_POST["startingdate"]."','".$_POST["currentstatus"]."')";

if (mysqli_query($conn, $sql)) {
    include '../HTML/congrats.html';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
