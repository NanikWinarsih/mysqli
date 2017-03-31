<?php
include "koneksi.php";
$delete = "delete from tbl_mhsiswa where id_mhs = '4'";
$delete_query = mysqli_query($koneksi,$delete);
if($delete_query){
echo "<br/>Record Telah berhasil di hapus...";
}else{
echo "<br/>Record Gagal untuk dihapus..";
}
?>