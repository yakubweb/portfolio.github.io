<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Yakub Profile</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" class="href">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

      <!-- awal navbar -->
      <?php 
        include 'navbar_baru.php';
         ?>
      <!-- akhir navbar -->


    <!-- php data mahasiswa -->
      <?php 

      include 'koneksi.php';

      $page = isset($_GET ['page']) ? $_GET['page'] : null;


      switch ($page) {
        case 'mahasiswa':
          include "mahasiswa/view.php";
          break;
        case 'mahasiswa_add':
          include "mahasiswa/form.php";
          break;

        case 'penjualan_add':
          include "penjualan/form_penjualan.php";
          break;

        case 'mahasiswa_save':
          include "mahasiswa/save.php";
          break;

        case 'penjualan_save':
          include "penjualan/save.php";
          break;

        case 'mahasiswa_del':
          include "mahasiswa/del.php";
          break;

        case 'penjualan':
          include "penjualan/view_penjualan.php";
          break;

        case 'penjualan_del':
          include "penjualan/del.php";
          break;
        
        default:
          include "home.php";
          break;
      }
     ?>
    <!-- akhir php datamahasiswa -->


    


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
  </body>
</html>
