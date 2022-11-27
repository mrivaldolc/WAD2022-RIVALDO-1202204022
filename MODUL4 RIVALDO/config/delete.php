<?php
require './koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM showroom_rivaldo_table WHERE id_mobil = $id";

if (mysqli_query($koneksi, $sql)) {
  header("location: ../pages/ListCar-Rivaldo.php");
} else {
  echo "Gagal";
}
