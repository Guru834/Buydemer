<?php
include 'connection.php';
$jobid = $_GET['jobid'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/product.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
    <title>Product</title>
</head>
<body style="background-color: #272727">
    <div class="container">
        <div class="navigation-bar">
            <div class="bar_button">
                <a href = "main.php"><button type="button" class="btn btn-info" style = "color: black;">Home</button> </a>
            </div>
            <div class="title_div">
                <h1>buydemer</h1>
            </div>
            <div class="bar_button">
                <button type="button" class="btn btn-info"><a href="post.html"  style="text-decoration:none; color:black;">Post</a></button>
                <button type="button" class="btn btn-info"><a href="login.php"  style="text-decoration:none; color:black;">Logout</a></button>            </div>
        </div>
        <div class="main_section0">
            <div class="img_section1">
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://cdn.dribbble.com/users/891859/screenshots/3472550/hireme.gif" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://media.giphy.com/media/RMGLLn6JiJELQh5M8i/giphy.gif" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://media3.giphy.com/media/l2JhrOelSEWY1ubba/giphy.gif" alt="Third slide">
                        </div>
                    </div>
                    <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a> -->
                </div>
            </div>
            <div class="description_section2">
                <div class="read_section3">
                    
                    <?php
                         $sql = "SELECT * FROM Jobs
                         WHERE JobID=$jobid";
                         
                         $result = mysqli_query($conn,$sql);
         
                         if (mysqli_num_rows($result) > 0){
         
                             while($row = mysqli_fetch_assoc($result)){
                                $jobname = $row['jobname'];
                                $city = $row['city'];
                                $state = $row['state'];
                                $country = $row['country'];
                                $salary = $row['salary'];
                                $descriptionjob= $row['descriptionjob'];
                                $experience = $row['experience'];
                                $startingdate = $row['startingdate'];
                                $currentstatus = $row['currentstatus'];

                                echo "<div class='informationdiv'>
                                <table>
                                <tr>
                                    <th>Job Name</th>
                                    <td>$jobname</td>
                                    
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td>$city</td>
                                    
                                </tr>
                                <tr>
                                    <th>State</th>
                                    <td>$state</td>
                                    
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td>$country</td>
                                    
                                </tr>
                                <tr>
                                    <th>Expected Salary</th>
                                    
                                    <td>$salary</td>
                                    
                                </tr>
                                </table>
                                </div>";
                                echo "<div class='informationdiv'>

                                <table>
                                <tr>
                                    <th>Expected description</th>
                                    <td>$descriptionjob</td>
                                    
                                </tr>
                                <tr>
                                    <th>Experience</th>
                                    <td>$experience</td>
                                    
                                </tr>
                                <tr>
                                    <th>Starting Date</th>
                                    <td>$startingdate</td>
                                    
                                </tr>
                                <tr>
                                    <th>currentstatus</th>
                                    <td>$currentstatus</td>
                                    
                                </tr>
                                </table>   
                                </div>";
                             }
                         }
                    ?>
                </div>
                <div class="contact_section4">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a href = "contactus.php"><button class="btn btn-primary" type="button">Contact</button></a>
                      </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>