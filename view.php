<?php
include "db.php";
if (isset($_REQUEST['id'])) {
  $id = $_REQUEST['id'];
  $fetch_details = "SELECT * FROM entries WHERE id = '$id'";
  $blog_details =  mysqli_query($conn, $fetch_details);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include "bootstrap.php";
  ?>
  <title>Blog</title>
</head>

<body>
  <?php
  include "navbar.php";
  ?>
  <div class="container">
    <?php
    foreach ($blog_details as $value) {
    ?>
      <div class="header-back mt-5 p-5">
        <h1 class="view-title"><?php echo $value['title'] ?></h1>
        <div class="blog-buttons mt-5">
          <a href="edit.php?id=<?php echo $value['id']  ?>"><button type="button" class="btn btn-primary btn-add">Edit</button></a>
          <a href="list.php"><button type="button" class="btn btn-danger " style="margin-left:60px;">Delete</button></a>
        </div>
      </div>
      <div class="mt-5">
        <h1 class="view-desc"><?php echo $value['description'] ?></h1>
      </div>
    <?php }
    ?>
  </div>
</body>

</html>
