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

        <title>Login</title>
    </head>

<!-- nav -->
    <body class="bg-white">
    <div class="container-fluid bg-secondary bg-opacity-50 sticky-top">
            <div class="container p-2 navbar navbar-collapse" >
                <a class="link-dark" href="../index.php" style="text-decoration: none;"><b>Home</b></a>
                    <div class="dropdown">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Pilihan Menu
    </a>

    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="register.php">Register</a></li>
    </ul>
    </div>
                </div> 
                
            </div>
<!-- end nax -->
        

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
                 <img src="https://akcdn.detik.net.id/visual/2018/08/09/74d69c6a-18a4-4c16-8565-1c98f9f4388e_169.jpeg?w=650" class="rounded float-start" alt="jumbotron">
                 <div>
                <img src="<?php echo "https://i.ibb.co/QfDK8Nj/logo-ead.png" ?>" alt="logoead" style="width:100px;">
                </div>
                </div>
            
                
            <div class="bg-white" style="width: 30rem;">
                <h3 class="text-start m-3">Login</h3>
                <hr class="ms-2 me-2 mt-0 mb-0">
                <div class="card-body">
                    <form action="" method="post">
                        <label class="mb-2" for="email">Email</label><br>
                        <input class="form-control mb-2" type="text" name="email" id="email" required placeholder="Masukkan alamat E-mail">
                        <label class="mb-2" for="pass">Kata Sandi</label><br>
                        <input class="form-control mb-2" type="Password" name="pass" id="pass" required placeholder="Kata Sandi Anda">
                        <div>
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember me</label>
                        </div>
                        <div class="text-start pt-2 mb-2 mt-2">
                            <button class="btn btn-primary" type="submit" name="submit" onclick="" style="width: 150px">Login</button>
                        </div>
                    </form>
                    <div class="text-center d-flex justify-content-start">
                        <p class="me-1">Anda belum punya akun?</p>
                        <a href="register.php">Daftar</a>
                    </div>
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
$koneksi = mysqli_connect("localhost", "root", "", "wad_modul4_rivaldo");

if (isset($_POST["submit"])){
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $querygetakun = "SELECT * FROM user_rivaldo WHERE email = '$email'";
    $getakun = mysqli_query($koneksi, $querygetakun);
    $row = mysqli_fetch_assoc($getakun);
    if ( $pass == $row["password"]){
        $_SESSION["newlogin"] = true;
        if (isset($_POST["remember"])){
            setcookie('id', $row["id"], strtotime('+7 days'), '/');
            echo "<script> location.href='../index.php'; </script>";
        }else{
            $_SESSION["sementara"] = $row["id"];
            echo "<script> location.href='../index.php'; </script>";
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
