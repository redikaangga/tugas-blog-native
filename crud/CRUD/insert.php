<?php

include("../koneksi.php");

date_default_timezone_set('Asia/Jakarta');

$id = md5(date('ymdhms') . rand());
$nama = $_POST["nama"];
$telepon = $_POST["telp"];
$kota = $_POST["kota"];
$posisi = $_POST["posisi"];
$kelamin = $_POST["kelamin"];

$sql = "INSERT INTO pegawai(id_pegawai, nama, telepon, kota, id_posisi, kelamin, status)
		VALUES('$id', '$nama', '$telepon', '$kota', '$posisi', '$kelamin', '1')";
mysql_query($sql);

header("location:index.php");

?>