<?php
include "koneksi.php";
$kd_brg = $_GET['id_brg'];

$hapus = mysqli_query($koneksi,"DELETE FROM stok WHERE id_brg='$kd_brg'");
if($hapus){
    echo "<script>alert('data berhasil di hapus')</script>";
    header("refresh:0;insert.php");
}else{
    echo "<script>alert('data ga')</script>";
    header("refresh:0;databarang.php");
}
?>