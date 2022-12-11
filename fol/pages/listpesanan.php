<?php
require '../config/koneksi.php';

session_start();

$query = " SELECT * FROM pemesanantoko";
$result = mysqli_query($koneksi, $query);

$query1 = "SELECT * FROM user_log";
$result1 = mysqli_query($koneksi, $query1);

$data = mysqli_fetch_array($result1);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List Car | Rivaldo_1202204044</title>
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

  <!-- Content -->
  <section id="list">
    <div class="container">
      <div>
        <h1>RIZZO MOTOR</h1>
        <p>Daftar Pemesanan Service</p>
        <div class="d-flex gap-5">
          <?php
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='card cardcontent' style='width: 18rem;'>
            <img src='../asset/images/" . $row["foto_plat"] . "' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
            <div class='card-body'>
              <h5 class='card-title'>" . $row["nama_mobil"] . "</h5>
              <p class='card-text'>" . substr($row["deskripsi"], 0, 50) . '...' . "</p>
              <span class='d-flex'>
                <a href='detail.php?id=" . $row["id_pemesan"] . "' class='btn btn-success' style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                <a href='../config/delete.php?id=" . $row["id_pemesan"] . "' class='btn btn-warning' style='border-radius: 100px; width:140px; height: 36px; margin-left:20px;'>Delete</a>
              </span>
            </div>
          </div>";
            }
          } else {
            echo "0 results";
          }
          ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Content End -->

  <!-- footer -->
  <footer class="fixed-bottom" style="padding-bottom: 50px;">
    <div class="container">
      <p style="font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 19px; color: #757575;">Jumlah Pemesanan : <?php echo mysqli_num_rows($result) ?></p>
    </div>
  </footer>
  <!-- footer end -->


  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>