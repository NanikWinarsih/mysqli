<?php
include "koneksi.php";
$insert = "insert into tbl_mhsiswa(nama_mhs, jenis_kelamin, tgl_lahir, alamat)
values('syahroni', 'Pria', '1986-12-09','Panglegur')";
$insert_query = mysqli_query($koneksi,$insert);
if($insert_query) {
echo "<br/>Berhasil di insert";
} else {
echo "<br/>Gagal Insert Record";
}
?>
