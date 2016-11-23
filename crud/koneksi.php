<?php

$local="localhost";
$user="root";
$pass="";
$db="cendana";

$con=mysql_connect($local, $user, $pass) or die("Koneksi gagal");
mysql_select_db($db) or die("Database tidak ada");

?>