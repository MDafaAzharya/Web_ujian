<?php
include "koneksi.php";
$kode = $_POST['id_brg'];
if(isset($_POST['proses'])){
mysqli_query($koneksi, "UPDATE stok SET nama_barang = '$_POST[nama]',jumlah =' $_POST[merek]' WHERE id_brg = '$kode'");
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
    <?php echo "<h1> Data Berhasil Diubah!  <br> <a href='insert.php'> Lihat Data </a> </h1>"; ?>
    <?php echo "<meta http-equiv=refresh content=3;URL='Delete.php'>"; ?>
</body>

</html>