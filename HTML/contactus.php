<?php

$id = $_GET['id'];


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/contactus.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Contact Us</title>
</head>
<body style="background-color: #272727">
    <div class="container">
        <div class="navigation-bar">
            <div class="bar_button">
                <button type="button" class="btn btn-info"><a href="main.php"  style="text-decoration:none; color:black;">Home</a></button>
            </div>
            <div class="title_div">
            <a href = "../HTML/main.php" style='text-decoration:none; color:black;'><h1>buydemer</h1></a>
            </div>
            <div class="bar_button">
                <button type="button" class="btn btn-info"><a href="../HTML/post.html"  style="text-decoration:none; color:black;">Post</a></button>
                <button type="button" class="btn btn-info"><a href="../HTML/login.php"  style="text-decoration:none; color:black;">Logout</a></button>
            </div>
        </div>

        <div class="container-form">
            <form action="../API/sendfirst.php" method = "POST">
                <input type="text" placeholder="Enter Full-Name" name="FullName" required> 
                <input type="text" placeholder="Enter Comapny Name" name = "CompanyName">
                <input id = "message" name="Message" placeholder = "Enter message here..."></input>
                <input type="text" placeholder="Enter Email" name = "Email" required>
                <input type="text" placeholder="Enter Phone" name = "Phone" required>
                <button type="submit">Submit</button>    
            </form>
        </div>
    </div>
    
</body>
</html>