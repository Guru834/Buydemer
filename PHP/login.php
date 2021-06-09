<?php
session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "Guruansh123@123";
$dbname = "buydemer";
$susername = $_POST['username'];
$spassword = $_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
else
{
   error_reporting(E_ALL);
ini_set('display_errors', '1');
    $query = "SELECT Username, Password FROM loginInfo WHERE BINARY Username='$susername' and BINARY Password = '$spassword'";
    $result = mysqli_query($conn, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if ($rows == 0) 
    {
        if(empty($susername) || $_SESSION['Username'] != $susername){
        header("Location: http://localhost/Buydemer/Buydemer/HTML/login.php?error=UserName/Password is incorrect");
      }
      else if(empty($spassword)||  $_SESSION['spassword'] != $spassword){
        header("Location: http://localhost/Buydemer/Buydemer/HTML/login.php?error=UserName/Password  is incorrect");      }
      
    }
    else
    {
      header('Location: http://localhost/Buydemer/Buydemer/HTML/main.php');
      
      exit;
    }
  }
?>
