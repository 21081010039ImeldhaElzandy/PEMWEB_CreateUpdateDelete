<?php
include ('koneksi.php');

$status = '';
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['productCode'])) {

    //mengambil data products yg akan dihapus
    $productCode = $_GET['productCode'];

    //query untuk menghapus data
    $query = "DELETE FROM products WHERE productCode = '$productCode'";

    //eksekusi query
    $result = mysqli_query(connection(), $query);

    if($result) {
        $status = 'ok';
    } else {
        $status = 'err';
    }
          //redirect ke halaman lain
          header('Location: tabelProducts.php?status='.$status);
      }  
  }
  