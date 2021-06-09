<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body style="background-color:#272727;">
    <div class="container">
        <div class="nav-title">
            <h1>buydemer</h1>
        </div>
        <div class="container-form">
            <div class="form1">
                <form action="../PHP/login.php" method = "POST">
                    <?php if(isset($_GET['error'])){ ?>
                            <p class = "error" style = "margin:0%; color:red;margin-left: 16%;font-size: 17px;font-family: 'Girassol', cursive;"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                    <input type="text" placeholder="Enter Username" name="username" id = "username"> 
                    <input type="password" placeholder="Enter Password" name="password" id = "password">  
                    <button type="submit">Sign-in</button>
                </form>
                      
            </div>
            <div class="signupdiv">
                <a href = "new_account.html"><button type="submit">Sign-up</button></a>
            </div>
        </div>
    </div>
</body>
</html>