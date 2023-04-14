<?php
$name = $_POST["anam"];
$class = $_POST["kelas"];
$brg = $_POST["menu"];
$input = $_POST["tglpin"];
$jumlah = $_POST["brp"];
$code = $_POST["kode"];

include "koneksi.php";    
   $selSto =mysqli_query($koneksi, "SELECT * FROM stok WHERE id_brg='$brg'");
   $sto    =mysqli_fetch_array($selSto);
   $benda    =$sto['jumlah'];

$data = $benda - $jumlah;

if ($benda < $jumlah) {
   ?>
   <script language="JavaScript">
       alert('Oops! Jumlah pengeluaran lebih besar dari stok ...');
       document.location='pinjam.php';
   </script>
   <?php
}
//proses    
else{
   $insert =mysqli_query($koneksi, "INSERT INTO `pinjam`(`id_siswa`, `nama_siswa`, `kelas`, `nama_alat`,`kode_brg`,`jumlah_brg`,`tgl_pinjam`) VALUES ('','$name','$class','$brg','$code','$jumlah','$input')");
       if($insert){
           //update stok
           $upstok= mysqli_query($koneksi,  "UPDATE stok SET jumlah='$data' WHERE id_brg='$brg'");
           ?>
           <script language="JavaScript">
               alert('Good! Input transaksi pengeluaran barang berhasil ...');
               document.location='siswa.php';
           </script>
           <?php
       }
       else {
           echo "<div><b>Oops!</b> 404 Error Server.</div>";
       }
}
?>