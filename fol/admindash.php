<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    <?php include 'css/adminds.css'; ?>
  </style>
</head>
<body>
<section id="sidebar"> 
        <div class="white-label">
        </div> 
        <div id="sidebar-nav">   
          <ul>
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="pages/listpesanan.php"><i class="pesanan"></i> Pemesanan</a></li>
            <li><a href="#"><i class="fa fa-line-chart"></i> Reporting</a></li>
            <li><a href="#"><i class="fa fa-calendar-o"></i> Reservations</a></li>
            <li><a href="#"><i class="fa fa-calendar"></i> Calendar</a></li>
            <li></li>
            <li><a href="config/logout.php" rel="stylesheet">Log Out</a></li>
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
            <h1>Dashboard</h1>
            <p>Hasil Pesanan Toko Rizzo Motor</p>
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
              <h2><a href="./pages/listpesanan.php" class="text-white">Daftar Pemesanan</a></h2>
              <i class="fa fa-cog"></i>
            </div>
            <div class="widget-content">
              <img src="photos/322.jpg">
            </div>
          </div>
          <div class="widget-box sample-widget">
            <div class="widget-header">
              <h2>Pengeluaran</h2>
              <i class="fa fa-cog"></i>
            </div>
            <div class="widget-content">
              <img src="photos/222.jpg">
            </div>
          </div>
            <div class="widget-box sample-widget">
            <div class="widget-header">
              <h2>Pemasukan</h2>
              <i class="fa fa-cog"></i>
            </div>
            <div class="widget-content">
              <img src="photos/321.jpg">
            </div>
          </div>  
        </div>
      </section>

  
</body>
</html>

