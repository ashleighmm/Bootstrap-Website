<?php 
$activePage = basename($_SERVER['PHP_SELF'], ".php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Dreamcatcher Multimedia</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="assets/js/modernizr.js"></script>
  </head>

  <body>
  

<div id="carousel-example-generic-1" class="carousel slide" data-ride="carousel"> 
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic-1" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic-1" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic-1" data-slide-to="3"></li>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="carousel-caption">
            <h3><a href="http://www.dreammultimedia.co.za"><img src="assets/img/logo_trans.png" class="img-responsive" alt="Dreamcatcher Multimedia" title="Dreamcatcher Multimedia"/></a></h3>
        </div>
        <div class="item active"> <img src="assets/img/main/2.jpg" alt="..." class="main-img"> </div>
        <div class="item"> <img src="assets/img/main/DSCF7611.jpg" alt="..." class="main-img"> </div>
        <div class="item"> <img src="assets/img/main/Dreamcatcher-Owners-Phindi-and-Marang.jpg" alt="..." class="main-img"> </div>
        <div class="item"> <img src="assets/img/main/9.JPG" alt="..." class="main-img"> </div>
    </div>
    
    <!-- Controls --> 
    <a class="left carousel-control" href="#carousel-example-generic-1" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href="#carousel-example-generic-1" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
<!-- Carousel --> 

<!-- Fixed navbar -->
<div class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">HOME</a></li>
                <li class="<?= ($activePage == 'about') ? 'active':''; ?>"><a href="about.php">ABOUT US</a></li>
                <li class="<?= ($activePage == 'pr') ? 'active':''; ?>"><a href="pr.php">PR</a></li>
                <li class="<?= ($activePage == 'events') ? 'active':''; ?>"><a href="events.php">EVENTS</a></li>
                <li class="<?= ($activePage == 'conferences') ? 'active':''; ?>"><a href="conferences.php">CONFERENCES</a></li>
                <li class="<?= ($activePage == 'gallery') ? 'active':''; ?>"><a href="gallery.php">GALLERY</a></li>
                <li class="<?= ($activePage == 'contact') ? 'active':''; ?>"><a href="contact.php">CONTACT</a></li>
            </ul>
        </div>
        <!--/.nav-collapse --> 
    </div>
</div>
