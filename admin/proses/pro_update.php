<?php

include ("../koneksi.php");

$id = $_GET['id'];
$nama = $_POST['ilnama'];
$telp = $_POST['iltelp'];
$kota = $_POST['ilkota'];
$posisi = $_POST['ilposisi'];
$kelamin = $_POST['ilkelamin'];
$status = $_POST['ilstatus'];


$sql = "UPDATE pegawai, posisi, kota
		SET pegawai.nama=upnama,
			pegawai.telepon=uptelp,
			kota.nama_kota=upkota,
			posisi.nama=uposisi
		WHERE pegawai.id_pegawai=$id";

$hasil = mysql_query($sql);
header("location:index.php");
?>