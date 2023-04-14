<?php
include 'koneksi.php';

$username = $_POST['user'];
$password = $_POST['pass'];
$simpan = md5($password);
$role = $_POST['role'];

$sql = "INSERT INTO `akun`(`id_user`, `username`, `pass`, `role`) VALUES ('','$username','$simpan','$role')";
$hasil = mysqli_query($koneksi, $sql);

session_start();
echo "<script>
alert ('Daftar berhasil')
document.location.href = 'login.php';
</script>";
?>


