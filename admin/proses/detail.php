<?php

include ("../../koneksi.php");

$id = $_GET['id'];

$sql = "
SELECT
	

FROM
konten

WHERE
pg.id_pegawai = '{$id}' AND
pg.kelamin = kl.id_kelamin AND
pg.id_posisi = ps.id AND
pg.kota = kt.id_kota
";

$hasil = mysql_query($sql);
$data = mysql_fetch_array($hasil);

?>

<h1>Detail Pegawai</h1>
<br>
<form action="pro_update.php?id=<?php echo $data['id']; ?>" method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" value="<?php echo $data['nama_pegawai']?>" name="ilnama" ></td>
		</tr>
		<tr>
			<td>No Telp</td>
			<td><input type="text" value="<?php echo $data['telepon']?>" name="iltelp" ></td>

		<tr>
			<td>Kota</td>
			<td><input type="text" value="<?php echo $data['nama_kota']?>" name="ilkota" ></td>
		</tr>
		<tr>
			<td>Posisi</td>
			<td><input type="text" value="<?php echo $data['posisi']?>" name="ilposisi" ></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="text" value="<?php echo $data['jenis_kelamin']?>" name="ilkelamin" ></td>
		</tr>
		<tr>
			<td>Status</td>
			<td><input type="text" value="<?php echo $data['status']?>" name="ilstatus" readonly=""></td>
		</tr>	
		<tr>
		</tr>
			<td><input type="submit" name="edit" value="Edit"></td>
			<td><a href="index.php">Kembali</a></td>
		</tr>
	</table>
</form>
