<?php
session_start();
?>
<!DOCTYPE html>
<!-- saved from url=(0064)https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/ -->
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/index/carousel.css" type="text/css" rel="stylesheet">
    <!-- Custom styles for login/signup page -->
    <link href="./css/signin/signin.css" type="text/css" rel="stylesheet">
    <!-- Custom styles for fixed navbar/sticky footer -->
    <link href="./css/nav-footer/sticky-footer-navbar.css" type="text/css" rel="stylesheet">
    <!-- Custom global styling -->
    <link href="./css/custom.css" type="text/css" rel="stylesheet">
  </head>

  <body>
  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <?php if($_SESSION['u_uid']){ ?><a class="navbar-brand" href="index.php">
      <?php echo 'Welcome back, '.$_SESSION['u_uid'];
      }else{ ?>
        <a class="navbar-brand" href="login.php">Login / Signup
      <?php } ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Latest Recipes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="addrecipe.php">Submit a Recipe!</a>
              </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0" method="POST" action="includes/recipe-search.inc.php">
              <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search for a Recipe" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
            </form>
          </div>
        </nav>
      </header>
