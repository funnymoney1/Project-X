<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/styleslogin.css'>
    <title>Login </title>
  </head>
  <?php
  include 'core/init.php';
  //include 'includes/overall/header.php';
  ?>
  <body>
    <div class='containers'>
      <div class="maindiv">
        <br>
        <div id='imgid'>
          <img src="logo1234.png" alt="logo" />
        </div>
        <div id='loginh1'>Login</div>
        <br>
        <div id='loginh2'> with your E-mail Account </div>
        <br>
        <form action='valid().php' method="post">
          <div class='label1'>USER-ID </div>
          <input class='emailbox' type="text" name="username" placeholder='' >
          <br><br>
          <div  class='label2'> Password </div>
          <input class='pswdbox' type="password" name="password" placeholder='' required>
          <br><br>
          <input class='sub1' type="submit" value="NEXT"><br><br>
        </form>
        <div class='signinlink'>
          <a href="signinpage.php">Need An Account?</a>
        </div>
        </div>
      </div>
  </body>
</html>
