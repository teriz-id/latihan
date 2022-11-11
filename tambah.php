ta<?php
include "config.php";

$tbh = mysqli_query($koneksi, "INSERT INTO user SET
nama='$_POST[nama]',
alamat='$_POST[alamat]'");

if($tbh){
    echo'<meta http-equiv="refresh" content="0; url='.$webs['var'].'?info=berhasil">';
}
?>