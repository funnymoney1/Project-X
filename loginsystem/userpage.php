<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/usercss.css">
    <title>Logged In</title>
  </head>
  <body>
    <div class="conainer-fluid firstcont">
      <div class='row firstdiv'>
        Hi.. <?php session_start(); echo $_SESSION['user_na']; ?> get your content here.
        <span class="lgout">LogOut</span>
      </div>
      <div class="">

      </div>
    </div>
  </body>
</html>
<?php
if (isset($_POST['name'])&&isset($_POST['password'])) {
  $username = $_POST['name'];
  $password = $_POST['password'];
  echo "Enterd Username - " . "<br/>" . $username . "<br/>" . "<br/>" . "<br/>";
  echo "Enterd Password - " . "<br/>" . "<br>" . $password . "<br/>" . "<br/>" . "<br/>";
  ?>
  <!--<iframe src="web.php" width="200px" height="200px">
    Hello world..
    <div class="">
      hi Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
      magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
       Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
       Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
  </iframe>-->
  <?php
}
 ?>
