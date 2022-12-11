<?php
require './koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM pemesanantoko WHERE id_mobil = $id";

if (mysqli_query($koneksi, $sql)) {
  header("location: ../pages/listpesanan.php");
} else {
  echo "Gagal";
}
