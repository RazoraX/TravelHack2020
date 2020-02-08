<?php require_once 'init.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/Favicon.ico" type="image/x-icon">


    <?php
    $block = explode('.', $page);
    require_once 'metaBlocks/'.$block[0].'.html';?>


    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Js for animations -->
    <link rel="stylesheet" href="css/wowanimate.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>

    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="twinparty-loader"></div>

<div id="page">
    <nav class="twinparty-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-10 menu-1">
                        <ul>
                            <li <?php
                            $urlArray = explode('/', $url);
                            if (strpos($url, 'index.php') !== false || $urlArray[1] == '') { ?> class="active" <?php } ?>>
                                <a href="index.php">Главная</a></li>
                            <li <?php if (strpos($url, 'child.php') !== false) { ?> class="active" <?php } ?>><a
                                        href="child.php">Школьникам</a></li>
                            <li <?php if (strpos($url, 'parents.php') !== false) { ?> class="active" <?php } ?>><a
                                        href="parents.php">Родителям</a></li>
                            <li <?php if (strpos($url, 'teach.php') !== false) { ?> class="active" <?php } ?>><a
                                        href="teach.php">Педагогам</a></li>
                            <li <?php if (strpos($url, 'contact.php') !== false) { ?> class="active" <?php } ?>><a
                                        href="contact.php">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="col-md-offset-1 col-xs-1">
                        <img class="top-menu_img" src="images/dep_tour1.png" alt="">
                    </div>
                </div>
            </div>
        </div>

    </nav>
