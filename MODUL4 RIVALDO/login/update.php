<?php 
 
include '../config/koneksi.php';

$conn = mysqli_connect("localhost", "root", "", "wad_modul4_rivaldo");
$profile = mysqli_query($conn, "SELECT * FROM user_rivaldo");

$row = mysqli_fetch_array($profile);

$id = $row['id'];
$nama = $_POST['nama'];
$nomor = $_POST['nomor'];
$password = $_POST['password'];
 
$update = mysqli_query($conn, "UPDATE user_rivaldo SET nama='$nama', no_hp='$nomor', password='$password' WHERE id='$id'");


if ($conn==1) {
    $_SESSION['status']="sudah_update";
    header("location:../index.php");
    
  }


?>
