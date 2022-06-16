<?php
session_start();
include 'db.php';
if (isset($_REQUEST['id'])) {
  $id = $_REQUEST['id'];
  $fetch_details = "SELECT * FROM entries WHERE id = '$id'";
  $blog_edit =  mysqli_query($conn, $fetch_details);
}
if (isset($_REQUEST['submit'])) {
  $id = $_REQUEST['id'];
  $title = $_REQUEST['title'];
  $desc = $_POST['description'];
  $description = mysqli_real_escape_string($conn, $desc);
  $sql = "UPDATE entries SET title = '$title', description = '$description' WHERE id='$id'";
  $update_blog = mysqli_query($conn, $sql);
  if ($update_blog) {
    header("Location: list.php?result=updated");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include 'bootstrap.php';
  ?>
  <title>Edit Blog</title>

</head>

<body>
  <?php
  include 'navbar.php'
  ?>

  <div class="container mt-5">
    <h1 class="add-title">Edit your blog here!</h1>
    <div class="form-container mt-5">
      <form method="POST" action="">
        <?php
        foreach ($blog_edit as $value) {
        ?>
          <div class="mb-5">
            <input type="text" hidden name="id" value="<?php echo $value['id'] ?>">
            <label for="title" class="form-label add-header">Edit Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $value['title'] ?>">

            <div class="mb-3 mt-5">
              <label for="description" class="form-label add-header">Edit description</label>
              <textarea class="form-control" id="description" name="description" rows="5"><?php echo $value['description'] ?></textarea>

            <?php } ?>
            </div>
            <input type="submit" value="Submit" name="submit" class="submitInput float-end">
      </form>
    </div>
  </div>
</body>

</html>
