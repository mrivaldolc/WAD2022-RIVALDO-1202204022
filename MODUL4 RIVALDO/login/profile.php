<?php
include "../config/koneksi.php";

$conn = mysqli_connect("localhost", "root", "", "wad_modul4_rivaldo");
$profile = mysqli_query($conn, "SELECT * FROM user_rivaldo ");

$row = mysqli_fetch_array($profile);

session_start();

if($_SESSION['status']="newlogin"){
  $nama = $_POST['nama'];

  ?>
      
  </div> 
  <?php
}

else{
  header("location:profile.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<style>
  body {
    background-color: #00000;
  }

  .content{
    margin: auto;
    margin-top: 150px;
    width: 1000px;
    height: 400px;
    background-color: white;
    border-radus: 5px;
    padding-top: 20px;
    padding-bottom: 20px;
    border-fill: solid;
    border-color: gray;
    border-width: thin;
  }

  .fill{
    margin-top: 20px;
    margin-left: 50px;
  }

  .input{
    width: 600px;
    margin-left: 150px;
    margin-top: 12px;

  }
</style>

</head>
<body>
    <nav style="background-color: #A9A9A9" class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a style="color: black; font-weight: bold; margin-left: 200px" class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <img style='margin-left:1300px' width='20px'>
        
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='text-decoration:none; color:black;'>
         
        <?php
           echo $_SESSION["nama"] ;
          ?>
        </a>
        <div style='margin-left: 1300px; margin-top:140px' class="dropdown-menu" aria-labelledby="navbarDropdown" id='navbarDropdown'>
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="logout.php">Log Out</a>
        </div>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="content  d-flex flex-direction-row">
        <div class="fill">
          <p>Email</p>
          <p>Nama</p>
          <p class='mb-3'>Nomor Handphone</p>
          <hr>
          <p class='mt-3'>Kata Sandi</p>
          <p>Konfirmasi kata Sandi</p>
          <p>Warna Navbar</p>
        </div>

        <div class="input">
          <form action="update.php" method="post">
          <p>
            <?php
              echo $row['email'];
            ?>  
          </p>

          <input type="text" class="form-control" id="nama" name='nama' value=
          <?php
            echo $row['nama'];
          ?>
          >

          <input type="nomor" class="form-control" id="nomor" name='nomor' value=
          <?php
            echo $row['no_hp'];
          ?>
          >
          <input class='form-control mt-3' type="password" class="form-control" id="password" name='password'>
          <input class='form-control' type="password" class="form-control" id="passwordConf" name='passwordConf'>
          
          <select class="form-control mt-1">
            <option name="blue">Blue Ocean</option>
            <option name='dark'>Dark Boba</option>
          </select>

          <div class="button mt-5 d-flex justify-content-center">
            <button style='margin-right: 10px; width: 150px' type="submit" class="btn btn-primary">Simpan</button>
            <a href="../index.php">
              <button style=' width: 150px' type="button" class="btn btn-info">Cancel</button>
            </a>
            
          </div>
          


          </form>
          
          
        </div>
      </div>
    </div>

</body>
</html>
