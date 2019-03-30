<aside >
  <?php
  if (logged_in() === true) {
    echo "Logged In";
  }else {
    include 'includes/widget/login.php';
  }
   ?>
</aside>
