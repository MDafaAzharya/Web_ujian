<?php
   include 'koneksi.php';
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/Kategori.css">
   <title>Document</title>
</head>
<body>
<div class="kepala">    
        <img class="fotoadmin" src="https://st.depositphotos.com/1637056/4332/v/600/depositphotos_43322797-stock-illustration-business-man-icon.jpg"> <p class="nama"><?php echo $_SESSION['user']; ?> </p>
        <a href="logout.php"> <button class="out"> LogOut </button></a>
        <div class="tubuh">
            <ol class="ol_navbar">
                <li class="li_navbar"> <a href="pinjam.php"> Pinjam Barang </a></li>
                <li class="li_navbar"> <a href="kategori.php"> kategori barang</a></li>
                <li class="li_navbar"> <a href="databarang.php"> Data Barang </a></li>
                <li class="li_navbar"> <a href="kembali.php"> Pengembalian Barang</a></li>
            </ol>
            <hr>

        </div> 
    </div>
   
</body>
</html>

<?php
    $ca=mysqli_connect('localhost','root','','ujikom');
    $sql=mysqli_query($ca,"select*from stok");
    $menu= array();
    while(($row=mysqli_fetch_array($sql))!= null)
    {
        if(!isset($menu[$row['kategori']]))
        $menu[$row['kategori']] = array();
        $menu[$row['kategori']][] = $row;
    }
    foreach ($menu as $kat => $subs)
    {
        echo '<table border="1" align="center" cellspacing="0" cellpadding="5">';
        echo '<tr>';
            echo '<th colspan="3">';
                echo $kat ;
            echo '</th>';
        echo '</tr>';
        echo '<tr>';
            echo '<th> Kode Barang </th>';
            echo '<th> Nama barang </th>';
            echo '<th> Jumlah barang </th>';
        echo '</tr>';
        echo '<tr>';
        foreach ($subs as $sub)
        {
            echo '<td>';
                    echo  $sub["id_brg"] ;
            echo '</td>';
            echo '<td>';
                    echo $sub["nama_barang"];
                echo'</ol>';
            echo '</td>';
            echo '<td>';  
                    echo $sub["jumlah"];
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Kategori.css">
    <title>Document</title>
</head>
<body>
    
<br>
    <h4 class="h7"> _____________________________________________________________________________________________________________________________________________________ </h4>
    <p class="p7"> © 2022 Kelompok 7</p>
    
</body>
</html>