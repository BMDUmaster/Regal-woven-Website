<?php
   ob_start();
   session_start();
   $page_url = basename(__FILE__);
   ?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Page Not Found - Regal Woven</title>
    <meta name="description"
        content="Oops! The page you are looking for does not exist. Visit Regal Woven for premium woven products." />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,500i,700,700i,900" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=6">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="css/all.min.css" media="all">
    <link rel="stylesheet" href="css/owl.carousel.min.css" media="all">
    <link rel="stylesheet" href="css/light-box.css" media="all">
    <link rel="stylesheet" href="css/tp-animation.css" media="all">
    <link rel="stylesheet" href="css/style.css" media="all">
    <link rel="stylesheet" href="css/responsive.css" media="all">
    <link rel="shortcut icon" href="images/logo1 favicon.png">
    <link rel="canonical"  href="https://www.regalwoven.com/contact.php"/>

    <?php include 'includes/above-head.php' ?>
</head>

<body>

    <!-- perload section -->
    <div id="preloader">
        <div id="preloader-inner"></div>
    </div>
    <!-- header section -->
    <?php include 'includes/header.php' ?>

<div class="container">
<div class="col-md-12 text-center"> <img src="images/404.png"></div>

</div>

    <!-- footer -->
    <?php include 'includes/footer.php' ?>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBNhRP-ga9203Gpv0Rr6v7TqRGDywOrlQ&amp;callback=initMap">
    </script>
    <!-- js library including -->
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/masonary.min.js"></script>
    <script src="js/multipleFilterMasonry.js"></script>
    <script src="js/noframework.waypoints.min.js"></script>
    <script src="js/light-box.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/progressbar.min.js"></script>
    <script src="js/index.js"></script>

    <?php include 'includes/above-body.php' ?>
</body>


</html>