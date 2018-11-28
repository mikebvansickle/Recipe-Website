<?php
session_start();
include_once 'header.php';
?>
  <body class="text-center" id="recipe-search">
      <form class="form-recipe-search" _lpchecked="1" method="POST" action="includes/recipe-search.inc.php">
        <img class="mb-4" src="./content/site-icon.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Find your new favorite recipe!</h1>
        <label class="sr-only">Search</label>
        <input type="text" name="search" class="form-control" placeholder="Search by title or keywords!" required="" autofocus="" autocomplete="off" style="background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Search</button>
      </form>
<?php
    include_once 'footer.php';
  ?>
