<!doctype html>
<html lang="en">

<head>
  <?php
  include 'bootstrap.php'
  ?>
  <title>Welcome Blogger</title>
  <style>
    * {
      padding: 0;
      margin: 0;
    }

    .jumbotron {
      text-align: center;
      font-size: 68px;
    }

    .blog-buttons {
      text-align: center;
    }
  </style>
</head>

<body>
  <?php
  include 'navbar.php';
  ?>
  <div class="component">
    <div class="my-auto align-middle">
      <h1 class="jumbotron">Welcome to Your <br>Blogs</h1>
      <div class="blog-buttons mt-5">
        <a href="add.php"><button type="button" class="btn btn-primary">Add Blog</button></a>
        <a href="list.php"><button type="button" class="btn btn-secondary" style="margin-left:60px;">View Blogs</button></a>
      </div>

    </div>
  </div>
</body>

</html>
