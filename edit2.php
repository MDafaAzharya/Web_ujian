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
            margin-top: 200px;
            margin-left: 510px;
        }
    </style>
</head>

<body>
    <table border="0" bgcolor="#f1f1f1"style="border-radius: 15px;" cellspacing="3" width="50%" height="50%">
        <tr>
            <td valign="top">
                <h1>Edit Data</h1>
            <td>
        </tr>
        <tr valign="center">
            <td>
                <form action="updatepro2.php" method="post">
                    <table>
                        <tr>
                            <td width="120"> Kode Barang </td>
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
                            <td> <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> Alat </td>
                            <td> <input type="text" name="alat" value="<?php echo $data['nama_alat']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> Tanggal Pinjam </td>
                            <td> <input type="text" name="pinjam" value="<?php echo $data['tgl_pinjam']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                            <td></td>
                            <td><input type="submit" name="proses" id="proses" value="Save Changes"
                                    style="margin-left:-120px; margin-top:40px; background-color:#89CFFD;border-radius:15px;padding:5px;width:100px;">
                            </td>
                        </tr>
                    </table>
                </form>
                <a href="siswa.php"
                style="margin-left:10px; border-radius:10px; color:black; background-color:#89CFFD; text-decoration:none;padding:5px;width:100px;">
                    Batal</a>
            </td>
        </tr>
    </table>
</body>

</html>