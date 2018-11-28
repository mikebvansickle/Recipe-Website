<?php
session_start();
include_once 'header.php';
?>

  <body class="text-center" id="addrecipe">
  <?php
    if(isset($_SESSION['u_uid'])){ ?>
      <form class="form-addrecipe" _lpchecked="1" method="POST" action="includes/signup.inc.php">
        <img class="mb-4" src="./content/site-icon.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Recipe Information</h1>
        <label class="sr-only">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Title" required="" autofocus="" autocomplete="off" style="background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
        <label class="sr-only">Summary</label>
        <textarea cols="200" rows="3"  type="text" name="recipe-summary" class="form-control" placeholder="Summary" required="" autofocus="" autocomplete="off" style="background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;"></textarea>
        <label class="sr-only">Ingredients</label>
        <textarea cols="200" rows="5"  type="text" name="ingredients" class="form-control" placeholder="Add ingredients as a comma separated list" required="" autofocus="" autocomplete="off" style="background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;"></textarea>
        <label class="sr-only">Instructions</label>
        <textarea cols="200" rows="5" type="text" name="instructions" class="form-control" placeholder="Enter instructions on individual lines" required="" autofocus="" autocomplete="off" style="background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;"></textarea>
        <!-- <label for="inputPassword" class="sr-only">Additional Notes</label>
        <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required="" autocomplete="off" style="background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"> -->
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Add Recipe!</button>
        <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
      </form>
  <?php }else{ ?>
    <form class="form-addrecipe" method="POST" action="login.php">
      <h1 class="h3 mb-3 font-weight-normal"><?php echo 'Logged in as: '.$_SESSION['u_uid']; ?></h1>
      <p class="mt-5 mb-3 text-muted" style="margin-top: 1rem !important;">You must be logged in to submit a recipe!</p>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
      <p class="mt-5 mb-3" style="color:#000;">Don't have an account? <a href="signup.php"><span style="text-decoration:underline">Create one!</span></a></p>
    </form>


  <?php }
    include_once 'footer.php';
  ?>
