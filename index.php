<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include "constants.php";
include 'models/dbConnection.php';

include "library/utils/loginCheck.php";
include "library/utils/sendMail.php";
isLoggedOut();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Natura Salon || Home Page</title>
    <!-- Bootstrap -->
    <link href="assets3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="assets3/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js "></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js "></script>
<![endif]-->
</head>

<body>
    <?php include_once('templates/header.php');?>
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h1 class="hero-title">Natura Salon</h1>
                    <p class="hero-text"><strong>Welcome to Natura Salon— where guests can expect nothing less than perfection. Whether you are seated in one of our salon chairs or tucked away in our luxurious starlight lathering lounge, our salon space was specifically designed for your relaxation and comfort. We deliver experiences uniquely tailored to you. </strong> </p>
                    <a href="appointment.php" class="btn btn-default">Make an Appointment</a> </div>
            </div>
        </div>
    </div>
   
    <div class="space-medium bg-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><img src="assets3/images/ab.jpg" alt="" class="img-responsive"></div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="well-block">
                        <?php

    $sql = "select * from pages where PageType='aboutus' ";
    $result = $conn->query($sql);

      while($row = $result->fetch_assoc()) { ?>

                        <h1><?php  echo $row['PageTitle'];?></h1>
                        <h5 class="small-title ">best experience ever</h5>
                        <p><?php  echo $row['PageDescription'];?></p><?php } ?>
                         </div>
                </div>
            </div>
        </div>
    </div>
   
   
    <?php include_once('templates/footer.php');?>
    <!-- /.footer-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets3/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets3/js/bootstrap.min.js"></script>
    <script src="assets3/js/menumaker.js"></script>
    <!-- sticky header -->
    <script src="assets3/js/jquery.sticky.js"></script>
    <script src="assets3/js/sticky-header.js"></script>
</body>

</html>
