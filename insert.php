<?php 
	$dbServerName = "localhost";
	$dbUserName = "root";
	$dbPassword = "";
	$dbName = "addres_book";

	$connect = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

	// INSERT
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];

	$insert = "INSERT INTO data_penduduk (nama, alamat, nohp) VALUES ('$nama', '$alamat', '$nohp');";
	mysqli_query($connect, $insert);

	header("Location: index.php");

