<?php
include "koneksi.php";

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

$query="INSERT into login VALUES (null, '$fullname' , '$username' , '$password' , '$email' , '$phone' , '$gender' )";
$sql= mysql_query($query) or die (mysql(error));

if (mysql_num_rows($sql) == 0 ) {
    echo '<script language = "javascript">
    alert ("Data berhasil disimpan! Silahkan login.");
    document.location="login.php";
    </script>';
}else{
    echo '<script language = "javascript">
    alert ("Data gagal disimpan.") ;
    document.location="register.php";
    </script>';
}
?>