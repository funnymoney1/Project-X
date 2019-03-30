<?php
$connection_error = 'Sorry, we are experiencing Downtime .';
$mysql = mysqli_connect('localhost','root') or die($connection_error);
mysqli_select_db($mysql,'user_info') or die($connection_error);

 ?>
