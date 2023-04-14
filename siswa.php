<?php
include 'koneksi.php';
$sql = "SELECT * FROM pinjam,stok WHERE pinjam.nama_alat = stok.id_brg ORDER BY kode_brg";
$hasil = mysqli_query ($koneksi, $sql);
$rows = [];
while ($row = mysqli_fetch_array($hasil)){
   $rows[] = $row;
}
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="css/siswa.css">
    <title>Document</title>
</head>
<body>
<div class="kepala">    
        <img class="fotoadmin" src="https://st.depositphotos.com/1637056/4332/v/600/depositphotos_43322797-stock-illustration-business-man-icon.jpg"> <p class="nama"><?php echo $_SESSION['user']; ?> </p>
        <a href="logout.php"> <button class="out"> LogOut </button></a>
        <div class="tubuh">
            <ol class="ol_navbar">
                <li class="li_navbar"> <a href="pinjam.php"> Pinjam Barang </a></li>
                <li class="li_navbar"> <a href="kategori.php"> kategori barang</a></li>
                <li class="li_navbar"> <a href="insert.php"> Data Barang </a></li>
                <li class="li_navbar"> <a href="kembali.php"> Pengembalian Barang</a></li>
            </ol>
            <hr>

        </div> 
    </div>

    <h1> DATA PEMINJAMAN BARANG </h1>
<form action="" method="get">
       <table>
            <tr>
                <th> <center> id Siswa </center>  </th>
                <th> <center> Nama Siswa </center> </th>
                <th> <center> Kelas </center> </th>
                <th> <center> Nama ALat </center></th>
                <th> <center> Kode Barang </center></th>
                <th> <center> jumlah </center></th>
                <th> <center> Tanggal Pinjam </center></th>
                <th colspan="3"> <center><a href="pinjam.php"> <box-icon name='add-to-queue'></box-icon> </a></th>
            </tr>
            
            <tr>
            <?php foreach ($hasil as $rows) : ?>
            <td> <?php echo $rows['id_siswa']; ?> </td>
            <td> <?php echo $rows['nama_siswa']; ?> </td>
            <td> <?php echo $rows['kelas']; ?> </td>
            <td> <?php echo $rows['nama_barang']; ?></td>
            <td> <?php echo $rows['kode_brg']; ?></td>
            <td> <?php echo $rows['jumlah_brg']; ?></td>
            <td> <?php echo $rows['tgl_pinjam']; ?></td>
            <td> <a href="edit2.php?kode=<?php echo $rows['id_siswa']?>"><box-icon name='edit'> </box-icon></a></td>
            <td> <a href="delete2.php?id_siswa=<?php echo $rows['id_siswa']; ?>" class="delete" id="delete"> <box-icon name='folder-minus'></box-icon></a></td>
            <td>  <a href="kembalikan.php?kode=<?php echo $rows['id_siswa']?>"> Kembalikan </a></td> </td>
        </tr>
        <?php endforeach ?> 
            
        </table>
    </form>
    <p class="p1"> <box-icon name='edit' class="box"> </box-icon> = Edit </p>
    <p class="p2"> <box-icon name='folder-minus' class="box"></box-icon> = Delete </p>

<br>
    <br>
    <br>
    <h4 class="h7"> _____________________________________________________________________________________________________________________________________________________ </h4>
    <p class="p7"> © 2022 Kelompok 7</p>


</body>
</html>