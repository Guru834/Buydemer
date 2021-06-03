<?php

include 'connection.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Main</title>
</head>
<body>
    <div class="container">
        <div class="navigation-bar">
            <div class="bar-left">
                <div class="title_div">
                <a href = "../HTML/main.php" style='text-decoration:none; color:black;'><h1>buydemer</h1></a>
                </div>
                <div class="options_div">
                    <ul>
                        <li><a href="../HTML/joblink.php">Jobs</a></li>
                        <li><a href="../HTML/electroniclink.php" style = 'color:red;'>Electronic</a></li>
                        <li><a href="../HTML/realestatelink.php">Real-Estate</a></li>
                    </ul>
                </div>
            </div>
            <div class="bar-right">
            <button type="button" class="btn btn-info"><a href="../HTML/post.html"  style="text-decoration:none; color:black;">Post</a></button>
                <button type="button" class="btn btn-info"><a href="../HTML/login.html"  style="text-decoration:none; color:black;">Logout</a></button>            </div>
        </div>
        <div class="searchbar_div">
            <form action="searchelec.php" method = "post">
                <input type="text" placeholder="Search for anything..." name = "search">
                <a href = "#"><button type = "submit" name = "submit-search"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg></button></a>
            </form>
        </div> 

        <div class="prac" id = "check">
            <?php
                $sql2 = "SELECT * FROM Electronic";
                $result2 = mysqli_query($conn,$sql2);

                if (mysqli_num_rows($result2) > 0){

                    while($row = mysqli_fetch_assoc($result2)){

                        $modelname = $row['modelname'];
                        $descriptionelec= $row['descriptionelec'];
                        echo "<a href = 'productelec.php?elecid=". $row["ElectronicID"]."' style='text-decoration:none; color:black;'><div class='products_div'>
                        <div class='img_div'>
                            <img src='../IMAGES/elec.jpg' alt='...''>
                        </div>
            
                        <div class='information_div'>
                            <div class='product_title_div'>
                                <h1>$modelname</h1>
                
                            </div>
                            <div class='product_des_div'>
                                <div>$descriptionelec</div>
                
                            </div>
                        </div> 
                    </div> </a>";
                    }
                }
                else
                {
                    echo "There is no data";
                }
                
            ?>
        </div>
    </div>
    
</body>
</html>