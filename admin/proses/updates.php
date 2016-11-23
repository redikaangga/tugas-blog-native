<?php 

include("../koneksi.php"); 

$id = $_GET['id'];

$sql = "
SELECT 
pg.id_pegawai as pegawai,
pg.nama,
pg.telepon,
pg.kota,
pg.kelamin,
kl.nama as jenis_kelamin,
kl.id_kelamin,
kt.nama_kota,
kt.id_kota as kota_id,
ps.nama as posisi,
ps.id as posisi_id,
pg.status

FROM 
pegawai pg,
posisi ps,
kota kt,
j_kelamin kl

WHERE
pg.id_pegawai = '{$id}' AND
pg.kelamin = kl.id_kelamin AND
pg.id_posisi = ps.id AND
pg.kota = kt.id_kota
";
$result = mysql_query($sql);
$data = mysql_fetch_array($result);

$sqlp = "SELECT * FROM posisi";		
$resulp = mysql_query($sqlp);

$sqlk = "SELECT * FROM kota";		
$resulk = mysql_query($sqlk);


?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../bootstraps/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<div class="alert alert-success">Bootstrap</div>
<h1>Form Update Data</h1>

<a href="index.php">Kembali</a>

<form action="pro_updates.php" method="POST" class="form-horizontal">
	<table>
		<input type="hidden" name="id" value="<?php echo $data['pegawai'] ?>">
		<div class="form-group">
			<tr>
				<td class="col-md-2 control-label">
					Nama
				</td>
				<div>
					<td class="col-md-10">
						<input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control">
					</td>
				</div>
			</tr>
		</div>

		<div class="form-group">
			<tr>
				<td class="col-md-2 control-label">
					Telepon
				</td>
				<td class="col-md-10">
					<input type="text" name="telp" value="<?php echo $data['telepon'] ?>" class="form-control">
				</td>
			</tr>
		</div>

		<div class="form-group">
			<tr>
				<td class="col-md-2 control-label">
					Kota
				</td>
				<td class="col-md-10">
					<select name="kota" class="form-control">
						<?php while($datak = mysql_fetch_array($resulk))
						{ ?>
						<option value="<?php echo $datak['id_kota'] ?>" <?php if($datak['id_kota'] == $data['kota_id']) echo "selected" ?>>
							<?php echo $datak['nama_kota'] ?>
						</option>
						<?php } ?>
					</select>
				</td>
			</tr>		
		</div>

		<div class="form-group">
		<tr>
			<td class="col-md-2 control-label">
				Posisi
			</td>
			<td class="col-md-10">
				<select name="posisi" class="form-control">
					<?php while($datap = mysql_fetch_array($resulp))
					{ ?>
					<option value="<?php echo $datap['id'] ?>" <?php if($datap['id'] == $data['posisi_id']) echo "selected" ?>>
						<?php echo $datap['nama'] ?>
					</option>
					<?php } ?>
				</select>
			</td>
		</tr>
		</div>

		<div class="form-group">
		<tr>
			<td class="col-md-2 control-label">
				Jenis Kelamin
			</td>
			<td class="col-md-10">
				<input type="radio" <?php if($data['kelamin'] == 1) echo "checked" ?> name="kelamin" value="1">Laki-laki
				<input type="radio" <?php if($data['kelamin'] == 2) echo "checked" ?> name="kelamin" value="2">Perempuan
				<input type="radio" <?php if($data['kelamin'] == 3) echo "checked" ?> name="kelamin" value="3">Abnormal
			</td>
		</tr>
		</div>

		<div class="form-group">
		<tr>
			<td class="col-md-2 control-label">
				Status
			</td>
			<td class="col-md-10">
				<input type="text" value="1" readonly="" name="status" value="<?php echo $data['status'] ?>" class="form-control">
			</td>
		</tr>
		</div>

		<tr>
			<td class="col-md-2">
				<input type="submit" value="Update Data">
			</td>
		</tr>
	</table>
</form>