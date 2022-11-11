<?php

if ($_SERVER['HTTP_HOST'] == 'latihan.plongo.id') {
    define('DBHOST', '45.130.231.115');
    define('DBUSER', 'u1604216_latihan');
    define('DBPASS', 'u1604216_latihan');
    define('DBNAME', 'u1604216_latihan');
  } else {
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBNAME', 'project');
  }

$koneksi = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if($koneksi->connect_error){
    Die('Koneksi database tidak terhubung : Error '.$koneksi->connect_error);
}
?>