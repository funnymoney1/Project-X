<?php


  //$username = sanitize($username);
  $mysql = mysqli_connect('localhost','root');

  mysqli_select_db($mysql,'user_info');

  $dbs = "select * from login_data where Firstname = 'Yuvraj'  ";

  $query = mysqli_query($mysql,$dbs);

  $rows = mysqli_num_rows($query);
  //$rows = mysqli_result($query,0);
  //$re = mysqli_($query,0);
  echo 'see rows value - '.$rows.'<br>';
  //echo 'Re - '.'<br>'.$re.'<br>';
  if($rows == 1)
  { echo 'done' ; }
  else
  { echo 'no..' ; }

  $search = 'om';
  $row = 1;

 ?>
 <!--
-->
