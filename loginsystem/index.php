<?php
include 'core/init.php';
include 'includes/overall/header.php'; ?>
      <h1>Home</h1>
      <p>Just A template.</p>

<?php
if (isset($_SESSION['user_id'])) {
  echo 'Logged in';
} else {
  echo 'Not Logged In';
}

 ?>
 <br>
 <br>
<a href="logout.php">logout</a>
<br><br><br>
<div class="payment-container">
  Rs. 300/-
  <a href="pay.php">Pay Now</a>
</div>
<?php include 'includes/overall/footer.php'; ?>
