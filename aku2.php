<?php
if ($_POST['submit'] == "submit") {
    $id_brg = $_POST['menu'];
    $jumlah = $_POST['brp'];
    $name = $_POST["anam"];
    $class = $_POST["kelas"];
    $input = $_POST["tglpin"];  
    $back = $_POST["tglkem"];
    
    include "koneksi.php";    
    $selSto =mysqli_query($koneksi, "SELECT * FROM stok WHERE id='$id_brg'");
    $sto    =mysqli_fetch_array($selSto);
    $stok    =$sto['jumlah'];
    //menghitung sisa stok
    $sisa    =$stok-$jumlah;
    
    if ($stok < $jumlah) {
        ?>
        <script language="JavaScript">
            alert('Oops! Jumlah pengeluaran lebih besar dari stok ...');
            document.location.href ='databarang.php';
        </script>
        <?php
    }
    //proses    
    else{
        $insert =mysqli_query($koneksi, "INSERT INTO `pinjam`(`id_siswa`, `nama_siswa`, `kelas`, `nama_alat`,`kode_brg`,`jumlah_brg`, `tgl_pinjam`, `tgl_kembali`) VALUES ('','$name','$class','$brg','','$jumlah','$input','$back')");
            if($insert){
                //update stok
                $upstok= mysqli_query($conn, "UPDATE stok SET jumlah='$sisa' WHERE id='$id_brg'");
                ?>
                <script language="JavaScript">
                    alert('Good! Input transaksi pengeluaran barang berhasil ...');
                    document.location.href ='siswa.php';
                </script>
                <?php
            }
            else {
                echo "<div><b>Oops!</b> 404 Error Server.</div>";
            }
    }
    }
?>