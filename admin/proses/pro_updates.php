<?php

include("../koneksi.php");

$id = $_POST["id"];
$nama = $_POST["nama"];
$telepon = $_POST["telp"];
$kota = $_POST["kota"];
$kelamin = $_POST["kelamin"];
$posisi = $_POST["posisi"];

$sql = "UPDATE pegawai SET nama='$nama', telepon='$telepon', kota='$kota', kelamin=$kelamin, id_posisi='$posisi' WHERE id_pegawai='$id'";

mysql_query($sql);

header("location:index.php");

?>