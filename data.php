<?php

include 'konak.php';

if (isset($_POST['kode_brg'])) {
    $kode = $_POST['kode_brg'];

    $sql = "select * from stok where id_brg=$kode";
    $hasil = mysqli_query($koneksi, $sql);
    while ($data = mysqli_fetch_array($hasil)) {
        
        echo  "id : ".$data['nama_barang']; 
        
    }
}

?>