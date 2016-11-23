<?php

include ("../koneksi.php");

$id = $_GET['id'];

$sql = "DELETE FROM pegawai WHERE id_pegawai = '$id'";

mysql_query($sql);

header("location:index.php");

?>