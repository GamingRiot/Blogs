<?php
include "db.php";
if (isset($_POST['signup'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $pswd = $_POST['password'];
  $pswd_hash = password_hash("$pswd", PASSWORD_DEFAULT);
  $query = "INSERT INTO users(username, email ,password) VALUES('$username','$email','$pswd_hash')";
  $insert_user = mysqli_query($conn, $query);
  if ($insert_user) {
    header("Location:signin.php?user=added");
    exit();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include 'bootstrap.php'
  ?>
  <title>Sign up</title>
</head>

<body>
  <?php
  include "navbar.php";
  ?>
  <div class="container">
    <h1 class="add-title" style="text-align:center" class="mt-5">
      Sign Up
    </h1>
    <div class="mt-5" style=" width:500px;margin:0 auto;">
      <form method="POST" action="">
        <div class="mb-3">
          <label for="username" class="form-label add-header">Username</label>
          <input type="text" class="form-control" name="username">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label add-header">Email</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label add-header">Password</label>
          <input type="password" class="form-control" name="password">
        </div>
        <input type="submit" value="Sign Up" name="signup" class="btn btn-primary">
      </form>
    </div>
  </div>
</body>

</html>
