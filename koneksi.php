<?php
$host = "xxx";
$user = "xxx";
$pass = "xxx";
$db   = "xxx";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
