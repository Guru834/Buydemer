<?php
include 'connection.php';
$elecid = $_GET['elecid'];


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
                <button type="button" class="btn btn-info"><a href="../HTML/login.php"  style="text-decoration:none; color:black;">Logout</a></button>            </div>
        </div>
        <div class="main_section0">
            <div class="img_section1">
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://technologystudent.com/elec1/elec1a.gif" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="http://discovertemplate.com/wp-content/uploads/2020/08/DT_G28_Electronic-Device-Animated-GIF-Icon-pack.gif" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://cdn.dribbble.com/users/1107512/screenshots/5554208/floating_loop.gif" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="description_section2">
                <div class="read_section3">
                        <?php
                         $sql = "SELECT * FROM Electronic
                         WHERE ElectronicID=$elecid";
                         
                         $result = mysqli_query($conn,$sql);
         
                         if (mysqli_num_rows($result) > 0){
         
                             while($row = mysqli_fetch_assoc($result)){
                                $modelname = $row['modelname'];
                                $eleccondition = $row['eleccondition'];
                                $elecstorage = $row['elecstorage'];
                                $color = $row['color'];
                                $quantity = $row['quantity'];
                                $descriptionelec= $row['descriptionelec'];

                                echo "<div class='informationdiv'>
                                <ul>
                                    <li class = 'infoseperate'>Model Name<p>".$modelname."</p></li>
                                    <li class = 'infoseperate'>Expected Condition<p>".$eleccondition."</p></li>
                                    <li class = 'infoseperate'>Expected Storage<p>".$elecstorage."</p></li>
                                </ul>
                                </div>";
                                echo "<div class='informationdiv'>

                                <ul>
                                    <li class = 'infoseperate'>Expected Color<p>".$color."</p></li>
                                    <li class = 'infoseperate'>Expected Quantity<p>".$quantity."</p></li>
                                    <li class = 'infoseperate'>Expected description<p>".$descriptionelec."</p></li>
                                    
                                </ul>
                                    
                                    
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