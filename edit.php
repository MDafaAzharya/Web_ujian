<?php
include 'koneksi.php';
$SQL=mysqli_query($koneksi,"SELECT * FROM stok WHERE id_brg = '$_GET[kode]'");
$data=mysqli_fetch_array($SQL);
?>

<html>

<head>
    <title>Edit Data</title>
    <style>
        body {
            font-family: sans-serif;
            margin-top: 200px;
            margin-left: 500px;
        }
    </style>
</head>

<body>
    <table border="0" bgcolor="#f1f1f1" style="border-radius: 15px;" cellspacing="5" width="50%" height="65%">
        <tr>
            <td valign="top">
                <h1>Edit Data</h1>
            <td>
        </tr>
        <tr valign="center">
            <td>
                <form action="updatepro.php" method="post">
                    <table>
                        <tr>
                            <td width="120"> Kode Barang </td>
                            <td> <input type="text" name="id_brg" value="<?php echo $data['id_brg']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off" readonly> </td>
                        </tr>
                        <tr>
                            <td> Nama Barang </td>
                            <td> <input type="text" name="nama" value="<?php echo $data['nama_barang']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> Jumlah </td>
                            <td> <input type="text" name="merek" value="<?php echo $data['jumlah']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="proses" id="proses" value="Save Changes"
                                    style="margin-left:-110px; margin-top:40px; background-color:#89CFFD;border-radius:10px;padding:5px;width:100px;">
                            </td>
                        </tr>
                    </table>
                </form>
                <a href="databarang.php"
                    style="margin-left:30px; border-radius:10px;background-color:#89CFFD; color:black; text-decoration:none;padding:5px;width:100px;">
                    <strong>Batal</strong> </a>
            </td>
        </tr>
    </table>
</body>

</html>