<?php 
include "koneksi.php";

$sqln =mysqli_query ($kon, "delete from keranjang where idkjg='$_GET[idk]'");

if($sqln) {
    echo '<script language = "javascript">
    alert ("Data Berhasil Dihapus.");
    document.location="data_keranjang.php";</script>';
}else {
    echo '<script language = "javascript">
    alert ("Gagal Menghapus Data");
    document.location="data_keranjang.php";</script>';
}

?>

