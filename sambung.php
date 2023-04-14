<?php
include 'koneksi.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sambung.css">
    <title>Document</title>
</head>
<body>
    <div class="kepala">    
        <img class="fotoadmin" src="https://st.depositphotos.com/1637056/4332/v/600/depositphotos_43322797-stock-illustration-business-man-icon.jpg"> <p class="nama"><?php echo $_SESSION['user']; ?> </p>
        <div class="tubuh">
            <ol class="ol_navbar">
                <li class="li_navbar"> <a href="pinjam.php"> Pinjam Barang </a></li>
                <li class="li_navbar"> <a href="kategori.php"> kategori barang</a></li>
                <li class="li_navbar"> <a href="databarang.php"> Data Barang </a></li>
                <li class="li_navbar"> <a href="kembali.php"> Pengembalian Barang</a></li>
            </ol>
            <hr>

        </div> 
    </div>
</body>
</html>