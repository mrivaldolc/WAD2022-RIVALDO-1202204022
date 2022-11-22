<?php
require './koneksi.php';

$namamobil = $_POST['nama'];
$pemilik = $_POST['pemilik'];
$merk = $_POST['merk'];
$tanggalbeli = $_POST['tanggalbeli'];
$desc = $_POST['desc'];
$status = $_POST['status'];

$gambar = $_FILES['gambar']['name'];

$target = "../asset/images/";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
  $sql = "INSERT INTO showroom_nama_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$namamobil', '$pemilik', '$merk', '$tanggalbeli', '$desc', '$gambar', '$status')";
  if (mysqli_query($koneksi, $sql)) {
    header("location: ../pages/ListCar-Rivaldo.php");
    echo "
    <div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
      <div class='toast-header'>
        <img src='...' class='rounded me-2' alt='...'>
        <strong class='me-auto'>Alert</strong>
        <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
      </div>
      <div class='toast-body'>
        Data Berhasil ditambahkan.
      </div>
    </div>";
  } else {
    echo "Gagal";
  }
} else {
  echo "Gagal";
}
