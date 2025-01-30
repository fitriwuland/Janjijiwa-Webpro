<?php
include "koneksi.php";

$namatoko = $_POST['namatoko'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$query="INSERT into admin VALUES ( '$namatoko' , '$username' , '$password' , '$email' , '$phone' )";
$sql= mysql_query($query) or die (mysql(error));

if (mysql_num_rows($sql) == 0 ) {
    echo '<script language = "javascript">
    alert ("Data berhasil disimpan! Silahkan login.");
    document.location="login2.php";
    </script>';
}else{
    echo '<script language = "javascript">
    alert ("Data gagal disimpan.") ;
    document.location="register2.php";
    </script>';
}
?>