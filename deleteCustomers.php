<?php
include ('koneksi.php');

$status = '';
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['customerNumber'])) {

    //mengambil data customers yg akan dihapus
    $customerNumber = $_GET['customerNumber'];

    //query untuk menghapus data
    $query = "DELETE FROM customers WHERE customerNumber = '$customerNumber'";

    //eksekusi query
    $result = mysqli_query(connection(), $query);

    if($result) {
        $status = 'ok';
    } else {
        $status = 'err';
    }
          //redirect ke halaman lain
          header('Location: tabelCustomers.php?status='.$status);
      }  
  }
  ?>