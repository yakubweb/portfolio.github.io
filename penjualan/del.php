<?php 
	$id_penjualan = $_GET['id_penjualan'];

	$sql = mysql_query("Delete from tbl_penjualan where id_penjualan='$id_penjualan'");

	if ($sql) {
		echo "data berhasil hapus";
	}
	else{
		echo "gagal";
	}

 ?>