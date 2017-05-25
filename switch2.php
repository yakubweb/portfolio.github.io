<!-- php penjualan -->
    <?php 
      include 'koneksi.php';

      $page = isset($_GET ['page']) ? $_GET['page'] : null;

      switch ($page) {
        case 'penjualan':
          include "penjualan/view_penjualan.php";
          break;
        
        default:
          include 'home.php';
          break;
      }
     ?>
    <!-- akhir php penjualan -->
