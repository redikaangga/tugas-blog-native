<?php namespace konek;

session_start();

class con 
{
	public function __construct(){
		$local="localhost";
		$user="root";
		$pass="";
		$db="newbie";

		$con=mysql_connect($local, $user, $pass) or die("Koneksi gagal");
		mysql_select_db($db) or die("Database tidak ada");
	}

	public function show(){
		$sql = " SELECT konten.isi_main as isi,
		konten.judul,
		konten.tanggal,
		konten.id
		FROM konten ";
		return $sql;
	}

	public function login(){

		$username = $_POST['nama'];
		$password = md5($_POST['pass']);

		$sql = "SELECT * FROM admin WHERE user = '{$username}' AND pass = '{$password}'";

		$result = mysql_query($sql);
		

		if(mysql_num_rows($result) == 1)
		{
			$row = mysql_fetch_array($result);
			header("location:../html/index.php");
			// print_r($_SESSION);
			if($password == $row['pass']){
				$_SESSION['user'] = mysql_fetch_array($result);
				header("location:../html/index.php");
			}
			else {
				echo "	<script> 
							alert ('Username / Password salah'); 
							location.href='masuk.php';
						</script>";
				}
		} else {
			echo "	<script> 
			alert ('Username / Password salah'); 
			location.href='masuk.php';
		</script>";		}
		return $row();
	}

	// 	$username = $_POST['nama'];
	// 	$password = md5($_POST['pass']);

	// 	$sql = "
	// 			SELECT * FROM login 
	// 			WHERE username = '{$username}'
	// 	";

	// 	$result = mysql_query($sql);

	// 	$row = mysql_fetch_array($result);
	// 	if($row)
	// 	{
	// 		header("location:../html/index.php");
	// // print_r($_SESSION);
	// 	}
	// 	else {
	// 		echo "	<script> 
	// 					alert ('Username / Password salah'); 
	// 					location.href='masuk.php';
	// 				</script>";
	// }
}
?>