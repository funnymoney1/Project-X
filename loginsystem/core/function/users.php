<?php

function logged_in()
{
  return (isset($_SESSION['user_id'])) ? true : false;
}

function user_exists($username)
{
  $username = sanitize($username);
  $mysql = mysqli_connect('localhost','root');
  mysqli_select_db($mysql,'user_info');
  $db = "select * from pro where username = '$username' ";
  $query = mysqli_query($mysql,$db);
  $rows = mysqli_num_rows($query);
  //$re = mysqli_result($query,0);

  if($rows == 1)
  {return true;}
  else
  {return false;}
}
//(mysqli_fetch_array($query, 0 ) == 1) ? true : false

function user_active($username)
{
  $username = sanitize($username);
  $mysql = mysqli_connect('localhost','root');
  mysqli_select_db($mysql , 'user_info');
  $db = "select * from pro where username = '$username' and active = 1";
  $query = mysqli_query($mysql,$db);
  $rows = mysqli_num_rows($query);
  //$re = mysqli_result($query,0);
  if($rows == 1)
  {return true;}
  else
  {return false;}
 }

 function user_id_from_username($username)
 {
   $username = sanitize($username);
   $mysql = mysqli_connect('localhost','root');
   mysqli_select_db($mysql,'user_info');
   $db = "select * from pro where username = '$username' ";
   $query = mysqli_query($mysql,$db);
   $row = mysqli_fetch_array($query);
   $userid = $row['user_id'];
   return $userid;
 }

 function login($username,$password)
 {
   $user_id = user_id_from_username($username);
   $username = sanitize($username);
   $password = md5($password);
   $mysql = mysqli_connect('localhost','root');
   mysqli_select_db($mysql , 'user_info');
   $db = "select * from pro where username = '$username' and passsword = '$password' ";
   $query = mysqli_query($mysql,$db);
   $rows = mysqli_num_rows($query);
   //$re = mysqli_result($query,0);
   if($rows == 1)
   {return $user_id;}
   else
   {return false;}
   //return (mysqli_result(mysqli_query("select count(user_id) from users where username = '$username' and password = $password"),0)==1) ? $user_id : false;
 }
 ?>
