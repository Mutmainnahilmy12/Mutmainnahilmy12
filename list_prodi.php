<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username , password, database);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Prodi </title>
</head>
<body>
    <?php
    $query = $db->$query("SELECT * FROM prodi");
    ?>
    <table>
        <thead>
         <tr>
            <th>No</th>
            <th>Kd_Prodi</th>
            <th>Nama_Prodi</th>
            <th>Kd_Fakultas</th>
            <th>Act</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while($row = $query-> fetch_array()){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['kd_prodi'];?></td>
                    <td><?php echo $row['nama_prodi'];?></td>
                    <td><?php echo $row['kd_fakultas'];?></td>
                    <td>Edit | Hapus </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
        </table>
</body>
</html>