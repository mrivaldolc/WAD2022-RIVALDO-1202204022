<!-- memanggil lansung ke home -->
<?php
session_start();

if (isset($_SESSION["newlogin"])){
    require './pages/Home-Rivaldo.php';


}
else{
    echo "<script> location.href='./login/login.php'; </script>";

}

?>
