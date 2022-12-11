<!-- memanggil lansung ke home -->
<?php
session_start();

if (isset($_SESSION["newlogin"])){
    require 'Home.php';


}
else{
    echo "<script> location.href='config/login.php'; </script>";

}

?>
