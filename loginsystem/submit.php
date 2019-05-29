
<?php
/*
echo "string  ". $_SERVER['PHP_AUTH_DIGEST'];
//echo http_response_code();
//var_dump(http_response_code(404));

// Get the new response code
//var_dump(http_response_code());

if($_POST['firstname'] === 'uvi')
{
  echo 'Thank you '. $_POST['firstname'] . ' ' . $_POST['lastname'] . ', says the PHP file';
}else {
  //header('location: index.php');
  //header('HTTP/1.1 401 Unauthorized');
  //echo "string";
}
*/
?>


<?php
if (strlen($_POST['name']) !== 0) {
  echo $_POST['name'] ."<br />";
  echo $_POST['email'] ."<br />";
  echo $_POST['phone'] ."<br />";
  //echo $_POST['gender'] ."<br />";
  echo "==============================<br/><br/>";
  echo "All Data Submitted Successfully!";
  //header('location: ../web.php');
  var_dump(http_response_code(302));
  //header('HTTP/1.0 302 Unauthorized');
  header('location: index.php');
  //header('location: index.php','HTTP/1.0 302');
}else {
  $errors[] = 'NO Data received';
  //echo "NO Data received";
  echo $errors[0];
  //implode($errors); isset($_POST['username']) empty($_POST) === false isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['phone']) location: index.php
}

?>
