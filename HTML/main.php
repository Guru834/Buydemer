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
<body style="background-color: #272727">
    <div class="container">
        <div class="navigation-bar">
            <div class="bar-left">
                <div class="title_div">
                    <h1>buydemer</h1>
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
                <button type="button" class="btn btn-info"><a href="../HTML/post.html"  style="text-decoration:none; color:#272727;">Post</a></button>
                <button type="button" class="btn btn-info"><a href="../HTML/login.html"  style="text-decoration:none; color:#272727;">Logout</a></button>
            </div>
        </div>
        <div class="searchbar_div">
            <form action = "search.php" method="post">
                <input type="text" placeholder="Search for anything..." name = "search">
                <a href = "#"><button type = "submit" name = "submit-search"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg></button></a>
            </form>
        </div> 

        <?php
                         

                
                $sqlfind  = 'SELECT * FROM Jobs';

                $resultfind = mysqli_query($conn, $sqlfind);
                
                $queryResults = mysqli_num_rows($resultfind);
                


                if ($queryResults > 0){
                while($row = mysqli_fetch_assoc($resultfind)) {
                //    echo "<div class = 'article-box'>

                //         <h3>".$row['jobname']."</h3>
                   
                   
                //    </div>";
                }
                } else {
                    echo "0 records";
                }
        ?>
  

        <div class="prac" id = "check">
            <?php
                $sql = "SELECT * FROM Jobs";
                $result = mysqli_query($conn,$sql);

                if (mysqli_num_rows($result) > 0){

                    while($row = mysqli_fetch_assoc($result)){

                        $jobname = $row['jobname'];
                        $descriptionjob= $row['descriptionjob'];
                        echo "<a href = 'product.php?jobid=". $row["JobID"]."' style='text-decoration:none; color:black;'><div class='products_div'>
                        <div class='img_div'>
                            <img src='../IMAGES/jobs.png' alt='...''>
                        </div>
            
                        <div class='information_div'>
                            <div class='product_title_div'>
                                <h1>$jobname</h1>
                
                            </div>
                            <div class='product_des_div'>
                                <div>$descriptionjob</div>
                
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

            <?php
                $sql3 = "SELECT * FROM RealEstate";
                $result3 = mysqli_query($conn,$sql3);

                if (mysqli_num_rows($result3) > 0){

                    while($row = mysqli_fetch_assoc($result3)){

                        $namereal = $row['namereal'];
                        $descriptionreal= $row['descriptionreal'];
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
                else
                {
                    echo "There is no data";
                }
                
            ?>
        </div>
    </div>
    
</body>
</html>