<?php
include 'connection.php';
$realestateid = $_GET['realestateid'];

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
                <button type="button" class="btn btn-info"><a href="main.php"  style="text-decoration:none; color:black;">Home</a></button>
            </div>
            <div class="title_div">
                <h1>buydemer</h1>
            </div>
            <div class="bar_button">
                <button type="button" class="btn btn-info"><a href="../HTML/post.html"  style="text-decoration:none; color:black;">Post</a></button>
                <button type="button" class="btn btn-info"><a href="../HTML/login.html"  style="text-decoration:none; color:black;">Logout</a></button>            </div>
        </div>
        <div class="main_section0">
            <div class="img_section1">
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                   
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://cdn.dribbble.com/users/1118376/screenshots/3143125/red-sift-house.gif" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://www.zilliondesigns.com/blog/wp-content/uploads/loading.gif" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://connectedinvestors.com/blog/wp-content/uploads/2018/01/How-Many-Mortgages-Can-I-have-as-a-Real-Estate-Investor-1.gif" alt="Third slide">
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
                         $sql = "SELECT * FROM RealEstate
                         WHERE RealEstateID=$realestateid";
                         
                         $result = mysqli_query($conn,$sql);
         
                         if (mysqli_num_rows($result) > 0){
         
                             while($row = mysqli_fetch_assoc($result)){
                                $namereal = $row['namereal'];
                                $cityreal = $row['cityreal'];
                                $statereal = $row['statereal'];
                                $countryreal = $row['countryreal'];
                                $postalcode = $row['postalcode'];
                                $descriptionreal= $row['descriptionreal'];
                                $expectederent = $row['expectederent'];
                                $expectedlease = $row['expectedlease'];

                                echo "<div class='informationdiv'>
                                <table>
                                <tr>
                                    <th>Real-Estate Type</th>
                                    <td>$namereal</td>
                                    
                                </tr>
                                <tr>
                                    <th>Expected City</th>
                                    <td>$cityreal</td>
                                    
                                </tr>
                                <tr>
                                    <th>Expected State</th>
                                    <td>$statereal</td>
                                    
                                </tr>
                                <tr>
                                    <th>Expected Country</th>
                                    <td>$countryreal</td>
                                    
                                </tr>
                                </table>
                                
                                </div>";
                                echo "<div class='informationdiv'>
                                <table>
                                <tr>
                                    <th>Postal-Code</th>
                                    <td class = 'extrapadding'>$postalcode</td>
                                    
                                </tr>
                                <tr>
                                    <th>Expected Description</th>
                                    <td class = 'extrapadding'>$descriptionreal</td>
                                    
                                </tr>
                                <tr>
                                    <th>Expected Rent</th>
                                    <td class = 'extrapadding'>$expectederent</td>
                                    
                                </tr>
                                <tr>
                                    <th>Expected Lease</th>
                                    <td class = 'extrapadding'>$expectedlease</td>
                                    
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