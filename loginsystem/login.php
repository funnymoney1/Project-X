<?php
include 'core/init.php';

//echo "hey this is login.php /pro/login";
if (empty($_POST)===false) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  //echo $username,$password;

  if (empty($username)===true||empty($password)===true) {
    $errors[] = 'You Need to Enter your  username and password';
  } else if (user_exists($username)===false) {
    $errors[] = 'We can\'t find your username. Have you registerd? ';
  }else if (user_active($username) === false) {
    $errors[] = 'You haven\'t Activated your Account!';
  }else {
    if (strlen($password) > 32) {
      $errors[] = 'Password Too Long';
    }
    $login = login($username , $password);
    if ($login === false) {
      $errors[] = 'The Combination of Username and Password is incorrect';
    } else {
      $_SESSION['user_id'] = $login;
      //echo $login;
      header('location: index.php');
      exit();
    }
  }
}else {
  $errors[] = 'NO Data received';
}
include 'includes/overall/header.php';
if (empty($errors) === false) {
  ?>

  <h2>We tried to log you in, but...</h2>

  <?php
  echo output_errors($errors);
}
include 'includes/overall/footer.php';
 ?>
