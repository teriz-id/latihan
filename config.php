<?php
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'project');


if ($_SERVER['HTTP_HOST'] == 'localhost') {
    define('DBhost', 'localhost');      // Your mySQL Host (usually Localhost)
    define('DBname', 'teriz_url');         // The database name where the data will be stored
    define('DBuser', 'root');         // Your mySQL username
    define('DBpassword', '');        //  Your mySQL Password 
    define('DBprefix', '');         // Prefix for your tables if you are using same db for multiple scripts
  } else {
    define('DBhost', 'localhost');      // Your mySQL Host (usually Localhost)
    define('DBname', 'u1604216_plongo');         // The database name where the data will be stored
    define('DBuser', 'u1604216_teriz');         // Your mySQL username
    define('DBpassword', '!T3rsm2nz');        //  Your mySQL Password 
    define('DBprefix', '');         // Prefix for your tables if you are using same db for multiple scripts
  }

$koneksi = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if($koneksi->connect_error){
    Die('Koneksi database tidak terhubung : Error '.$koneksi->connect_error);
}
?>