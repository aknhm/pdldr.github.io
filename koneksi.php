<?php
	$host="localhost";
	$user="id18507049_db_perjananan1";
	$password="-746/uWeNHcX68P%";
	$db="id18507049_db_perjananan";

	$koneksi = mysqli_connect($host,$user,$password,$db);
	if (!$koneksi)
	{
			die("Koneksi gagal:".mysqli_connect_error());
	}
?>