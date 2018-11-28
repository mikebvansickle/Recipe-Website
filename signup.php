<?php
session_start();
include_once 'header.php';
?>

  <body class="text-center">
  <?php
    if(isset($_SESSION['u_id'])){ ?>
      <form class="form-signin" method="POST" action="includes/logout.inc.php">
        <h1 class="h3 mb-3 font-weight-normal"><?php echo 'Logged in as: '.$_SESSION['u_uid']; ?></h1>
        <p class="mt-5 mb-3 text-muted" style="margin-top: 1rem !important;">If this account does not belong to you, please logout and login or create your own personal account.</p>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Logout</button>
        </form>
  <?php }else{ ?>
    <form class="form-signin" _lpchecked="1" method="POST" action="includes/signup.inc.php">
      <img class="mb-4" src="./content/site-icon.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Account Information</h1>
      <label for="inputFName" class="sr-only">First Name</label>
      <input type="text" name="first" id="inputName" class="form-control" placeholder="First Name" required="" autofocus="" autocomplete="off" style="background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
      <label for="inputLName" class="sr-only">Last Name</label>
      <input type="text" name="last" id="inputName" class="form-control" placeholder="Last Name" required="" autofocus="" autocomplete="off" style="background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
      <label for="inputEmail" class="sr-only">Username/Email address</label>
      <input type="email" name="uid" id="inputEmail" class="form-control" placeholder="Username/Email address" required="" autofocus="" autocomplete="off" style="background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
      <label for="inputuid" class="sr-only">Last Name</label>
      <input type="text" name="uid" id="inputUsername" class="form-control" placeholder="Username" required="" autofocus="" autocomplete="off" style="background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required="" autocomplete="off" style="background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Create Account</button>
      <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
    </form>


  <?php }
    include_once 'footer.php';
  ?>
