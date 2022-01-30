<?php
$koneksi = mysqli_connect("localhost", "root", "", "202055202106_lisbet_tildjuir");

if (mysqli_connect_errno()) {
	echo "koneksi Database Gagal:".mysqli_connect_errno();
}

?>