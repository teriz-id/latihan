<?php
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'project');

$koneksi = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if($koneksi->connect_error){
    Die('Koneksi database tidak terhubung : Error '.$koneksi->connect_error);
}
?>