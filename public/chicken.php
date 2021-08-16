<?php
    if(isset($_SESSION['ROLE']) && $_SESSION['ROLE'] != '1')
    {
        echo"<script>
                location.assign('home.php');
            </script>" ;
    }
?>
<?php    
    // DB connection
    $conn = mysqli_connect('localhost','root','','poultrynew') ;
        
    if(!$conn){
        die("Not Connected" . mysqli_error($conn)) ;
    }
        
    $query = "SELECT * FROM chicken " ;
        
    $query_check = mysqli_query($conn,$query) ;

    $count = mysqli_num_rows($query_check) ;

    if($count > 0)
    {
        
?>
<!doctype html>
<html lang="en">

<head>
    <title>Chicken Information</title>

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
                <a class="navbar-brand logo" href="home.php"> Poultry.com</a>
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
                        <li class="nav-item active">
                            <a class="nav-link" href="login.html"><i class="fa fa-sign-in-alt"></i> Login <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="signup.html"><i class="fa fa-user"></i> Signup <span class="sr-only">(current)</span></a>
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


    <div class="box"> <!--container==box-->
   
   <h1>Chicken Details</h1>

   <form action="chicken.php" method="post">
       
       <b>Chicken Name</b><br>
       <input class="inputclass" type="text" name="cname" id="cname" placeholder="Enter Chicken Name" required><br>

       <b>Chicken Ammount</b><br>
       <input class="inputclass" type="text" name="cstock" id="cstock" placeholder="Chicken Stock" required><br>

       <b>Eggs Stock</b><br>
       <input class="inputclass" type="text" name="estock" id="estock" placeholder="Egg Stock" required><br>

        <button type="submit" class="btn btn-success inputclass" value="Add" name="add" id="add">ADD</button><br>
        <button type="reset" class="btn btn-danger" value="RESET" name="reset" id="Reset">Reset</button>

       
       
   </form>
            <?php
    }
    else
    {
        /// back to loginpage.php
        echo"<script>
            location.assign('loginpage.php');
            </script> ";
    }
    
?>