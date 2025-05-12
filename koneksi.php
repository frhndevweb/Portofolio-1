<?php
$host = "sql212.infinityfree.com";
$user = "if0_37941465";
$pass = "Ci4e8xzkagwq1XU";
$db   = "if0_38948798_frhndevweb";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
