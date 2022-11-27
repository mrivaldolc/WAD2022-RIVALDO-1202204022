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

        <title>Register</title>
    </head>

    <!-- nav -->
    <body class="bg-white bg-opacity-10">
    <div class="container-fluid bg-secondary bg-opacity-50 sticky-top">
            <div class="container p-2 navbar navbar-collapse" >
                <a class="link-dark" href="../index.php" style="text-decoration: none;"><b>Home</b></a>
                    <div class="dropdown">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Pilihan Menu
    </a>

    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="../index.php">Home</a></li>
        <li><a class="dropdown-item" href="login.php">Login</a></li>
    </ul>
    </div>
                </div> 
                
            </div>
<!-- end nav -->

        <div class="alert alert-danger alert-dismissible fade show" id="alertgagal">
            Gagal registrasi
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>



        <div class="d-flex container mt-5 justify-content-end">
         
        <div class="d-flex container mt-5 justify-content-start">
                <div>
                 <img src="https://disk.mediaindonesia.com/thumbs/600x400/news/2021/07/17f006ad85a2cf6bf4f8e866897a86a5.jpg" class="rounded float-start" alt="jumbotron">
                <div>
                <img src="<?php echo "https://i.ibb.co/QfDK8Nj/logo-ead.png" ?>" alt="logoead" style="width:100px;">
                </div>
                </div>
            <div class="bg-white" style="width: 35rem;">
                <h3 class="text-start m-3">Register</h3>
                <hr class="ms-2 me-2 mt-0 mb-0">
                <div class="card-body">
                    <form action="" method="post">
                        <label class="mb-2" for="nama">Nama</label><br>
                        <input class="form-control mb-2" type="text" name="nama" id="nama" required placeholder="Masukkan nama lengkap">
                        <label class="mb-2" for="email">Email</label><br>
                        <input class="form-control mb-2" type="text" name="email" id="email" required placeholder="Masukkan alamat E-mail">
                        <label class="mb-2" for="nohp">Nomor Handphone</label><br>
                        <input class="form-control mb-2" type="text" name="nohp" id="nohp" required placeholder="Masukkan Nomor Handphone">
                        <label class="mb-2" for="pass">Kata Sandi</label><br>
                        <input class="form-control mb-2" type="Password" name="pass" id="pass" required placeholder="Kata Sandi Anda">
                        <label class="mb-2" for="repass">Konfirmasi Kata Sandi</label><br>
                        <input class="form-control mb-2" type="Password" name="repass" id="repass" required placeholder="Konfirmasi Kata Sandi Anda">
                        <div class="text-start pt-2 mb-2">
                            <button class="btn btn-primary" type="submit" name="submit" onclick="" style="width: 150px">Daftar</button>
                        </div>
                    </form>
                    <div class="text-center d-flex justify-content-start">
                        <p class="me-1">Anda sudah punya akun?</p>
                        <a href="login.php">Login</a>
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
    </body>
</html>

<?php
$koneksql = mysqli_connect("localhost", "root", "", "wad_modul4_rivaldo");

if (isset($_POST["submit"])){
    if (($_POST["pass"]) == ($_POST["repass"])){
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $nohp = $_POST["nohp"];
        $pass = mysqli_real_escape_string($koneksql, $_POST["pass"]);
        $query = "INSERT INTO user_rivaldo
        VALUES
        ('', '$nama', '$email', '$pass', '$nohp')
        ";
        mysqli_query($koneksql, $query);
        if (mysqli_affected_rows($koneksql) > 0) {
            $_SESSION["sukses"] = "berhasil";
            echo "
            <script>
                document.location.href = './login.php';
            </script>
            ";
        } else {
            echo "
            <script>
                gagal.style.display = 'block'
            </script>
            ";
        }
    } else {
        echo"
        <script>
                gagal.style.display = 'block'
        </script>
        ";
    }
}
?>