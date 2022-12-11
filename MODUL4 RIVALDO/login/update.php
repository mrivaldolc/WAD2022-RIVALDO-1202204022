<?php 
 
include '../config/koneksi.php';

$conn = mysqli_connect("localhost", "root", "", "wad_modul4_rivaldo");
$profile = mysqli_query($conn, "SELECT * FROM user_rivaldo");

$row = mysqli_fetch_array($profile);

$id = $row['id'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];
 
<<<<<<< HEAD
$update = mysqli_query($conn, "UPDATE user_rivaldo SET nama='$nama', no_hp='$no_hp', password='$password' WHERE id='$id'");
=======
$update = mysqli_query($conn, "UPDATE user_rivaldo SET nama='$nama', no_hp='$nomor', password='$password' WHERE id='$id'");
>>>>>>> 7fdb305657497d9f0354eacbb6fb899c14f30893


if ($conn==1) {
    $_SESSION['status']="sudah_update";
    header("location:../index.php");
    
  }


?>
