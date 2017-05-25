<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['input2'])){
	
	//inlcude atau memasukkan file koneksi ke database (direktorinya config/db.php)
	include('config/db.php');

	//bisa juga dengan pakai koneksi di lain direktori
	//include(koneksi.php)
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$email		= $_POST['email'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$alamat		= $_POST['alamat'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas

	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input2 = mysql_query("INSERT INTO tbl_penjualan VALUES(null, '$nama', '$email', '$alamat')") or die(mysql_error());
	
	//jika query input sukses
	// dibawah ini hanya opsi bisa di pakai atau tidak
	/*if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';*/
 
}
?>

 <a href="?page=penjualan">Lanjutkan</a>