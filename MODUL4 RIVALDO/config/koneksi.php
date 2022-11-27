<?php
$koneksi = new mysqli("localhost", "root", "", "wad_modul4_rivaldo");

if (!$koneksi) {
  die("Koneksi Gagal: " . $koneksi->connect_error);
}
