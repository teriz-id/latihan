<?php
include "config.php";

$tbh = mysqli_query($koneksi, "DELETE FROM user WHERE id='$_GET[id]'");

if($tbh){
    echo'<meta http-equiv="refresh" content="0; url=../project?info=dihapus">';
}
?>