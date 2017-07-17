<?php
session_start();
require_once('dbconfig.php');
//phpinfo();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rigister</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">


    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="styles/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="styles/bootstrap-responsive.min.css">

    <link href="https://fonts.googleapis.com/css?family=Heebo" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/animate.css">

    <script src="js/html5shiv.js"></script>
    <script src="js/respond.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]>

        <!-- Favicon and touch icons -->


</head>

<body>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header">
            <a href="new.html" class="navbar-brand">
                <div class="logo">
                    <img src="img/logowhite.png" alt="logo">
                </div>
            </a>
        </div>

        <div class="navbar-collapse collapse" aria-expanded="false" style="height: 0px;">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="prices.html" data-toggle="modal" data-target="#myModal">מחירון</a></li>
                <li><a href="#contact" data-toggle="modal" data-target="#contactModal">צור קשר <i class="fa fa-phone"></i></a></li>
                <li><a href="register.php">הרשמה</a></li>
                <li><a href="index.php">התחברות</a></li>
            </ul>
        </div>

    </div>
</div>
<section id="slider" class="text-center">
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="item active">
                    <h1></h1>
                    <h2></h2>
                </div>
            </div>

        </div>
    </div>
</section>

    <form action="register.php" method="post">

        <div class="inner_container">
            <label><b>Email</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <label><b>Confirm Password</b></label>
            <input type="password" placeholder="Enter Password" name="cpassword" required>
            <label><b>first name</b></label>
            <input type="text" placeholder="Enter first name" name="first" required>
            <label><b>last name</b></label>
            <input type="text" placeholder="Enter last name" name="last" required>
            <label><b>phone</b></label>
            <input type="text" placeholder="Enter phone" name="phone" required>
            <label><b>Address</b></label>
            <input type="text" placeholder="Enter address" name="address" required>

            <button name="register" class="sign_up_btn" type="submit">Sign Up</button>

            <a href="index.php"><button type="button" class="back_btn"><< Back to Login</button></a>
        </div>
    </form>

    <?php
    if(isset($_POST['register']))
    {
        @$username=$_POST['username'];
        @$password=$_POST['password'];
        @$cpassword=$_POST['cpassword'];
        @$first=$_POST['first'];
        @$last=$_POST['last'];
        @$phone=$_POST['phone'];
        @$address=$_POST['address'];


        if($password==$cpassword)
        {
            $query = "select * from tbluser where username='$username'";
            //echo $query;
            $query_run = mysqli_query($con,$query);
            //echo mysql_num_rows($query_run);
            if($query_run)
            {
                if(mysqli_num_rows($query_run)>0)
                {
                    echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
                }
                else
                {
                    $query = "insert into tbluser values($first,$last,$username,$phone,$password,$address)";

                    $query_run = mysqli_query($con,$query);
                    if($query_run)
                    {
                        echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
                        $_SESSION['username'] = $username;
                        $_SESSION['password'] = $password;
                        $_SESSION['first'] = $first;
                        $_SESSION['last'] = $last;
                        $_SESSION['phone'] = $phone;
                        $_SESSION['address'] = $address;

                        header( "Location: homepage.php");
                    }
                    else
                    {
                        echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
                    }
                }
            }
            else
            {
                echo '<script type="text/javascript">alert("DB error")</script>';
            }
        }
        else
        {
            echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
        }

    }
    else
    {
    }
    ?>
</div>
</body>
</html>