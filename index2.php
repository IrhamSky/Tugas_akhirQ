<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

//ambil data dari tabel data_mhs/ query data mahasiswa
$result = mysqli_query($koneksi, "SELECT * FROM data_mhs");

//ambil data (fetch) dari object result
//mysqli_fetch_row(); //mengembalikan array numerik
//mysqli_fetch_assoc(); //mengembalikan array assosiatif
//mysqli_fetch_array(); //mengembalikan array numerik & array assosiatif
//mysqli_fetch_object(); //mengembalikan sebuah objek

/* while ($mhs = mysqli_fetch_assoc($result)) {
        var_dump($mhs);
    }
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>