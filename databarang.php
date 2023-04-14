<?php
include 'koneksi.php';
$sql = "SELECT * FROM stok, category WHERE stok.kategori = category.id_kategori ORDER BY category.id_kategori, kategori";
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
    <link rel="stylesheet" href="css/Databarang.css">
    <title>Data Barang</title>
</head>
<body>
<div class="kepala">    
        <img class="fotoadmin" src="https://st.depositphotos.com/1637056/4332/v/600/depositphotos_43322797-stock-illustration-business-man-icon.jpg"> <p class="nama"><?php echo $_SESSION['user']; ?> </p>
        <a href="logout.php"> <button class="out"> LogOut </button></a>
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
    <h1> DATA BARANG BENGKEL </h1>
    <form action="" method="get">
        <table>
            <tr>
                <th> <center> No </center>  </th>
                <th> <center> Barang </center> </th>
                <th> <center> Jumlah </center> </th>
                <th> <center> Kategori </center></th>
                <th colspan="2"> <center><a href="insert.php"> <box-icon name='add-to-queue'></box-icon> </a> </center></th>
            </tr>

            <tr>
            <?php foreach ($hasil as $rows) : ?>
            <td> <?php echo $rows['id_brg']; ?> </td>
            <td> <?php echo $rows['nama_barang']; ?> </td>
            <td> <?php echo $rows['jumlah']; ?> </td>
            <td> <?php echo $rows['nama_kat']; ?></td>
            <td> <a href='edit.php?kode=<?php echo $rows["id_brg"];?>'> <box-icon name='edit'></box-icon></a></td>
            <td> <a href='delete.php?id_brg=<?php echo $rows["id_brg"];?>'> <box-icon name='folder-minus'></box-icon></a></td>
        </tr>
        <?php endforeach ?> 
            
        </table>
    </form>
    <p class="p1"> <box-icon name='edit' class="box"> </box-icon> = Edit </p>
    <p class="p2"> <box-icon name='folder-minus' class="box"></box-icon> = Delete </p>

<br>
    <br>
    <h4 class="h7"> _____________________________________________________________________________________________________________________________________________________ </h4>
    <p class="p7"> © 2022 Kelompok 7</p>
</body>
</html>