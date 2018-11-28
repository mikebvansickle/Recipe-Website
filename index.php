<?php session_start(); ?>
<!DOCTYPE html>
<!-- saved from url=(0052)https://getbootstrap.com/docs/4.1/examples/carousel/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/index/carousel.css" rel="stylesheet">
    <!-- Custom global styling -->
    <link href="./css/custom.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <?php if($_SESSION['u_uid']){ ?><a class="navbar-brand" href="index.php">
        <i class="material-icons w3-large" style="font-size:30px !important; vertical-align:-30%;">perm_identity</i>&nbsp;&nbsp;<?php echo 'Welcome back, '.$_SESSION['u_first']; ?></a><form method="POST" action="includes/logout.inc.php">
          <button class="logout-btn" name="submit" type="submit"><i class="material-icons w3-large" style="vertical-align:-20%;">power_settings_new</i>&nbsp;Logout</button>
        </form>
        <?php }else{ ?>
          <a class="navbar-brand" href="login.php"><i class="material-icons w3-large" style="font-size:30px !important;vertical-align:-30%;">how_to_reg</i>&nbsp;&nbsp;Login / Signup
        <?php } ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"><i class="material-icons w3-large" style="vertical-align:-20%;">home</i>&nbsp;Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href=""><i class="material-icons w3-large" style="vertical-align:-20%;">local_dining</i>&nbsp;Latest Recipes</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="addrecipe.php"><i class="material-icons w3-large" style="vertical-align:-20%;">cloud_upload</i>&nbsp;&nbsp;Submit a Recipe!</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0" method="POST" action="includes/recipe-search.inc.php">
            <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search for a Recipe" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit"><i class="material-icons w3-large" style="vertical-align:-20%;">search</i>&nbsp;Search</button>
          </form>
        </div>
      </nav>
    </header>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="hero-image-1">
              <div class="container">
                <?php if($_SESSION['u_uid']){ ?>
                  <div class="carousel-caption text-left">
                    <h1>Featured Recipe</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="signup.php" role="button">Search for a recipe!</a></p>
                  </div>
              <?php }else{ ?>
                <div class="carousel-caption text-left">
                  <h1>Join us here at &lt;site-name&gt;.</h1>
                  <p>By joining as a user for free you can submit recipes, join groups, and follow users to be alerted when they upload new recipes!</p>
                  <p><a class="btn btn-lg btn-primary" href="signup.php" role="button"><i class="material-icons w3-large" style="font-size:30px !important;vertical-align:-30%;">how_to_reg</i>&nbsp;&nbsp;Sign up today</a></p>
                </div>
              <?php } ?>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="hero-image-2">
            <div class="container">
              <div class="carousel-caption">
                <h1>Create an extensive recipe book.</h1>
                <p>By joining groups on &lt;site-name&gt; and following specific users, you can create a community of people with a passion for cooking and sharing your favorite recipes.</p>
                <p><a class="btn btn-lg btn-primary" href="index.php#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          </div>
          <div class="carousel-item">
            <div class="hero-image-3">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Experience the cultures of the world.</h1>
                <p>Spice up your family dinners with authentic recipes from other cultures all around the world. &lt;site-name&gt; is a great place to diversify your pallet by experimenting with fun new meals.</p>
                <p><a class="btn btn-lg btn-primary" href="index.php#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row" id="featured">
          <div class="col-lg-4">
            <img class="rounded-circle" src="content/chef-clipart.svg" alt="Generic placeholder image" width="140" height="140">
            <h2>Share or find new favorite recipes.</h2>
            <p>Any user can share their new favorite recipe for anyone to find! Higher activity will earn you badges that you can show off on your profile, come find your new favorite recipe!</p>
            <p><a class="btn btn-secondary" href="index.php#feature-1" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="content/globe.svg" alt="Generic placeholder image" width="140" height="140">
            <h2>Discover recipes from around the globe.</h2>
            <p>Discover authentic recipes from around the world! Not all of us are lucky enough to travel and enjoy the many cultures of the world, but we can certainly share the food.</p>
            <p><a class="btn btn-secondary" href="index.php#feature-2" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="content/community.svg" alt="Generic placeholder image" width="140" height="140">
            <h2>Build a community for cooking.</h2>
            <p>Over the course of your time using &lt;site-title&gt; you can follow other members in the community. You can create a great network of recipes to have at your disposal!</p>
            <p><a class="btn btn-secondary" href="index.php#feature-3" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette" id="feature-1">
          <div class="col-md-7">
            <h2 class="featurette-heading">lorem ipsum dolor sit amet. <span class="text-muted">Lorem Ipsum.</span></h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" id="feature-2">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">lorem ipsum dolor sit amet, consectetur adipiscing. <span class="text-muted">Lorem Ipsum.</span></h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="" data-holder-rendered="true" style="width: 500px; height: 500px;">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" id="feature-3">
          <div class="col-md-7">
            <h2 class="featurette-heading">lorem ipsum dolor. <span class="text-muted">Lorem ipsum dolor sit amet.</span></h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="" data-holder-rendered="true" style="width: 500px; height: 500px;">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="index.php#">Back to top</a></p>
        <p>© 2017-2018 Company, Inc. · <a href="index.php#">Example</a> · <a href="index.php#">Example 2</a></p>
      </footer>
    </main>

<?php include 'footer.php'; ?>
