<?php
if (empty($_POST)===false) {
  // code...
  echo $_POST['name'] ."<br />";
  echo $_POST['email'] ."<br />";
  echo $_POST['phone'] ."<br />";
  //echo $_POST['gender'] ."<br />";
  echo "==============================<br />";
  echo "All Data Submitted Successfully!";

}else {
  //$errors[] = 'NO Data received';
  echo "NO Data received";
}
?>
