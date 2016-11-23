<?php //session_start(); ?>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../assets/bootstraps/css/bootstrap.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>	

	<?php
	include '../koneksi.php';

	use konek\con as con;

	// if(isset($_SESSION['user'])){
		$login = new con;

		$hasil = mysql_query($login->login());
	// }else {
	// 	echo "<script> Login terlebih dahulu </script>";
	// 	header("location:masuk.php");
	// }

	// $username = $_POST['nama'];
	// $password = $_POST['pass'];

	// $_SESSION['user'] = $username;
	// $_SESSION['pass'] = $password;

	// $sql    = "SELECT * FROM admin WHERE user = '$username' AND pass = '$password'";
// 	$result = mysql_query($sql, $con);
// 	$row = mysql_fetch_array($result);
// 	if($row)
// 	{
// 		header("location:../crud/CRUD/index.php");
// 	// print_r($_SESSION);
// 	}
// 	else {
// 		echo "	<script> 
// 		alert ('Username / Password salah'); 
// 		location.href='index.php';
// 	</script>";
// }

	// header("location:../html/index.php");
?>