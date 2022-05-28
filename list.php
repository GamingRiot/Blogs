<?php
include "db.php";
include "navbar.php";
$fetch_query = "SELECT * from entries";
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
  <title>Document</title>
</head>

<body>
  <div class="container">
    <?php
    if (isset($_REQUEST['result'])) {
    ?>
      <div class="alert alert-success mt-5" role="alert">
        Post added successfully!
      </div>
    <?php
    }
    ?>
    <div class="d-flex mr-2">

      <?php foreach ($fetch as $value) { ?>
        <div class='card' style='width: 18rem;margin-top:50px;margin-right:20px;'>
          <div class='card-body'>
            <div class="background-title" style="">
              <h5 class='card-title'><?php echo $value['title'] ?></h5>
            </div>
            <p class='card-text'><?php echo $value['description'] ?></p>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</body>

</html>
