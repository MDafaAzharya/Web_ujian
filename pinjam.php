<?php
include 'koneksi.php';
$hasil = mysqli_query ($koneksi, "SELECT * FROM stok ")
or die (mysqli_error($koneksi));
$rows = [];
while ($row = mysqli_fetch_array ($hasil)){
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
    <link rel="stylesheet" href="css/pinjam.css">
    <title>Pinjam Barang</title>
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
<form action="prosespinjam.php" method="POST">
    <table class="anj">
    <tr>
        <td> <input type="text" placeholder="Nama siswa" name="anam" class="input" required> </td>
    </tr>
    <tr>
        <td> <input type="text" placeholder="Kelas" name="kelas" class="input" required></td>
    </tr>
    <?php
        include 'koneksi.php';
        $sql_brg = "select * from stok";
        $data_brg = mysqli_query($koneksi,$sql_brg);
    ?>
    <tr>
        <td>
            <?php
                include 'koneksi.php';
                $selBar=mysqli_query($koneksi, "SELECT * FROM stok");        
                echo '<select name="menu" class="slect" id="menu" onChange="aku(this);" required>';    
                echo '<option value="">Pilih Barang</option>';    
                while ($rowbar = mysqli_fetch_array($selBar)) {    
                echo '<option value="'.$rowbar['id_brg'].'">'.$rowbar['nama_barang'].'</option>';    
                }    
                echo '</select>';
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <input type="text" placeholder="kode" name="kode" id="kode" class="input" value="" onchange="total()">
        </td>
    </tr>
    <tr>
        <td>  <input type="number" placeholder="jumlah yang dipinjam" name="brp" class="input" required> </td>
    </tr>
    <tr>
        <td> <p class="p1"> Tanggal Pinjam</p></td>
    </tr>
    <tr>
        <td> <input type="date" name="tglpin" class="date"></td>
    </tr>
    <tr>
        <td> <input type="submit" value="Kirim" class="submit" name="submit"></td>
    </tr>
   
    </table>

</form>
<p class="data"> <a href="siswa.php"> Lihat Data Pinjam</a></p>

<br>
    <br>
    <br>
    <h4 class="h7"> _____________________________________________________________________________________________________________________________________________________ </h4>
    <p class="p7"> © 2022 Kelompok 7</p>

    <script type="text/javascript">
        function aku(m) {
            var p = document.getElementById("kode");
            p.value = m.value;
        }
    </script>
    
</body>
</html>