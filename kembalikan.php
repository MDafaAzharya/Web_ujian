<?php
include 'koneksi.php';
$SQL=mysqli_query($koneksi,"SELECT * FROM pinjam WHERE id_siswa = '$_GET[kode]'");
$data=mysqli_fetch_array($SQL);
?>

<html>

<head>
    <title>Edit Data</title>
    <style>
        body {
            font-family: FUTURA MD BT;
            margin-top: 120px;
            margin-left: 500px;
        }
    </style>
</head>

<body>
    <table border="0" bgcolor="#f1f1f1" style="border-radius: 15px;" cellspacing="3" width="50%" height="50%">
        <tr>
            <td valign="top">
                <h1>Edit Data</h1>
            <td>
        </tr>
        <tr valign="center">
            <td>
                <form action="proseskembali.php" method="post">
                    <table>
                        <tr>
                            <td width="180"> ID Siswa </td>
                            <td> <input type="text" name="id_siswa" value="<?php echo $data['id_siswa']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off" readonly> </td>
                        </tr>
                        <tr>
                            <td> Nama Siswa </td>
                            <td> <input type="text" name="nama" value="<?php echo $data['nama_siswa']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> Kelas </td>
                            <td> <input type="text" name="keles" value="<?php echo $data['kelas']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> Alat </td>
                            <td> <input type="text" name="alat" value="<?php echo $data['nama_alat']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> kode Barang </td>
                            <td> <input type="text" name="code" value="<?php echo $data['kode_brg']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> jumlah </td>
                            <td> <input type="text" name="brp" value="<?php echo $data['jumlah_brg']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> Tanggal Pinjam </td>
                            <td> <input type="text" name="pinjam" value="<?php echo $data['tgl_pinjam']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> Tanggal Kembali </td>
                            <td> <input type="date" name="kembali"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="proses" id="proses" value="Simpan Data"
                                    style="margin-left:-180px; margin-top:40px; background-color:#89CFFD;border-radius:10px;padding:5px;width:100px;">
                            </td>
                        </tr>
                    </table>
                </form>
                <a href="siswa.php"
                    style="margin-left:10px; border-radius:10px; color:black; background-color:#89CFFD; text-decoration:none;padding:5px;width:100px;">
                    Batal </a>
            </td>
        </tr>
    </table>
</body>

</html>