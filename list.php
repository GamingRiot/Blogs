<?php
session_start();
include "db.php";
include "navbar.php";
$fetch_query = "SELECT * from entries WHERE delete_status= 0";
$fetch = mysqli_query($conn, $fetch_query);
if (!$fetch) {
  echo "Failed to display entries";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include "bootstrap.php";
  ?>
  <title>View Blogs</title>
</head>

<body>
  <div class="container">
    <?php
    if (isset($_REQUEST['result'])) {
    ?>
      <?php
      if ($_REQUEST['result'] == "added") {
      ?>
        <div class="alert alert-success mt-5" role="alert">
          Post added successfully!
        </div>
      <?php
      }
      ?>
      <?php
      if ($_REQUEST['result'] == "updated") {
      ?>
        <div class="alert alert-success mt-5" role="alert">
          Post Updated successfully!
        </div>
      <?php
      }
      ?>
      <?php
      if ($_REQUEST['result'] == "deleted") {
      ?>
        <div class="alert alert-success mt-5" role="alert">
          Post Deleted successfully!
        </div>
      <?php
      }
      ?>
    <?php
    }
    ?>

    <div class="d-flex mr-2">
      <?php foreach ($fetch as $value) { ?>
        <div class='card' style='width: 18rem;margin-top:50px;margin-right:20px;background:#a6c8ff;'>
          <div class='card-body'>
            <div class="background-title">
              <h5 class='card-title'><?php echo $value['title'] ?></h5>
            </div>
            <p class='card-text'><?php echo substr($value['description'], 0, 10) ?></p>
            <a href="view.php?id=<?php echo $value['id'] ?>" class="btn btn-primary">Read</a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</body>

</html>
