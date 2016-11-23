<?php
include ("../koneksi.php");

$sql = " SELECT pegawai.id_pegawai as id,
pegawai.nama as nama, 
pegawai.telepon,
pegawai.status,
kota.nama_kota as kota,
j_kelamin.nama as kelamin,
posisi.nama as posisi 

FROM 	pegawai,posisi,kota,j_kelamin

WHERE 	pegawai.id_posisi = posisi.id 
AND pegawai.kota=kota.id_kota 
AND pegawai.kelamin=j_kelamin.id_kelamin";

if(@$_GET['q']) {
	$search = $_GET['q'];
	$sql .= " AND (pegawai.nama LIKE '%{$search}%' OR posisi.nama LIKE '%{$search}%')";
}

$ambil = mysql_query($sql, $con);

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../bootstraps/css/bootstrap.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<style type=text/css>
		th {
			text-align: center;
		}
	</style>
	<meta charset="utf-8">
	<title>CRUD</title>
</head>
<body>
	<div class="alert alert-success">Bootstrap</div>
	<a href="tambah.php" class="btn btn-success">Tambah Data</a>
	<form action="index.php" method="GET">
		<input type="submit" value="Cari" class="btn btn-primary btn-sm">
		<input type="text" name="q" value="<?php echo @$_GET['q'] ?>" class="form-group ">
	</form>
	<table class="table text-center">
		<thead> 
			<tr> 
				<th>Nama</th>
				<th>Telepon</th>
				<th>Kota</th>
				<th>Posisi</th>
				<th>Kelamin</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>

			<?php
			while($row = mysql_fetch_array($ambil)) {
				?>
				<tr>
					<td><?php echo $row["nama"] ?></td>
					<td><?php echo $row["telepon"] ?></td>
					<td><?php echo $row["kota"] ?></td>
					<td align="center"><?php echo $row["posisi"] ?></td>
					<td><?php echo $row["kelamin"] ?></td>
					<td align="center"><?php echo $row["status"] ?></td>
					<td>
						<a href="updates.php?id=<?php echo $row['id'] ?>" class="btn btn-success">
							<span class="glyphicon glyphicon-pencil"></span> Update
						</a> 
						<a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
							<span class="glyphicon glyphicon-trash"></span> Hapus 
						</a> 
						<a href="detail.php?id=<?php echo $row['id'] ?>" class="btn btn-info">
							<span class="glyphicon glyphicon-search"></span> Detail
						</a> 
					</td>
				</tr>
				
				<?php
			}
			?>
		</tbody>
	</table>
</body>
</html>