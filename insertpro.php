<?php

$menu = $_POST["menu"];
$nama = $_POST["namabrg"];
$harga = $_POST["jumlah"];
include 'koneksi.php';
$SQL = "INSERT INTO `stok`(`id_brg`, `nama_barang`, `jumlah`, `kategori`) VALUES ('','$nama','$harga','$menu')";
$hasil = mysqli_query($koneksi,$SQL);
header('location:insert.php')


?>