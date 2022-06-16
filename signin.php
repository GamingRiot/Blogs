<?php
session_start();
include "db.php";
if (isset($_REQUEST['signin'])) {
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $query = "SELECT * FROM users WHERE email='$email'";
  $select_query = mysqli_query($conn, $query);
  foreach ($select_query as $value) {
    $pswd_match = password_verify($password, $value['password']);
    if ($pswd_match) {
      $_SESSION['email'] = $email;
      $_SESSION['username'] = $value['username'];
      $_SESSION['user_id'] = $value['id'];
      header("Location:index.php");
      exit();
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include 'bootstrap.php'
  ?>

  <title>Sign in</title>
</head>

<body>
  <?php
  include "navbar.php";
  ?>
  <div class="container mt-5">
    <?php if (isset($_REQUEST['user'])) { ?>
      <?php if ($_REQUEST['user'] == "added") {
      ?>
        <div class="alert alert-success" role="alert">
          Successfully registered!
        </div>
      <?php } ?>
    <?php } ?>

    <h1 class="add-title" style="text-align:center" class="mt-5">
      Sign In
    </h1>
    <div class="mt-5" style="width:500px;margin:0 auto;">
      <form method="POST" action="">
        <div class="mb-3">
          <label for="email" class="form-label add-header">Email</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label add-header">Password</label>
          <input type="password" class="form-control" name="password">
        </div>
        <input type="submit" value="Sign In" name="signin" class="btn btn-primary">
      </form>
    </div>
  </div>
</body>

</html>
