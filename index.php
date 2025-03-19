<?php
require_once 'laptopController.php';
$laptop = new Laptop();
$data = $laptop->getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Laptop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
            <h2 class='mt-4'>Data Laptop</h2>
            <a href="tambah.php" class="btn btn-success mb-3">Tambah Data</a>
            <table class='table table-bordered table-striped'>
            <tr>
                <th>No.</th>
                <th>Merek</th>
                <th>Model</th>
                <th>Harga</th>
                <th>RAM</th>
                <th>Processor</th>
                <th>Penyimpanan</th>
                <th>Tahun Rilis</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($data as $row): ?>
            <tr>
                <td><?=$row["id_laptop"]?></td>
                <td><?=$row["merk"]?></td> 
                <td><?=$row["model"]?></td> 
                <td><?=$row["harga"]?></td> 
                <td><?=$row["ram"]?> GB</td>
                <td><?=$row["processor"]?></td>
                <td><?=$row["penyimpanan"]?></td> 
                <td><?=$row["tahun_rilis"]?></td>
                <td><a href="edit.php?id_laptop=<?=$row["id_laptop"]?>" class='btn btn-sm btn-success'>Ubah</a> | <a href="hapus.php?id_laptop=<?=$row["id_laptop"]?>" class='btn btn-sm btn-danger' onclick='confirm("Apakah Anda yakin ingin menghapus data ini?")'>Hapus</a></td>
            </tr>
            <?php endforeach; ?>
            </table>
            <br>
            <h2 class='mt-4'>Tampilan</h2>
            <table class='table table-bordered table-striped'>
            <tr>
                <th>No.</th>
                <th>Merek</th>
                <th>Model</th>
                <th>Harga</th>
                <th>RAM</th>
                <th>Processor</th>
                <th>Penyimpanan</th>
                <th>Tahun Rilis</th>
            </tr>
            <?php foreach ($data as $row): ?>
            <tr>
                <td><?=$row["id_laptop"]?></td>
                <td><?=$row["merk"]?></td> 
                <td><?=$row["model"]?></td> 
                <td><?=$row["harga"]?></td> 
                <td><?=$row["ram"]?> GB</td>
                <td><?=$row["processor"]?></td>
                <td><?=$row["penyimpanan"]?></td> 
                <td><?=$row["tahun_rilis"]?></td>
            </tr>
            <?php endforeach; ?>
            </table>
</body>
</html>