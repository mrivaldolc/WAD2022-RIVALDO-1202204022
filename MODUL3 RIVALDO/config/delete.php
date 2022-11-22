<?php
require './koneksi.php';

$id = $_GET['id'];

$sql = "INSERT FROM showroom_nama_table WHERE id_mobil = $id";

if (mysqli_query($koneksi, $sql)) {
  header("location: ../pages/ListCar-Rivaldo.php");
} else {
  echo "Gagal";
}
