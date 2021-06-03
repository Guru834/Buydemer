<?php
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
    $query = "SELECT Username, Password FROM loginInfo WHERE BINARY Username='$susername' and BINARY Password = '$spassword'";
    $result = mysqli_query($conn, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if ($rows == 1) 
    {
      $_SESSION['Username'] = $susername;
      $_SESSION['Password'] = $spassword;

      header('Location: http://localhost/FinalProject/Project/HTML/main.php');
      exit;

    } 
    else{

      if(empty($susername) || $_SESSION['Username'] != $susername){
        header("Location: http://localhost/FinalProject/Project/HTML/login.php?error=UserName/Password is incorrect");
      }
      else if(empty($spassword)||  $_SESSION['spassword'] != $spassword){
        header("Location: http://localhost/FinalProject/Project/HTML/login.php?error=UserName/Password  is incorrect");      }
      
    }
}

mysqli_close($conn);
?>
