    <!-- jumbotron -->
    <div class="jumbotron text-center">
      <img src="img/portfolio/foto.jpg" class="img-circle" >
      <h1>yakub</h1>
      <p>Mahasiswa | Web Developer | youtuber </p>
      <h5>"Barangsiapa belum merasakan pahitnya belajar walau sebentar,Ia akan merasakan hinanya kebodohan sepanjang hidupnya"~Imam Syafi'i~</h5>
    </div>
    <!-- akhir jumbotron -->

    <!-- coba side -->
      <section>
      <div class="container">
          <h1 class="text-center">Study</h1>
          <hr>
      	<div class="row">
          <div class="col-sm-7">
            <br><br>
            <p>
              <h3>Pernah Belajar Di : </h3>
              <li>SDN 09 Pagi</li>
              <li>SMPN 156 Jakarta Pusat</li>
              <li>Smk Dharma Bhakti</li>
              <li>Universitas Persada Indonesia . YAI</li>
              <li>Pusat Studi Islam Al-Manar(Tahsin & Bahasa Arab)</li>
              <li>Lembaga Tahfidz Quran (Tahsin)</li>
            </p>
          </div>

          <div class="col-sm-5">
            <img src="img/education.png" alt="">
          </div>
        </div>
      </div>
      </section>
    <!-- akhir coba side -->

    <!-- quote -->
    <section>
      <div class="quotes">
        <div class="row">
          <div class="col-sm-5 col-sm-offset-1">
            <h3 class="text-center">QUOTE</h3>
            <hr>


      <?php 
        $no = 0;
        $sql = mysql_query("select * from tb_quote");

        while ($tampil = mysql_fetch_array($sql)) {
          $no++
          ?>
            <tr>
              <td>~</td>
              <td><?php echo $tampil['quote'] ?></td><br><br>
            </tr>
            <?php
        }

      ?>
          </div>
          <div class="col-sm-5 col-sm-offset-1">
            <h3 class="text-center">TULISAN</h3>
            <hr>
            <p>"Ikatlah Ilmu Dengan Menulisnya" `Imam Syafii~</p>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir quote -->
    

    <!-- portfolio -->
    <?php 
      include 'portfolio.php'
     ?>
    <!-- akhir portfolio -->

    <!-- contact -->
    <?php 
      include 'contact.php';
     ?>
    <!-- akhir kontak -->

    <!-- menu footer -->
    <?php 
      include 'menu_footer.php';
     ?>
    <!-- akhir menu footer -->

    <!-- alamat -->
      <?php 
        include 'alamat.php';
         ?>
    <!-- tutup alamat -->

    <!-- Footer -->
      <?php 
      include 'footer.php' ?>
    <!-- akhir footer -->