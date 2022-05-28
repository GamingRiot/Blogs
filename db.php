<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "blogs";
$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn) {
  die("Connection unscuccesful" . mysqli_connect_error());
}
