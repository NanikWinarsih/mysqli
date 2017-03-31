<?php
include "koneksi.php";
$update = "UPDATE tbl_mhsiswa SET nama_mhs='wahab syahroni' where id_mhs ='1'";
$update_query = mysqli_query($koneksi,$update);
if($update_query){
echo "<br/>Record Telah berhasil di UPDATE...";
}else{
echo "<br/>Record Gagal untuk di Update..";
}
?>