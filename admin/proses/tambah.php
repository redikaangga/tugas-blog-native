<?php include("../koneksi.php") ?>

<?php



$sql = "SELECT	kota.id_kota,
				kota.nama_kota
		FROM 	kota";

$sqlp = "SELECT posisi.id,
				posisi.nama
		 FROM posisi";

$result = mysql_query($sql);
$resultp = mysql_query($sqlp);

?>

<h1>Form Tambah Data</h1>

<a href="index.php">Kembali</a>

<form action="insert.php" method="POST">

	<table>
		<tr>
			<td>
				Nama
			</td>
			<td>
				<input type="text" name="nama">
			</td>
		</tr>
		<tr>
			<td>
				Telepon
			</td>
			<td>
				<input type="text" name="telp">
			</td>
		</tr>
		<tr>
			<td>
				Kota
			</td>
			<td>
				<select name="kota">
					<?php while($row = mysql_fetch_array($result))
					{ ?>
					<option value="<?php echo $row['id_kota'] ?>">
						<?php echo $row['nama_kota'] ?>
					</option>
					<?php } ?>
				</select>
			</td>
			</td>
		</tr>		
		<tr>
			<td>
				Posisi
			</td>
			<td>
				<select name="posisi">
				<?php while($raw = mysql_fetch_array($resultp))
				{ ?>
					<option value="<?php echo $raw['id'] ?>">
						<?php echo $raw['nama'] ?>
					</option>
				<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Jenis Kelamin
			</td>
			<td>
				<input type="radio" name="kelamin" value="1">Laki-laki
				<input type="radio" name="kelamin" value="2">Perempuan
				<input type="radio" name="kelamin" value="3">Abnormal
			</td>
		</tr>
		<tr>
			<td>
				Status
			</td>
			<td>
				<input type="text" value="1" readonly="" name="status">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Tambah Data">
			</td>
		</tr>
	</table>

</form>