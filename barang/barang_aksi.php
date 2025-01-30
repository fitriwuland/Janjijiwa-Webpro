<?php
    session_start();
    if(isset($_POST["button"])) {

        include "koneksi.php";
        $nmgambar = $_FILES["gambar"] ["name"];
        $lokfoto = $_FILES["gambar"] ["tmp_name"];
        if (!empty ($lokfoto)) {
            move_uploaded_file ($lokfoto, "gambar/$nmgambar");
            $gambar = ", gambar = '$nmgambar'";
        }else{
            $gambar= "";
        }
    $sqln = mysqli_query($kon, "INSERT into barang values ('', '$_POST[kdbrg]','$_POST[nmbrg]',
    '$_POST[hrgbrg]','$_POST[stokbrg]','$nmgambar','$_POST[deskripsi]')");

        if($sqln) {
            echo ("DATA BERHASIL DISIMPAN");
        }else{
            echo("DATA GAGAL DISIMPAN");
        }
        echo "<META HTTP-EQUIV='Refresh' Content='1; URL=data_barang.php'>";

    }
?>