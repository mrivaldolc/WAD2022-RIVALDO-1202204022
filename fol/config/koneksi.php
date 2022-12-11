<?php
$koneksi = new mysqli("localhost", "root", "", "rizzomotor");

if (!$koneksi) {
  die("Koneksi Gagal: " . $koneksi->connect_error);
}
