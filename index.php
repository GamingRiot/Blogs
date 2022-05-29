<!doctype html>
<html lang="en">

<head>
  <?php
  include 'bootstrap.php'
  ?>
  <title>Welcome Blogger</title>
</head>

<body>
  <?php
  include 'navbar.php';
  ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img class="main-img img-fluid" src="img/main.png" alt="">
      </div>
      <div class="col-lg-6 my-auto">
        <h1 class="jumbotron">Welcome to <span style="font-weight:600;">B.Writes</span></h1>
        <h3 class="jumbotron-sub">write.spread.motivate</h3>
        <div class="blog-buttons mt-5">
          <a href="add.php"><button type="button" class="btn btn-primary btn-add">Add Blog</button></a>
          <a href="list.php"><button type="button" class="btn btn-secondary btn-view" style="margin-left:60px;">View Blogs</button></a>
        </div>

      </div>
    </div>
  </div>
</body>

</html>
