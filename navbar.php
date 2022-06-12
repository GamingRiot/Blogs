<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand logo" href="index.php">B. WRITES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php if (!empty($_SESSION['username'])) { ?>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left:100px;">
          <li class="nav-item">
            <a class="nav-link active nav-item" aria-current="page" href="add.php">Add</a>
          </li>
          <li class="nav-item" style="margin-left:20px;">
            <a class="nav-link active nav-item" aria-current="page" href="list.php">View</a>
          </li>
        </ul>
      <?php } ?>
      <?php if (empty($_SESSION['username'])) { ?>

      <?php } ?>
      <?php if (!empty($_SESSION['username'])) { ?>
        <div class="float-right">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Hello, <?php echo $_SESSION['username']; ?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">
                  <form method="POST">
                    <input type="submit" name="logout" value="Logout" class="btn btn-danger">
                  </form>
                </a></li>
            </ul>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</nav>
