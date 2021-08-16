<?php 
        // DB connection
        $conn = mysqli_connect('localhost','root','','poultrynew') ;
        
        if(!$conn){
            die("Not Connected" . mysqli_error($conn)) ;
        }

        if(isset($_REQUEST['edit_id']))
        {
            $rcv_id = $_REQUEST['edit_id'] ;
            
            $get_info = "SELECT * FROM user WHERE user_id = $rcv_id " ;
            
            $run_get_info = mysqli_query($conn,$get_info);
            
            $count = mysqli_num_rows($run_get_info);
            
            while( $row = mysqli_fetch_assoc( $run_get_info ) )
            {
                
?>

<!doctype html>
<html lang="en">

<head>
    <title>Account Information</title>

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
                            <a class="nav-link" href="home.php"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
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
   
            <h1>UPDATE FORM</h1>

            <form action="updatedata.php" method="post">
   
                <b>USERNAME</b><br>
                <input class="inputclass" type="text" value="<?php echo $row['username'] ?>" name="uname" id="uname" autocomplete="off"><br>
                
                <b>USER EMAIL</b><br>
                <input class="inputclass" value="<?php echo $row['useremail'] ?>" type="text" name="uemail" id="uemail" autocomplete="off"><br>
                
                <b>PHONE NUMBER</b><br>
                <input class="inputclass" value="<?php echo $row['phone'] ?>" type="text" name="phone" id="phone" autocomplete="off"><br>
                
                <b>PASSWORD</b><br>
                <input class="inputclass" value="<?php echo $row['password'] ?>" type="text" name="password" id="password" autocomplete="off"><br><br>
                
                <input type="file" value="<?php echo $row['profile_pic'] ?>" name="upload_img" id="upload_img"><br><br>
                
                <input class="btn btn-primary" type="submit" value="Update Data" name="update" id="update"><br>
                
                <input type="hidden" name="update_hidden_id" value="<?php echo $rcv_id ?>" >
                
            </form>
        
    </div>

             
            
            
<?php
            }
        }

?>
        
