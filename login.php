<?php
session_start();
include 'header.php';
?>
  <body class="text-center">
  <?php
    if(isset($_SESSION['u_id'])){ ?>
      <form class="form-signin" method="POST" action="includes/logout.inc.php">
        <h1 class="h3 mb-3 font-weight-normal"><?php echo 'Logged in as: '.$_SESSION['u_uid']; ?></h1>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Logout</button>
        </form>
  <?php }else{ ?>
    <form class="form-signin" _lpchecked="1" method="POST" action="includes/login.inc.php">
      <img class="mb-4" src="./content/site-icon.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Username/Email address</label>
      <input type="email" name="uid" id="inputEmail" class="form-control" placeholder="Username/Email address" required="" autofocus="" autocomplete="off" style="background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required="" autocomplete="off" style="background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
      <p class="mt-5 mb-3" style="color:#000;">Don't have an account? <a href="signup.php"><span style="text-decoration:underline">Create one!</span></a></p>
      <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
    </form>
  <?php } ?>
<!--
    <form method="POST" action="includes/login.inc.php">
      <input type="text" name="uid" placeholder="Username/Email" />
      <input type="password" name="pwd" placeholder="password" />
      <button type="submit" name="submit">Login</button>
    </form>
-->
</body></html>
