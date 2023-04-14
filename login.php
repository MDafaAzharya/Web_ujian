<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
     <!-- Navigattion Bar -->
     <div class="kepala">
        <nav class="wrapper">
            <div class="logo">
                <img class="logoBP" src="img/Logo BF.png">
                <h1 class="titlelogo"> Broadcasting & <br>Perfilman</h1>
            </div>
            <ol class="ol_navbar">
                <li class="li_navbar"><a href="navbar.php">Home</a> </li>
                <li class="li_navbar"><a href="../../../Documents/PWPB/kel_1/kerkom/Profil BP.html">About BP</a> </li>
                <li class="li_navbar"><a href="../../../PWPB/kel_1/Kerkom/Lingkungan Bengkel.html">Lingkungan Bengkel</a> </li>
                <li class="li_navbar"><a href="../../../PWPB/kel_1/Kerkom/prospekkerja.html"> Prospek Kerja</a> </li>
                <li class="li_navbar"><a href="../../../PWPB/kel_1/Kerkom/karyabp.html"> Hasil Karya</a> </li>
            </ol>
        </nav>
    </div>
    <!-- navigation Bar End -->

    <!-- Login -->
    <div class="konten">
        <img class="gambar "src="https://img.freepik.com/free-vector/computer-login-concept-illustration_114360-7962.jpg?w=2000">
    </div>

    <form action="proseslog.php" method="POST"> 

        <div class="login">
        <table class="tabellogin">
            <tr>
                <td> <h3 class="h3"> WELCOME </h3> </td> 
            </tr>
            <tr>
                <td> <input type="text" placeholder="Masukkan Username" required class="input" name="user"></td>
            </tr>
            <tr>
                <td> <input type="password" placeholder="Masukkan Password" required class="input" name="pass"></td>
            </tr>
            <tr>
               <td> <label class="container">
                    <input type="checkbox" checked="checked" class="chek"> Remember Me
                    <span class="checkmark"></span>
                    </label>
                </td>
            </tr>
            <tr>
                <td> <input type="submit" value="Login" class="submit"></td>
            </tr>
            <tr>
                <td> <p class="p4"> Belum Punya akun? <a href="signup.php"> Daftar Disini</a></p></td>
            </tr>
        </table>
        </div>
    </form>

    <br>
    <br>
    <br>
    <br>
    <br>
    <h4 class="h4"> ___________________________________________________________________________________________________________________________________________________ </h4>
    <p class="p5"> © 2022 Kelompok 7</p>

</body>
</html>