<?php

include ("../koneksi.php");
include ("pro_update.php");

?>

<h1>Update Pegawai</h1>
<br>
<form action="update" method="GET">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" value="<?php echo $nama ?>" name="upnama"></td>
		</tr>
 		<tr>
			<td>No Telp</td>
			<td><input type="text" value="<?php echo $telp?>" name="uptelp"></td>

		<tr>
			<td>Kota</td>
			<td><input type="text" value="<?php echo $kota?>" name="upkota"></td>
		</tr>
		<tr>
			<td>Posisi</td>
			<td><input type="text" value="<?php echo $posisi?>" name="uposisi"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="text" value="<?php echo $kelamin?>" name="upkelamin"></td>
		</tr>
		<tr>
			<td>Status</td>
			<td><input type="text" value="<?php echo $status?>" name="upstatus"></td>
		</tr>	
		<tr>
			<td><input type="submit" name="update" value="Update"></td>
			<td><a href="index.php">Kembali</a></td>
		</tr>
	</table>
</form>
