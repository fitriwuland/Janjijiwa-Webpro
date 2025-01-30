<?php 
include "koneksi.php";

$sqln =mysqli_query ($kon, "delete from transaksi where idtrans='$_GET[idt]'");

if($sqln) {
    echo "Data Berhasil Dihapus";
}else {
    echo "Gagal Menghapus Data";
}
echo "<META HTTP-EQUIV='Refresh' Content='1; URL=riwayat.php'>";

?>