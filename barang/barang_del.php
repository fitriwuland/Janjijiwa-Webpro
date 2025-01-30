<?php 
include "koneksi.php";

$sqln =mysqli_query ($kon, "delete from barang where idbrg='$_GET[idb]'");

if($sqln) {
    echo "Data Berhasil Dihapus";
}else {
    echo "Gagal Menghapus Data";
}
echo "<META HTTP-EQUIV='Refresh' Content='1; URL=data_barang.php'>";

?>