<?php
  $errUserName = '';
  $errEmail = '';
  $errPassword = '';
  $successText = '';
  if (isset($_POST['register'])) {
    $success = true;
    if ($_POST['username'] == '') {
      $errUserName = "<span style='color: red'>Field is required!</span>";
      $success = false;
    }
    if ($_POST['email'] == '') {
      $errEmail = "<span style='color: red'>Field is required!</span>";
      $success = false;
    }
    if ($_POST['password'] == '') {
      $errPassword = "<span style='color: red'>Field is required!</span>";
      $success = false;
    }
    if ($success) {
      $successText = "<p style='color: blue'>Register successful!</p>";
    }
  }
?>
<h1>Form Example</h1>
<form name="registerForm" action="form.php" method="POST">
  <p>Email: <input type="text" name="email" /> <?php echo $errEmail; ?></p>
  <p>Username: <input type="text" name="username" /> <?php echo $errUserName; ?></p>
  <p>Password: <input type="password" name="password" /> <?php echo $errPassword; ?></p>
  <button type="submit" name="register">Register</button>
  <?php echo $successText; ?>
</form>