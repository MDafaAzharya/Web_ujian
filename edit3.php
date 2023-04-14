<?php
include 'koneksi.php';
$SQL=mysqli_query($koneksi,"SELECT * FROM kembali WHERE id_siswa = '$_GET[kode]'");
$data=mysqli_fetch_array($SQL);
?>

<html>

<head>
    <title>Edit Data</title>
    <style>
        body {
            font-family: sans-serif;
            margin-top: 200px;
            margin-left: 530px;
        }
    </style>
</head>

<body>
    <table border="0" bgcolor="#f1f1f1" style="border-radius: 15px;" cellspacing="5" width="30%" height="50%">
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
                            <td width="120"> ID Siswa </td>
                            <td> <input type="text" name="id_siswa" value="<?php echo $data['id_siswa']; ?>"
                                    style="border-radius:15px;padding:5px;" autocomplete="off" readonly> </td>
                        </tr>
                        <tr>
                            <td> Nama Siswa </td>
                            <td> <input type="text" name="nama" value="<?php echo $data['nama_siswa']; ?>"
                                    style="border-radius:15px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> Kelas </td>
                            <td> <input type="text" name="keles" value="<?php echo $data['kelas']; ?>"
                                    style="border-radius:15px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> Alat </td>
                            <td> <input type="text" name="alat" value="<?php echo $data['nama_alat']; ?>"
                                    style="border-radius:15px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> kode Barang </td>
                            <td> <input type="text" name="code" value="<?php echo $data['kode_brg']; ?>"
                                    style="border-radius:15px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> jumlah </td>
                            <td> <input type="text" name="brp" value="<?php echo $data['jumlah_brg']; ?>"
                                    style="border-radius:15px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> Tanggal Pinjam </td>
                            <td> <input type="text" name="pinjam" value="<?php echo $data['tglpinjam']; ?>"
                                    style="border-radius:15px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> Tanggal Kembali </td>
                            <td> <input type="text" name="kembali" value="<?php echo $data['tglkem'];?>"
                                    style="border-radius:15px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="proses" id="proses" value="Save Changes"
                                    style="margin-left:-13px; margin-top:40px; background-color:lightgreen;border-radius:15px;padding:5px;width:100px;">
                            </td>
                        </tr>
                    </table>
                </form>
                <a href="siswa.php"
                    style="margin-left:142px; border-radius:15px; color:black; text-decoration:none;">
                    <strong>Batal</strong> </a>
            </td>
        </tr>
    </table>
</body>

</html>