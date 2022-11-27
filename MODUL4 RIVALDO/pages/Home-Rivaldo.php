<?php
require './config/koneksi.php';

$query = "SELECT * FROM showroom_rivaldo_table";
$result = mysqli_query($koneksi, $query);

function onClick($result)
{
  if (mysqli_num_rows($result) > 0) {
    header("Location: ./pages/ListCar-Rivaldo.php");

  } else {
    header("Location: ./pages/Add-Rivaldo.php");
    
  }
}
?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | Rivaldo_1202204044</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include 'asset/style/style.css'; ?>
  </style>
</head>

<body>
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-2">
          <a class="navbar-brand">
            <img src="https://i.ibb.co/QfDK8Nj/logo-ead.png" width="140" height="35" alt="">
          </a>
          <a class="nav-link" style="color: white;" href="#home">Home</a>
          <a class="nav-link" href="<?php if (mysqli_num_rows($result) > 0) {
                                      echo "./pages/ListCar-Rivaldo.php";
                                    } else {
                                      echo "./pages/Add-Rivaldo.php";
                                    } ?>">MyCar</a>                                
        </div>
      </div>
    </div>
    <div>     
    <div class="dropdown">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Pilihan Menu
    </a>

    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="login/profile.php">Profile</a></li>
        <li><a class="dropdown-item" href="login/logout.php">Logout</a></li>
    </ul>
    </div>
                </div> 
  </nav>
  <!-- Nav End -->

  <!-- Jumbotron -->
  <section id="home">
    <div class="container">
      <div class="d-flex gap-3 bungkus justify-content-center align-items-center">
        <div>
          <h1>Selamat Datang Di</h1>
          <h1>Show Room Rivaldo</h1>
          <p class="mt-3">- Showroomnya Pejuang Rupiah -</p>
          <a href="<?php if (mysqli_num_rows($result) > 0) {
                      echo "./pages/ListCar-Rivaldo.php";
                    } else {
                      echo "./pages/Add-Rivaldo.php";
                    } ?>" class="button btn-primary">MyCar</a>
        </div>
        <img src="<?php echo "asset/images/sopir.jpg" ?>" alt="jumbotron">
      </div>
    </div>
  </section>
  <!-- Jumbotron End -->

  <!-- footer -->
  <footer class="text-center pt-3 bg-light mt-5">
    <p style="text-align: center; color: lightslategray;">
      <img src="<?php echo "asset/images/logo-ead.png" ?>" alt="logoead" style="width:120px;">
    <p style="margin-top: 20px; font-size:10px;">Rivaldo_1202204044</p>
    </p>
  </footer>
  <!-- end footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>