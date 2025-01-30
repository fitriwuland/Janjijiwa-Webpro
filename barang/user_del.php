<?php 
include "koneksi.php";

$sqln =mysqli_query ($kon, "delete from login where id_user='$_GET[ids]'");

if($sqln) {
    echo "Data Berhasil Dihapus";
}else {
    echo "Gagal Menghapus Data";
}
echo "<META HTTP-EQUIV='Refresh' Content='1; URL=data_user.php'>";

?>