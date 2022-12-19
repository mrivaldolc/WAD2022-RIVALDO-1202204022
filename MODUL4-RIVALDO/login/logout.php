<?php
session_start();
unset($_SESSION["login"]);
$_SESSION["keluar"] = "keluar";
setcookie('id', $row["id"], strtotime('-7 days'), '/');
unset($_SESSION["sementara"]);
session_destroy();
header("Location: login.php");
exit;
?>