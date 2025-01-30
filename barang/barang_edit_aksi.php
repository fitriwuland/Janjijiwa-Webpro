<?php 
session_start();
if(isset($_POST["button"])) {
    include "koneksi.php";
    $nmgambar = $_FILES["gambar"]["name"];
    $lokfoto = $_FILES["gambar"]["tmp_name"];
    if (!empty ($lokfoto)) {
        move_uploaded_file($lokfoto, "gambar/$nmgambar");
        $gambar =", gambar = '$nmgambar'";
    } else {
        $gambar = "";
    }
$sqln = mysqli_query($kon,"update barang set kdbrg='$_POST[kdbrg]',nmbrg='$_POST[nmbrg]',
hrgbrg='$_POST[hrgbrg]', stokbrg='$_POST[stokbrg]', gambar = '$nmgambar', deskripsi='$_POST[deskripsi]' where kdbrg='$_POST[kdbrg]'");
if ($sqln) {
    echo "Berhasil Edit Data";
}else {
    echo "Gagal Edit Data";
}
echo "<META HTTP-EQUIV='Refresh' Content='1; URL=data_barang.php'>";
}
?>