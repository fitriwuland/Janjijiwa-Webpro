<?php
session_start();
include "koneksi.php";

$sqln = mysqli_query($kon,"update login set username='$_POST[username]',password='$_POST[password]',
email='$_POST[email]',phone='$_POST[phone]' where username='$_POST[username]'");
if($sqln){
    echo '<script language = "javascript">
    alert("Data user berhasil di edit."); 
    document.location="data_user.php";
    </script>';
}else{
    echo '<script language = "javascript">
    alert("Data user gagal di edit."); 
    document.location="data_user.php";
    </script>';
    }
    echo "<META HTTP-EQUIV='Refresh' Content='1; URL=data_user.php'>";
?>