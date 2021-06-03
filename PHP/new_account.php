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
  if($_POST["CompanyName"] == "")
  {
    $_POST["CompanyName"] = null;
  }
  $sql = "INSERT INTO loginInfo (FirstName, LastName, Email, Phone, City, Province, Country, PostalCode, Username, Password, CompanyName)
  VALUES ('".$_POST["FirstName"]."','".$_POST["LastName"]."','".$_POST["Email"]."','".$_POST["Phone"]."','".$_POST["City"]."','".$_POST["Province"]."','".$_POST["Country"]."','".$_POST["PostalCode"]."','".$_POST["Username"]."','".$_POST["Password"]."','".$_POST["CompanyName"]."')";

  if (mysqli_query($conn, $sql)) {
    header("Location: http://localhost/FinalProject/Project/HTML/login.html");
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
