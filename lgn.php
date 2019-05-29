<div class="bottomnav" id="mysidebnav">
    <a href="javascript:void(0)" class="closebtn" onclick="closebnav()">
      <div class="bottomclose">
        &laquo;
      </div>
    </a>

  <div class="containers">
    <div class="maindiv">
      <br>
      <?php //include 'loginsystem/core/init.php'; ?>
      <div id='imgid'>
        <!--<img src="logo1234.png" alt="logo" />-->
      </div>
      <div id='loginh1'>Login</div>
      <br>
      <div id='loginh2'> with your E-mail Account </div>
      <br>
      <form action='loginsystem/mlogin.php' method="post" >
        <div class='label1'>USER-ID </div>
        <input class='emailbox' type="text" name="username" placeholder='' >
        <br><br>
        <div  class='label2'> Password </div>
        <input class='pswdbox' type="password" name="password" placeholder='' required>
        <br><br>
        <!--<input class='sub1' type="submit" value="NEXT">-->
        <input class='sub1' type="button" id="submitFormData" onclick="SubmitFormData();" value="NEXT" />
        <br><br>
      </form>
      <div class='signinlink'>
        <a href="signinpage.php">Need An Account?</a>
      </div>
      <div id='prompt'>

      </div>
      </div>
    </div>

</div>

<?php //session_start();

if (empty($errors) === false) {
  //$message=$_SESSION['err1'];
  //echo $message;
  // echo "<script type='text/javascript'>alert('$message');</script>";
  // $inf=$_SESSION['valid_output'];
  //unset($_SESSION['err1']);
}
?>
