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
                        <li><a href="../HTML/electroniclink.php">Electronic</a></li>
                        <li><a href="../HTML/realestatelink.php">Real-Estate</a></li>
                    </ul>
                </div>
            </div>
            <div class="bar-right">
                <button type="button" class="btn btn-info"><a href="../HTML/post.html"  style="text-decoration:none; color:black;">Post</a></button>
                <button type="button" class="btn btn-info"><a href="../HTML/login.html"  style="text-decoration:none; color:black;">Logout</a></button>
            </div>
        </div>
        <!-- <div class="divsearchtitle">
            All relevant items <br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/fd/Arrows_down_animated.gif" alt="">
        </div> -->
        <?php

        if(isset($_POST['submit-search'])){
        
            $search3 = mysqli_real_escape_string($conn, $_POST['search']);
            
            $sql3 = "SELECT * FROM RealEstate WHERE namereal LIKE '%$search3%'";
            
            $result3 = mysqli_query($conn, $sql3);
            
            $queryResult3 = mysqli_num_rows($result3);
            
            if($queryResult3 > 0){
                
                while($row = mysqli_fetch_assoc($result3)) {
                        $namereal = $row['namereal'];
                        $descriptionreal = $row['descriptionreal'];



                        echo "<a href = 'productreal.php?realestateid=". $row["RealEstateID"]."' style='text-decoration:none; color:black;'><div class='products_div'>
                        <div class='img_div'>
                            <img src='../IMAGES/realestate.jpg' alt='...''>
                        </div>

                        <div class='information_div'>
                            <div class='product_title_div'>
                                <h1>$namereal</h1>
                
                            </div>
                            <div class='product_des_div'>
                                <div>$descriptionreal</div>
                
                            </div>
                        </div> 
                    </div></a>";
                }
            } 
        }

        ?>
        
    </div>
    
</body>
</html>