<?php
include("../koneksi.php");
if (isset($_POST['submit'])) {
	$username = ($_POST['username']);
	$password = ($_POST['password']);
	$level = ($_POST['level']);
	$nama_lengkap = ($_POST['nama_lengkap']);
	$nomor_telepon = ($_POST['nomor_telepon']);
	$alamat = ($_POST['alamat']);
	$kota = ($_POST['kota']);
	$kode_pos = ($_POST['kode_pos']);

	$query = mysqli_query($koneksi, "INSERT INTO `user` VALUES (NULL, '$username', '$password', '$level', '$nama_lengkap', '$nomor_telepon', '$alamat', 
	'$kota', '$kode_pos');");
	if ($query) {
		header("location:login.php?msg=2");
	} else {
		echo mysqli_error($koneksi);
	}
	
}
