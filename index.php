<?php 
	$dbServerName = "localhost";
	$dbUserName = "root";
	$dbPassword = "";
	$dbName = "addres_book";

	$connect = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset = "UTF-8">
	<title>Tugas 5 - PWEB B</title>
</head>

<body>
	<h1>
		My SQL - Address Book
	</h1>
	<p>INSERT<br>======================================<br>
	Masukkan data baru kedalam Database address book</p>
	<form action="insert.php" method="POST">
		<input type="text" name="nama" placeholder="Nama">
		<br>
		<input type="text" name="alamat" placeholder="Alamat">
		<br>
		<input type="text" name="nohp" placeholder="No HP">
		<br>
		<input type="submit" name="submit">
	</form>
	<br>

<?php 
	// SELECT
	echo"SELECT". "<br>======================================<br>";
	echo "Menampilkan data yang sudah diselect (Kolom Nama dan Alamat)". "<br>";
	$select = "SELECT * FROM data_penduduk;";
	$result = mysqli_query($connect, $select);
	$resultCheck = mysqli_num_rows($result);			// mengecek apakah isi database kosong atau tidak
	if($resultCheck > 0){								// menjalankan perintah jika database tidak kosong
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['Nama'];
			echo " - ";
			echo $row['Alamat'] . "<br>";
		}
	}

	echo "<br>";

	// UPDATE
	echo "UPDATE" . "<br>======================================<br>";
	echo "Mengupdate data yang memiliki idPenduduk = 5";
	$update = "UPDATE data_penduduk SET Nama='Deni', Alamat='Jl. Soekarno 22', NoHP='083113133' WHERE idPenduduk = 5;";
	mysqli_query($connect, $update);

	echo "<br> <br>";

	// DELETE
	echo "DELETE". "<br>======================================<br>";
	echo "Menghapus data yang memiliki idPenduduk = 1";
	$delete = "DELETE FROM data_penduduk WHERE idPenduduk = 4;";
	mysqli_query($connect, $delete);
?>

</body>
</html>