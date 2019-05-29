
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--<form class="" action="" method="post" target="_top">
      <input type="text" name="name" value="" placeholder="Username">
      <br><br><br>
      <input type="password" name="password" value="" placeholder="Password">
      <br><br><br>
      <input type="submit" name="" value="Submit">
      <br><br>
    </form>-->

    <script src="jquery-2.1.3.min.js" charset="utf-8"></script>

    <form >
    <input type="text" name="name" id="name">
    <input type="password" name="descr" id="descr">
    <input type="submit" name="" value="submit" onclick="return clickButton();">
    </form>
    <script type="text/javascript">
    function clickButton(){
    var name=document.getElementById('name').value;
    var descr=document.getElementById('descr').value;
    $.ajax({
            type:"post",
            url:"ex.php",
            data:
            {
               'name' :name,
               'descr' :descr
            },
            cache:false,
            success: function(data)
            {
               //alert('Data Send');
               $('#msg').html(data);
               //document.getElementById('#msg').innerHTML = 'html';
            }
            });
            return false;
     }
    </script>
    <p id="msg"></p>
  </body>
</html>
<?php
//$_SESSION['name'] = $_POST['name'];
if (empty($_POST)===false) {
  // code...
  $name = $_POST['name'];
  $descr = $_POST['descr'];
  //$name = $_SESSION['name'];
  echo $name;
  echo $descr;
}
?>
