<?php 
$host ="localhost"; 
$user ="root"; 
$pass =""; 
$daba ="db_mahasiswa"; 
$connect=mysql_connect($host,$user,$pass) or die ("Koneksi gagal"); 
mysql_select_db($daba) or die ("database tidak bisa dibuka");
?>