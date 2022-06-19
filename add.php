<?php
session_start();
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
    $img = $_FILES['image_thumb'];
    $img_name = $_FILES['image_thumb']['name'];
    $img_tmp_name = $_FILES['image_thumb']['tmp_name'];
    $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
    $img_ext_lw = strtolower($img_ext);
    $img_new_name = uniqid("IMG-", true) . '.' . $img_ext_lw;
    $img_path = "uploads/" . $img_new_name;
    move_uploaded_file($img_tmp_name, $img_path);

    $description = mysqli_real_escape_string($conn, $desc);
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO entries(title,description,user_id,img_url) VALUES('$title','$description','$user_id','$img_new_name')";
    $result_query = mysqli_query($conn, $query);
    if (!$result_query) {
      echo "Failed" . mysqli_error($conn);
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
      <form method="POST" action="" enctype="multipart/form-data">
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
        <label for="image_thumb" class="form-label add-header">Add Image</label>
        <input type="file" class="form-control" id="title" name="image_thumb">
        <input type="submit" class="btn btn-primary float-end mt-3" id="title" value="Submit" name="submit">
      </form>
    </div>
  </div>
</body>

</html>
