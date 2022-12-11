<?php
require './koneksi.php';

$namamobil = $_POST['nama'];
$pemilik = $_POST['pemilik'];
$tanggalservice = $_POST['tanggalservice'];
$desc = $_POST['desc'];
$status = $_POST['status'];

$gambar = $_FILES['gambar']['name'];

$target = "../asset/images/";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
  $sql = "INSERT INTO pemesanantoko (nama_mobil, pemilik_mobil, tanggal_service, deskripsi, foto_plat, status_service) VALUES ('$namamobil', '$pemilik', '$tanggalservice', '$desc', '$gambar', '$status')";
  if (mysqli_query($koneksi, $sql)) {
    header("location: ../index.php");
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
