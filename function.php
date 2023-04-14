<?php
    function hapus ($kd_brg){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM stok WHERE id_brg = $kd_brg");
        return mysqli_affected_rows($koneksi);
    }
?>