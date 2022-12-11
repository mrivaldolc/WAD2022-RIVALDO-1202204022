<?php
require '../config/koneksi.php';

session_start();

$query = " SELECT * FROM pemesanantoko";
$result = mysqli_query($koneksi, $query);

$query1 = "SELECT * FROM user_log";
$result1 = mysqli_query($koneksi, $query1);

$data = mysqli_fetch_array($result1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/adminds.css">
    <style>
    <?php include '../asset/style/style.css'; ?>
  </style>
</head>
<body>
<section id="sidebar"> 
        <div class="white-label">
        </div> 
        <div id="sidebar-nav">   
          <ul>
            <li><a href="../admindash.php"><i class="#"></i> Dashboard</a></li>
           
            <li><a href="#pemesanan"><i class="#pemesanan"></i> Pemesanan</a></li>
            <li><a href="#"><i class="fa fa-line-chart"></i> Reporting</a></li>
            <li><a href="#"><i class="fa fa-calendar-o"></i> Reservations</a></li>
            <li><a href="#"><i class="fa fa-calendar"></i> Calendar</a></li>
            <li></li>
            
            <li><a href="../config/logout.php" rel="stylesheet">Log Out</a></li>
          </ul>
        </div>
      </section>
      <section id="content">
        <div id="header">
          <div class="header-nav">
            <div class="menu-button">
              <!--<i class="fa fa-navicon"></i>-->
            </div>
            <div class="nav">
              <ul>
                
                <li class="nav-profile">
                  <div class="nav-profile-image">
                    <img src="photos/rmlogo2.png" alt="profile-img" alt="profile image">
                    <div class="nav-profile-name">Rizzo Motor<i class="fa fa-caret-down"></i></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="content-header">
            <h1>DAFTAR PEMESANAN</h1>
            <p>Toko Rizzo Motor</p>
          </div>
          <div class="widget-box sample-widget">
            <div class="widget-header">
              <h2>Grafik Pemesanan</h2>
              <i class="fa fa-cog"></i>
            </div>
            <div class="widget-content">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/87118/sample-data-1.png">
            </div>
          </div>
          <div class="widget-box sample-widget">
            <div class="widget-header">
              <h2>Daftar Pemesanan</h2>
              <i class="fa fa-cog"></i>
            </div>
            <div class="widget-content">
              
            <section id="list">
    <div class="container">
      <div>
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
                <a href='Detail-Rivaldo.php?id=" . $row["id_pemesan"] . "' class='btn btn-success' style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
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

            </div>
          </div>
         
          </div>  
        </div>
      </section>
      

      <section class="pemesanan" id="pemesanan">
        <div>
          <h1>HELLO</h1>

        </div>
		
			
	      </section>
  
</body>
</html>

