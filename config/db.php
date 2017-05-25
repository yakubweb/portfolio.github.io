<?php 
	$koneksi = mysql_connect("localhost", "root", "") or die(mysql_error());

	$db = mysql_select_db("db_mahasiswa", $koneksi) or die(mysql_error());

 ?>