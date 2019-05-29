
<html>
<head>

    <link rel = 'stylesheet' href='css/usercss1.css'>
    <style>
    body{
     background-image: url(css/fox_stone_fire_paper_figures_9338_1920x1080.png);
    }
    </style>
</head>
<body>

    <div id='firstdiv'>
    Hi.. <?php session_start(); echo $_SESSION['user_na']; ?> get your content here.
    </div>

    <div class="logout">
      <a href="logout2.php">logout</a>
    </div>

    <div id='linksid'>
        <a href='https://www.sololearn.com/Certificate/1024-1331931/pdf/' id='l1'>Java Script Certificate</a>
         <br>
       <a href='https://www.sololearn.com/Certificate/1023-1331931/pdf/' id='l2'>Css Certificate</a>
         <br>
        <a href='https://www.sololearn.com/Certificate/1059-1331931/pdf/' id='l3'>PHP Certificate</a>
         <br>
        <a href='https://www.sololearn.com/Certificate/1060-1331931/pdf/' id='l4'>SQL Certificate</a>
         <br>
    </div>

<!--<fieldset class='field'>
  <legend> Upload Your Data</legend>
      <form action='userpage.php' method='POST' enctype='multipart/form-data'>
       <input type='file'  name="file"  id='id2'/>
       <input type='submit' value='SUBMIT' id='bt1' />
      </form>
</fieldset>-->
</body>
</html>
<?php
 $name = $_FILES['file']['name'];
 $size = $_FILES['file']['size'];
 $temp = $_FILES['file']['tmp_name'];

if(isset($name)){
echo $name.'<br>';
echo $size.'<br>';
echo $temp.'<br>';
}
?>
