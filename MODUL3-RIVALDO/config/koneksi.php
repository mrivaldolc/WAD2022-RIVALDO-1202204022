<?php
$koneksi = new mysqli("localhost", "root", "", "modul3");

if (!$koneksi) {
  die("Koneksi Gagal: " . $koneksi->connect_error);
}
