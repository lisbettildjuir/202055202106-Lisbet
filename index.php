 <!DOCTYPE html>
 <html>
 <head>
 	<title>	Menampilkan Data Mahasiswa</title>
 </head>
 <body>
 	<h1>Data Mahasiswa</h1>
 	<button style="background-color: grey; margin-bottom: 5px;"><a href ="formdata.php">Tambah</a></button>
 	<table border="1">
 		<tr bgcolor="yellow">
 			<th>No</th>
 			<th>Nim</th>
 			<th>Nama</th>
 			<th>Alamat</th>
 			<th>Jenis kelamin</th>
 			<th>Opsi</th>
 		</tr>
 		<?php
 			include"koneksi.php";

 			$no =1;
 			$data= mysqli_query($koneksi,"SELECT * FROM 202055202106_");
 			while ($hasil= mysqli_fetch_array($data)) {
 				?>
 			<tr>
 				<td><?php echo $no++; ?></td>
 				<td><?php echo $hasil['nim'] ; ?></td>
 				<td><?php echo $hasil['nama'] ; ?></td>
 				<td><?php echo $hasil['alamat'] ; ?></td>
 				<td><?php echo $hasil['jenis_kelamin'] ; ?></td>
 				<td>
 					<a href="ubahdata.php?id=<?php echo$hasil['nim'] ?>"> Ubah </a> ||
 					<a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" href="hapusdata.php?id=<?php echo$hasil['nim'] ?>"> Hapus </a>
 			</tr>
 			<?php
 			}
 		?>
 	</table>
 </body>
 