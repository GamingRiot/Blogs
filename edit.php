<?php
include 'db.php';
if (isset($_POST['submit'])) {
  // If form is empty
  if (empty($_POST['title'])) {
    $title_err = "Title is required";
  }
  if (empty($_POST['description'])) {
    $desc_err = "Description is required";
  }
  // If form is ready to submit not use kia h maine
  if (!empty(($_POST['description']) && ($_POST['title']))) {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $query = "INSERT INTO entries(title,description) VALUES('$title','$desc')";
    $result_query = mysqli_query($conn, $query);
    if (!$result_query) {
      echo "Failed";
    } else {
      header("Location: list.php?result=added");
      exit();
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include 'bootstrap.php';
  ?>
  <title>Add Blog</title>

</head>

<body>
  <?php
  include 'navbar.php'
  ?>

  <div class="container mt-5">
    <h1 class="add-title">Add your blog here!</h1>
    <div class="form-container mt-5">
      <form method="POST" action="">
        <div class="mb-5">
          <label for="title" class="form-label add-header">Add Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Enter Your Title">
          <?php if (isset($title_err)) {
          ?>
            <div class="alert alert-danger mt-2" role="alert">
              <?php echo $title_err; ?>
            </div>
          <?php } ?>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label add-header">Add description</label>
          <textarea class="form-control" id="description" name="description" rows="5"></textarea>
          <?php if (isset($desc_err)) {
          ?>
            <div class="alert alert-danger mt-2" role="alert">
              <?php echo $desc_err; ?>
            </div>
          <?php } ?>
        </div>
        <input type="submit" value="Submit" name="submit" class="submitInput float-end">
      </form>
    </div>
  </div>
</body>

</html>
