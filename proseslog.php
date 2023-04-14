<?php

session_start();
echo "<script>
	alert('Password atau Username Salah!!!');
	document.location.href = 'login.php';
</script>";
include 'koneksi.php';
$username = $_POST['user'];
$password = $_POST['pass'];
$simpan = md5($password);
$login = mysqli_query($koneksi,"SELECT * FROM akun where username='$username' and pass='$simpan'");
	$data = mysqli_fetch_assoc($login);
    // Admin
  if($data['role']=="admin"){
	$_SESSION['user'] = $username;
	$_SESSION['role'] = "admin";
	header("location:sambung.php");
 
    // User
}else if($data['role']=="user"){
	$_SESSION['user'] = $username;
	$_SESSION['role'] = "user";
	header("location:databarang.php");
}

?>
