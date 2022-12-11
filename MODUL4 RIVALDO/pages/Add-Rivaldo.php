<?php
session_start();

require '../config/koneksi.php';

$query = " SELECT * FROM showroom_nama_table";
$result = mysqli_query($koneksi, $query);

$query1 = "SELECT * FROM user_rivaldo";
$result1 = mysqli_query($koneksi, $query1);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Car | Rivaldo_1202204044</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/style/style.css'; ?>
  </style>
</head>

<body>
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="navbar-brand">
            <img src="https://i.ibb.co/QfDK8Nj/logo-ead.png" width="140" height="35" alt="">
          </a>
          <a class="nav-link" href="../index.php">Home</a>
          <a class="nav-link" style="color: white;" href="#">MyCar</a>
        </div>
      </div>
      <div>     
    <div class="dropdown">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <?php echo $_SESSION['nama']; ?>
    </a>

    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="../login/profile.php">Profile</a></li>
        <li><a class="dropdown-item" href="../login/logout.php">Logout</a></li>
    </ul>
    </div>
                </div>
    </div>
  </nav>
  <!-- Nav End -->

  <!-- Form -->
  <section id='form'>
    <div class="container">
      <h1 class="newcar">Tambah Mobil</h1>
      <p class="newcarlist">Tambah Mobil Pencari Rupiah Anda Ke List Show Room</p>
      <form action="../config/insert.php" method="POST" enctype="multipart/form-data">
        <label for="nama">Nama Mobil</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Mobil">
        <label for="pemilik">Nama Pemilik</label>
        <input type="text" id="pemilik" name="pemilik" placeholder="Masukkan Nama Pemilik">
        <label for="merk">Merk</label>
        <input type="text" id="merk" name="merk" placeholder="Masukkan Merk Mobil">
        <label for="tanggalbeli">Tanggal Beli</label>
        <input type="date" id="tanggalbeli" name="tanggalbeli">
        <label for="desc">Deskripsi</label>
        <textarea id="desc" name="desc" placeholder="Masukkan Deskripsi Mobil" style="height:200px; width: 1000px; border-radius: 8px;"></textarea>
        <label for="inputGroupFile01">Foto</label>
        <input type="file" class="form-control" id="inputGroupFile01" name="gambar" style="height: 40px;">
        <label for="status">Status Pembayaran</label>
        <span class="d-flex">
          <input type="radio" name="status" id="lunas" value="Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="lunas" style="margin-top: 15px; margin-right:10px;">Lunas</label>
          <input type="radio" name="status" id="belum" value="Belum Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="belum" style="margin-top: 15px;">Belum Lunas</label>
        </span>
        <button type="submit" class="btn btn-primary" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>
  <!-- Form End -->

  <!-- footer -->
  <footer class="text-center pt-3 bg-light mt-5">
    <p style="margin-top: 20px; font-size:10px;">Rivaldo_1202204044</p>
    </p>
  </footer>
  <!-- end footer -->

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>