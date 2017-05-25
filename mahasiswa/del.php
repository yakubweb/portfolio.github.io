<?php 
	$id_mahasiswa = $_GET['id_mahasiswa'];

	$sql = mysql_query("Delete from tbl_mahasiswa where id_mahasiswa='$id_mahasiswa'");

	if ($sql) {
		echo "data berhasil hapus";
	}
	else{
		echo "gagal";
	}
 ?>