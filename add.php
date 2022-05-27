<?php
if (isset($_POST['submit'])) {
  if (empty($_POST['title'])) {
    $title_err = "Title is required";
  }

  if (empty($_POST['description'])) {
    $desc_err = "Description is required";
  }
  // echo $_POST['title'];
  // echo "<br>" . $_POST['description'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include 'bootstrap.php'
  ?>
  <title>Add Blog</title>
  <style>
    .submitInput {
      width: 100px;
      height: 40px;
      border: none;
      background: #00b07b;
      color: white;
      font-weight: 600;
      font-size: 18px;
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <?php
  include 'navbar.php'
  ?>

  <div class="container">
    <h1>Add your blog here!</h1>
    <div class="form-container mt-5">
      <form method="POST" action="">
        <div class=" mb-3">
          <label for="title" class="form-label">Add Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Enter Your Title">
          <?php if (isset($title_err)) {
          ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $title_err; ?>
            </div>
          <?php } ?>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Add description</label>
          <textarea class="form-control" id="description" name="description" rows="5"></textarea>
          <?php if (isset($desc_err)) {
          ?>
            <div class="alert alert-danger" role="alert">
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
