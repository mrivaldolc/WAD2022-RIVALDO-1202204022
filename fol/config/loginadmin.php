<?php
session_start();
?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Login Admin</title>

        <style>
            body
            {
                background-image : url(../images/funfact4.png);
                background-repeat : no-repeat;
                background-size : cover;
            }
        </style>
        
    </head>

    <body>
<!-- nav -->
<nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav gap-2">
                <a class="navbar-brand">
                    <img src="../photos/rmlogo.png" width="140" height="35" alt="">
                </a>
                <a class="nav-link" href="../index.php" style="color: white;"><b>Home</b></a>
            </div> 
        </div>
        <div class="dropdown">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Login As
    </a>

    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="../index.php">User</a></li>
    </ul>
    </div>
                </div> 
    </div> 
</nav> 
<!-- end nav -->
        

        <?php
        if (isset($_SESSION["keluar"])){
            ?>
            <div class="alert alert-success alert-dismissible fade show" id="alertkeluar">
                Berhasil logout
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
            session_destroy();
            }
        ?>

        <div class="alert alert-success alert-dismissible fade show" id="alertberhasil">
            Berhasil registrasi
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <script>
            var berhasil = document.getElementById('alertberhasil');
            berhasil.style.display = 'none'
        </script>

        <?php
        if ( isset($_SESSION["sukses"])){
            echo "
            <script>
                berhasil.style.display = 'block'
            </script>
            ";
            session_destroy();
        }
        ?>

        <div class="alert alert-danger alert-dismissible fade show" id="alertgagal">
            Gagal Login
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="d-flex container mt-5 justify-content-end">
        <div class="d-flex container mt-5 justify-content-start">
            
                <div>
                 <img src="" class="rounded float-start" alt="">
                 <div>
                <img src="<?php echo "" ?>" alt="" style="width:100px;">
                </div>
                </div>
            
                
            <div class="d-flex container mt-5 justify-content-center bg-white bg-opacity-50 " style="width: 50rem;">
                
                <hr class="ms-2 me-2 mt-0 mb-0">
                <div class="card-body">
                    <form action="" method="post">
                        <h2 class="text-center d-flex justify-content-center">Admin Login</h2>
                        <label class="mb-2" for="email">Email</label><br>
                        <input class="form-control mb-2" type="text" name="email" id="email" required placeholder="Masukkan alamat E-mail">
                        <label class="mb-2" for="pass">Kata Sandi</label><br>
                        <input class="form-control mb-2" type="Password" name="pass" id="pass" required placeholder="Kata Sandi Anda">
                        <div>
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember me</label>
                        </div>
                        <div class="text-start pt-4 mb-2 mt-2">
                            <button class="btn btn-primary" type="submit" name="submit" onclick="" style="width: 150px">Login</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script>
            var gagal = document.getElementById('alertgagal');
            gagal.style.display = 'none'
        </script>



<?php
$koneksi = mysqli_connect("localhost", "root", "", "rizzomotor");

if (isset($_POST["submit"])){
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $querygetakun = "SELECT * FROM admin_log WHERE email = '$email'";
    $getakun = mysqli_query($koneksi, $querygetakun);
    $row = mysqli_fetch_assoc($getakun);
    if ( $pass == $row["password"]){
        $_SESSION["newlogin"] = true;
        if (isset($_POST["remember"])){
            setcookie('id', $row["id"], strtotime('+7 days'), '/');
            echo "<script> location.href='../admindash.php?id=" . $row["id"] . "'; </script>";
        }else{
            $_SESSION["sementara"] = $row["id"];
            echo "<script> location.href='../admindash.php?id=" . $row["id"] . "'; </script>";
        }
    }else{
        echo"
        <script>
                gagal.style.display = 'block'
        </script>
        ";
    }
}
?>
    </body>
</html>
