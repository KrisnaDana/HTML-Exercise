<?php 

// $nrp = $_POST["nrp"];
// $nama = $_POST["nama"];
// $alamat = $_POST["alamat"];
// $email = $_POST["email"];

$nrp = $_POST["nrp"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];

$query = "
		INSERT INTO mahasiswa
			VALUES ('', '$nrp', '$nama', '$email', '$alamat')
	";

?>