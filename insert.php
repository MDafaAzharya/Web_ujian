<?php
    include 'koneksi.php';
    session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="css/Insert.css">
    <title>Tambah Barang</title>
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

<form action="insertpro.php" method="POST">
    <table class="anj">
    <tr><td>
        
    <select name="menu" class="slect" >
        <option value="">Pilih Kategori</option>
        <?php
        include 'koneksi.php';
        $SQL = "SELECT * FROM category";
        $hasil = mysqli_query($koneksi,$SQL);
        while($data=mysqli_fetch_array($hasil))
        {
 ?>
   <option value="<?=$data['id_kategori']?>"><?=$data['nama_kat']?></option> 
 <?php
  }
 ?>
    </select></td></tr>
<tr><td><input type="text" name="namabrg" class="input" placeholder="Nama Barang" required></td></tr>
<tr><td><input type="text" name="jumlah" class="input "required placeholder="Jumlah"></td></tr>
<tr><td><input type="submit" value="Tambah" class="submit"></td></tr>
    </table>
</form>
<p class="lihat"> <a href="databarang.php"> Lihat Data Barang</a></p>
    <br>
    <br>
    <br>
    <br>
    <p></p>
    <h4 class="h7"> _____________________________________________________________________________________________________________________________________________________ </h4>
    <p class="p7"> © 2022 Kelompok 7</p>
</body>
</html>