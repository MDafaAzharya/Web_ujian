<?php
include "koneksi.php";
$kd_brg = $_GET['id_siswa'];

$hapus = mysqli_query($koneksi,"DELETE FROM pinjam WHERE id_siswa='$kd_brg'");
if($hapus){
    echo "<script>alert('data berhasil di hapus')</script>";
    header("refresh:0;siswa.php");
}else{
    echo "<script>alert('data ga')</script>";
    header("refresh:0;siswa.php");
}
?>