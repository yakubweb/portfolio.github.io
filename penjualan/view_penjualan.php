<div class="container contact" id="contact">
<hr>
<h3 class="text-center">Data Penjualan</h1>
<hr>
<a href="?page=penjualan_add"> Tambah Data</a>
<table class="table table-striped">
    <tr class="danger">
    	<th>no transaksi</th>
    	<th>Nama</th>
    	<th>Alamat</th>
    	<th>Email</th>
        <th>Aksi</th>
    </tr>

    <?php 
    	$no = 0;
    	$sql = mysql_query("select * from tbl_penjualan");

    	while ($tampil = mysql_fetch_array($sql)) {
    		$no++
    		?>
    			<tr>
    				<td><?php echo $tampil['id_penjualan'] ?></td>
    				<td><?php echo $tampil['nama'] ?></td>
    				<td><?php echo $tampil['alamat'] ?></td>
    				<td><?php echo $tampil['email'] ?></td>
                    <td>
                        <a href="?page=penjualan_del&id_penjualan=<?php echo $tampil['id_penjualan'] ?>">Hapus</a>
                    </td>
    				
					
    			</tr>
    			<?php
    	}

     ?>
  </table>
  </div>

  <?php 
  include 'footer.php'; ?>