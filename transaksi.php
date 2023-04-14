<?php
include 'koneksi.php';
$wk = mysqli_query ($koneksi, "SELECT * FROM stok, pinjam WHERE stok.id_brg = pinjam.kode_brg ")
or die (mysqli_error($koneksi));
$rows = [];
while ($row = mysqli_fetch_array ($wk)){
   $rows[] = $row;
}

$data = $rows['jumlah'] - $rows['jumlah_brg'];

$name = $_POST["anam"];
$class = $_POST["kelas"];
$brg = $_POST["menu"];
$input = $_POST["tglpin"];
$back = $_POST["tglkem"];
$jumlah = $_POST["brp"];
include 'koneksi.php';
$SQL = "INSERT INTO `pinjam`(`id_siswa`, `nama_siswa`, `kelas`, `nama_alat`,`kode_brg`,`jumlah_brg`, `tgl_pinjam`, `tgl_kembali`) VALUES ('','$name','$class','$brg','','$jumlah','$input','$back')";
$up = "UPDATE `stok` SET `jumlah`='[$data]' WHERE id_brg = '$brg'";
$hasil = mysqli_query($koneksi,$SQL);
header('location:pinjam.php')

?>