<?php 
    session_start();

    $db = mysqli_connect("localhost", "root", "", "tubes_web");

?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Sushi Knight</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
        <link class="filecss" rel="stylesheet" href="css/flaticon.css" />

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

        <!-- Animate -->
        <link class="filecss" rel="stylesheet" href="css/animate.css">
        <!-- Bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- Color style -->
        <link class="filecss" rel="stylesheet" href="css/color.css">
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="css/custom.css" />
        <?php
        $file = htmlspecialchars($title); ?>
        <link rel="stylesheet" href="css/<?php echo $file ?>.css">
    </head>
    <body data-spy="scroll" data-target="#navbar-menu" data-offset="100">

        <!-- Preloader --> 
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_five"></div>
                    <div class="object" id="object_six"></div>
                    <div class="object" id="object_seven"></div>
                    <div class="object" id="object_eight"></div>
                    <div class="object" id="object_big"></div>
                </div>
            </div>
        </div>
        <!--End Preloader -->
        <!-- Navbar -->
        <nav class="navbar navbar-default navbar-sticky navbar-scrollspy bootsnav" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">
            <div class="container">  
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="images/file.png" class="logo" alt="Sushi Knight"></a>
                </div>
                <div class="widget">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="kategori.php"><h2>Menu</h2></a></li>
                        <li><a href="delivery.php"><h2>Delivery</h2></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php 
                          if(isset($_SESSION['logged']) == 'True')
                            {
                                if (isset($_SESSION['username'])) {
                                  echo '<li class="dropdown"> <a data-toggle="dropdown" href="#"> <h2> '.$_SESSION["username"].' </h2></a> 
                                            <ul class="dropdown-menu">
                                                <li><a href="logout.php">Logout</a></li>                       
                                            </ul>
                                        </li>';
                                }
                                  echo '<li> <a href="cart.php"> <span class="glyphicon glyphicon-shopping-cart"></span> </a> </li>';
                            }
                          else
                            {
                              echo '<li> <a href="login.php"> <h2>Login</h2></a> </li>';
                            }
                          ?>
                    </ul>
                </div>
            </div>
                <!-- End Header Navigation -->
            </div>
        </nav>
