<?php
include "koneksi.php";

$nama  = $_POST['nama'];
$pesan = $_POST['pesan'];

$foto = "";
if ($_FILES['foto']['name'] != "") {
  $namaFile = time() . "_" . $_FILES['foto']['name'];
  $foto = "upload/" . $namaFile;
  move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
}

mysqli_query($conn, "INSERT INTO komentar (nama, pesan, foto) VALUES ('$nama', '$pesan', '$foto')");

header("location:index.php");
?>
