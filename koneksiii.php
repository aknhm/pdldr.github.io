<?php
	$host="localhost";
	$user="id18507049_mhs1";
	$password=">v&YySXE5nn*Tdg~";
	$db="id18507049_mhs";

	$koneksi = mysqli_connect($host,$user,$password,$db);
	if (!$koneksi)
	{
			die("Koneksi gagal:".mysqli_connect_error());
	}
?>