<?php
include "koneksi.php"; //untuk efisiensi koding
echo "<br/>";
$tampilkan = "select * from tbl_mhsiswa";
$query_tampilkan = mysqli_query($koneksi,$tampilkan);
while($hasil = mysqli_fetch_array($query_tampilkan))
{
echo $hasil['nama_mhs']." | ".$hasil['jenis_kelamin']."<br />";
}
?>