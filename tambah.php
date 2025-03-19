<?php 
require_once 'laptopController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $merk = $_POST['merk'];
    $model = $_POST['model'];
    $harga = $_POST['harga'];
    $ram = $_POST['ram'];
    $processor = $_POST['processor'];
    $penyimpanan = $_POST['penyimpanan'];
    $tahun_rilis = $_POST['tahun_rilis'];

    $laptop = new Laptop();
    $laptop->insert($merk, $model, $harga, $ram, $processor, $penyimpanan, $tahun_rilis);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Laptop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
    <h2 class='mt-4'>Tambah Data Laptop</h2>
    <form method="POST">

        <div class="form-group">
            <label for="merk">Merk:</label>
            <input type="text" class="form-control" id="merk" name="merk" required>
        </div>

        <div class="form-group">
            <label for="model">Model:</label>
            <input type="text" class="form-control" id="model" name="model" required>
        </div>

        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="text" class="form-control" id="harga" name="harga" required>
        </div>

        <div class="form-group">
            <label for="ram">Ram:</label>
            <input type="text" class="form-control" id="ram" name="ram" required>
        </div>

        <div class="form-group">
            <label for="processor">Processor:</label>
            <input type="text" class="form-control" id="processor" name="processor" required>
        </div>

        <div class="form-group">
            <label for="penyimpanan">Penyimpanan:</label>
            <input type="text" class="form-control" id="penyimpanan" name="penyimpanan" required>
        </div>

        <div class="form-group">
            <label for="tahun_rilis">Tahun Rilis:</label>
            <input type="text" class="form-control" id="tahun_rilis" name="tahun_rilis" required>
        </div>

        <input type="submit" class="btn btn-success mt-3" value="Kirim">

        <a href="index.php" class="btn btn-danger mt-3">Kembali</a>
    </form>
</div>
    
</body>
</html>