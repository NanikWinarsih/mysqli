<?php
$server="localhost";
$username="root"; //username phpmyadmin anda
$password="wahab120171"; // password phpmyadminnya
$database="web_teknik_2016"; //database yang anda gunakan
//mysql_connect() adalah sebuah fungsi di php
//yang digunakan untuk mengkoneksikan
$koneksi=mysqli_connect($server, $username, $password);
//perintah mysql_select_db() adalah sebuah fungsi di php
//yang digunakan untuk memilih database yang di gunakan
$pilih_db=mysqli_select_db($koneksi,$database);
if($pilih_db){
echo "KONEKSI KE DATABASE BERHASIL";
}else{
echo "KONEKSI KE DATABASE GAGAL";
}
?>