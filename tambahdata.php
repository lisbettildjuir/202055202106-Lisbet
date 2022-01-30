<?php
include"koneksi.php";

	if(isset($_POST['simpan'])){
		$nim= $_POST['nim'];
		$nama= $_POST['nama'];
		$alamat= $_POST['alamat'
	];
		$jenis_kelamin= $_POST['jenis_kelamin'];

		$sql = "INSERT INTO 202055202106_(nim, nama, alamat, jenis_kelamin)VALUES('$nim', '$nama', '$alamat', '$jenis_kelamin')";

		if(mysqli_query($koneksi,$sql)){

			header('location:index.php');
		}else{
			echo "Maaf Proses Penyimpanan Data Tidak Berhasil";
		}

	}
?>




