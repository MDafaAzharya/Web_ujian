<?php
include "koneksi.php";
$kode = $_POST['id_siswa'];
if(isset($_POST['proses'])){
mysqli_query($koneksi, "UPDATE pinjam SET nama_siswa = '$_POST[nama]',kelas =' $_POST[kelas]',nama_alat =' $_POST[alat]',tgl_pinjam =' $_POST[pinjam]' WHERE id_siswa = '$kode'");
}

?>

<html>

<head>
    <style>
        body {
            font-family: sans-serif;
            margin-top: 450px;
        }
    </style>
</head>

<body align="center">
    <?php echo "<h1> Data Berhasil Diubah!  <br> <a href='siswa.php'> Lihat Data </a> </h1>"; ?>
    <?php echo "<meta http-equiv=refresh content=3;URL='delete2.php'>"; ?>
</body>

</html>