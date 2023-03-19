<?php 
    //memanggil file koneksi.php yang berisi koneski ke database
    //dengan include, semua kode dalam file koneksi.php dapat digunakan pada file index.php
    include ('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customers</title>
</head>
<body>
    <ul>
        <li>
            <a href="<?php echo "createCustomers.php"; ?>">CREATE CUSTOMERS</a>
        </li>   
    </ul>

    <h2>TABLE CUSTOMERS</h2>
        <div>
            <table border=1px>
                <thead bgcolor=silver>
                    <tr>
                        <th> <p> customerNumber</th>
                        <th>customerName</th>
                        <th>contactLastName</th>
                        <th>contactFirstName</th>
                        <th>phone</th>
                        <th>addressLine1</th>
                        <th>addressLine2</th>
                        <th>city</th>
                        <th>state</th>
                        <th>postalCode</th>
                        <th>country</th>
                        <th>salesRepEmployeeNumber</th>
                        <th>creditLimit</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        //proses menampilkan data dari database:
                        //siapkan query SQL
                        $query = "SELECT * FROM customers";
                        $result = mysqli_query(connection(),$query);
                    ?>
                            
                    <?php while($data = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <td> <?php echo $data['customerNumber']; ?> </td>
                            <td> <?php echo $data['customerName']; ?> </td>
                            <td> <?php echo $data['contactLastName']; ?> </td>
                            <td> <?php echo $data['contactFirstName']; ?> </td>
                            <td> <?php echo $data['phone']; ?> </td>
                            <td> <?php echo $data['addressLine1']; ?> </td>
                            <td> <?php echo $data['addressLine2']; ?> </td>
                            <td> <?php echo $data['city']; ?> </td>
                            <td> <?php echo $data['state']; ?> </td>
                            <td> <?php echo $data['postalCode']; ?> </td>
                            <td> <?php echo $data['country']; ?> </td>
                            <td> <?php echo $data['salesRepEmployeeNumber']; ?> </td>
                            <td> <?php echo $data['creditLimit']; ?> </td>
                            <td>
                                <a href="<?php echo "createCustomers.php?customerName=".$data['customerName'] ?>"> Create</a> &nbsp;&nbsp;
                                <a href="<?php echo "updateCustomers.php?customerName=".$data['customerName'] ?>"> Update</a> &nbsp;&nbsp;
                                <a href="<?php echo "deleteCustomers.php?customerName=".$data['customerName'] ?>"> Delete</a>
                            </td>
                        </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            </div>    
        </main>
    </div>
</div>
</body>
</html>