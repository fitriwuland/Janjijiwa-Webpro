<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysql_query("SELECT * FROM login WHERE username = '$username' 
and password = '$password'") or die (mysql_error());

if (mysql_num_rows($sql) == 0 ) {
    echo '<script language = "javascript">
    alert ("username dan password salah! Silahkan login kembali.");
    document.location="login.php";</script>';
}else{
    echo '<script language = "javascript">
    alert("anda berhasil login.");
    document.location="barang/index.php";</script>';
}
?>