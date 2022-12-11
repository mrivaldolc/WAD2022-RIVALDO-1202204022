<?php
require '../config/koneksi.php';

$id = $_GET['id'];

$sql = "SELECT * FROM pemesanantoko WHERE id_pemesan = $id";                                                                                         

$result = mysqli_query($koneksi, $sql);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Car | Rivaldo_1202204044</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/style/style.css'; ?>
  </style>
  <link rel="stylesheet" href="../css/adminds.css">
</head>

<body>
  <!-- Nav -->
  <section id="sidebar"> 
        <div class="white-label">
        </div> 
        <div id="sidebar-nav">   
          <ul>
            <li><a href="../admindash.php"><i class="#"></i> Dashboard</a></li>
           
            <li class="active"><a href="#pemesanan"><i class="#pemesanan"></i> Pemesanan</a></li>
            <li><a href="#"><i class="fa fa-line-chart"></i> Reporting</a></li>
            <li><a href="#"><i class="fa fa-calendar-o"></i> Reservations</a></li>
            <li><a href="#"><i class="fa fa-calendar"></i> Calendar</a></li>
            <li></li>
            
            <li><a href="../config/logout.php" rel="stylesheet">Log Out</a></li>
          </ul>
        </div>
      </section>
  <!-- Nav End -->
  <a href='listpesanan.php?id="' class='btn btn-dark' style='margin-left: 10px; '><</a>
  <!-- Form -->
  <section id='detail'>
    <div class="container">
      <?php
      while ($getDetail = mysqli_fetch_array($result)) {
        echo "
                <h1 class='newcar'>" . $getDetail["nama_mobil"] . "</h1>
                <p class='newcarlist'>Detail Mobil " . $getDetail["nama_mobil"] . "</p>
                <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                  <img src='../asset/images/" . $getDetail["foto_plat"] . "' alt='foto_plat'>
                  <form action='' enctype='multipart/form-data'>
                    <label for='nama'>Nama Mobil</label>
                    <input type='text' id='nama' name='nama' value='" . $getDetail["nama_mobil"] . "' readonly>
                    <label for='pemilik'>Nama Pemilik</label>
                    <input type='text' id='pemilik' name='pemilik' value='" . $getDetail["pemilik_mobil"] . "' readonly>
                    
                    <label for='tanggalbeli'>Tanggal Service</label>
                    <input type='date' id='tanggalbeli' name='tanggalbeli' value='" . $getDetail["tanggal_service"] . "' readonly>
                    <label for='desc'>Deskripsi</label>
                    <textarea id='desc' name='desc' style='height:200px; width: 600px; border-radius: 8px;' readonly> " . $getDetail["deskripsi"] . " </textarea>
                    <label for='inputGroupFile01'>Foto</label>
                    <input type='file' class='form-control' id='inputGroupFile01' value='c:/" . $getDetail["foto_plat"] . "' name='gambar' style='height: 40px;'>
                    <label for='status'>Status Pembayaran</label>
                    <span class='d-flex'>
                      <input type='radio' name='status' id='lunas' value='Lunas' " . (($getDetail["status_service"] == 'Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='lunas' style='margin-top: 15px; margin-right:10px;'>Lunas</label>
                      <input type='radio' name='status' id='belum' value='Belum Lunas' " . (($getDetail["status_service"] == 'Belum Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='belum' style='margin-top: 15px;'>Belum Lunas</label>
                    </span>
                    <a href='Edit-Rivaldo.php?id=" . $getDetail["id_pemesan"] . "' class='btn btn-primary' style='margin-top: 40px;'>Edit</a>
                  </form>
                </div>
            ";
      }
      ?>
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