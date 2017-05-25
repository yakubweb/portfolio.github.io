
<div class="container contact" id="contact">
<hr>
<h3 class="text-center">Data Mahasiswa</h1>
<hr>
<a href="?page=mahasiswa_add"> Tambah Data</a>
<table class="table table-striped">
    <tr class="danger">
    	<th>No</th>
    	<th>NIM</th>
    	<th>Nama</th>
    	<th>Email</th>
    	<th>Aksi</th>
    </tr>

    <?php 
    	$no = 0;
    	$sql = mysql_query("select * from tbl_mahasiswa");

    	while ($tampil = mysql_fetch_array($sql)) {
    		$no++
    		?>
    			<tr>
    				<td><?php echo $tampil['id_mahasiswa'] ?></td>
    				<td><?php echo $tampil['nim'] ?></td>
    				<td><?php echo $tampil['nama'] ?></td>
    				<td><?php echo $tampil['email'] ?></td>
    				<td>
    					<a href="?page=mahasiswa_del&id_mahasiswa=<?php echo $tampil['id_mahasiswa'] ?>">Hapus</a>
    				</td>
					
    			</tr>
    			<?php
    	}

        


     ?>

     
  </table>
  <?php
		// Make a MySQL Connection
		$query = "SELECT nim, SUM(nim) FROM tbl_mahasiswa GROUP BY nim";      
		$result = mysql_query($query) or die(mysql_error());
		// Print out result
		while($row = mysql_fetch_array($result)){    
		    echo "Total ". $row['nim']. " = RP.". $row['SUM(nim)'];    echo "<br />";
		}

        echo "<br> total : ";

        $jumlahkan = "SELECT SUM(nim) AS jumlah_total FROM tbl_mahasiswa"; //perintah untuk menjumlahkan
        $hasil =@mysql_query($jumlahkan) or die (mysql_error());//melakukan query dengan varibel $jumlahkan
        $t = mysql_fetch_array($hasil); //menyimpan hasil query ke variabel $t
        echo "<b>" . number_format($t['jumlah_total']) . " </b>";//menampilkaan hasil penjumlahan

        
	?>
  </div>

  <?php 
  include 'footer.php'; ?>