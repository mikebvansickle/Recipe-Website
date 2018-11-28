<?php session_start(); ?>
<!DOCTYPE html>
<!-- saved from url=(0050)https://getbootstrap.com/docs/4.1/examples/cover/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/cover.css" rel="stylesheet">
    <!-- Custom global styling -->
    <link href="./css/custom.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" id="landing-container">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">SITE TITLE</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="index.php#myCarousel">Home</a>
            <a class="nav-link" href="index.php#featured">Features</a>
            <a class="nav-link" href="contact.php">Contact Us</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <?php if($_SESSION['u_uid']){ ?>
          <h1 class="cover-heading">Welcome back.</h1>
          <p class="lead">Continue learning new recipes and be sure to share those recipes you learn about elsewhere!</p>
        <?php }else{ ?>
          <h1 class="cover-heading">Learn to cook while helping build a community.</h1>
          <p class="lead">Join the many users that have already found a passion (or a hobby) in cooking.</p>
          <p class="lead">Share homemade recipes, find new cooking tips and tricks, and fulfill that craving with a nice homemade meal!</p>
        <?php } ?>
        <?php if($_SESSION['u_uid']){ ?>
            <p class="lead">
              <a href="signup.php" id="landing-btn" class="btn btn-lg btn-secondary">Get Cooking!</a>
            </p>
        <?php }else{ ?>
          <p class="lead">
            <a href="index.php" id="landing-btn" class="btn btn-lg btn-secondary">Join the Community!</a>
          </p>
        <?php } ?>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Footer placeholder text.</p>
        </div>
      </footer>
    </div>

<?php include 'footer.php'; ?>
