<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['input'])){
	
	//inlcude atau memasukkan file koneksi ke database (direktorinya config/db.php)
	include('config/db.php');

	//bisa juga dengan pakai koneksi di lain direktori
	//include(koneksi.php)
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nim		= $_POST['nim'];	//membuat variabel $nis dan datanya dari inputan NIS
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$email		= $_POST['email'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO tbl_mahasiswa VALUES(null, '$nim', '$nama', '$email')") or die(mysql_error());

	if ($input) {
		echo "header('location : view.php')";
	}
	else{
		echo "gagal";
	}
	
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

 <a href="?page=mahasiswa">Lanjutkan</a>

