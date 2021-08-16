<?php
    session_start();

    if(!isset($_SESSION['is_loggedin']))
    {
        echo"<script>
                location.assign('login.php');
            </script>" ;
    }
?>

<!doctype html>
<html lang="en">

<head>
    <title>Home</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!--JQUERY FILE-->

    <!--Theme CSS FILE-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--Header Section-->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-light ">
                <a class="navbar-brand logo" href="#"> Poultry.com</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav ml-auto menu">
                        
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#about"><i class="fa fa-address-card"></i> About Us <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fa fa-clone"></i> Service <span class="sr-only">(current)</span></a>
                        </li>
                        
                        <!--PHP ADMIN ROLE CONDITION START-->
                        <!--<?php if($_SESSION['ROLE'] == 1 ) { ?>-->
                        
                        <li class="nav-item active">
                            <a class="nav-link" href="loginfo.php"><i class="fa fa-sign-in-alt"></i> Account Information <span class="sr-only">(current)</span></a>
                        </li>
                        
                        <li class="nav-item active">
                            <a class="nav-link" href="chicken.php"><i class="fa fa-sign-in-alt"></i> Chicken Information <span class="sr-only">(current)</span></a>
                        </li>
                        <!--<?php } ?>-->
                        
                        <!--PHP ADMIN ROLE CONDITION END-->
                        
                        <li class="nav-item active">
                            <a class="nav-link" href="signup.php"><i class="fa fa-user"></i> Signup <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-mobile-alt"></i> Contact <span class="sr-only">(current)</span></a>
                        </li> 
                        <li class="nav-item active">
                            <a class="nav-link" href="logout.php"><i class="fas fa-power-off"></i> Logout <span class="sr-only">(current)</span></a>
                        </li> 
                    </ul>
                </div>
            </nav>

        </div>
    </header>

    <!--Section/Middle Body-->

    <!--About Poultry Section-->
    <section class="about-poultry" id="about-poultry">

        <div class="container">
            <div class="move">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/3.jpg" class="d-block w-100" alt="...">
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


            <div class="about-poultry">
                <h3>About Poultry Farming</h3><br>
                <p>Poultry farming is the process of raising domesticated birds such as chickens, ducks, turkeys and geese for the purpose of farming meat or eggs for food. Poultry – mostly chickens – are farmed in great numbers. Farmers raise more than 50 billion chickens annually as a source of food, both for their meat and for the eggs.</p>
                <p>Commercial hens usually begin laying eggs at 16–21 weeks of age, although production gradually declines soon after from approximately 25 weeks of age. This means that in many countries, by approximately 72 weeks of age, flocks are considered economically unviable and are slaughtered after approximately 12 months of egg production, although chickens will naturally live for 6 or more years. In some countries, hens are force moulted to re-invigorate egg-laying.
                </p>
            </div>

        </div>

    </section>
    <!--About Us Section-->
    <section class="about" id="about">

        <div class="container">
            <div class="about-us">
                <div class="about-title">
                    <h2>About Us</h2>
                </div>

                <div class="row">
                    <div class="col-md-4">
                    <div class="card">
                        <img src="img/kaushik.png" class="card-img-top" alt="KAUSHIK DEBDAS">
                        <div class="card-body">
                            <h5 class="card-title">KAUSHIK DEBDAS</h5>
                            <p class="card-text">CEO & FOUNDER<br>kaushikdebdas27@gmail.com</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="img/tanzeen.png" class="card-img-top" alt="TANZEEN">
                        <div class="card-body">
                            <h5 class="card-title">KHURSHIDA JAHAN TANZEEN</h5>
                            <p class="card-text">CEO & FOUNDER<br>mayaboty123@gmail.com</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/rafsan.png" class="card-img-top" alt="RAFSAN">
                        <div class="card-body">
                            <h5 class="card-title">IFFAT HAQUE RAFSAN</h5>
                            <p class="card-text">CEO & FOUNDER<br>rafsan69@gmail.com</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--Footer Section-->
    <footer>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <p class="navbar-brand">Copyright @Kaushik Debdas All rights reserved</p>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#about">About Us <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Service <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Privacy <span class="sr-only">(current)</span></a>
                        </li>
                </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>