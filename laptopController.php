<?php
require_once "koneksi.php";

class Laptop {
    private $conn;

    public function __construct() {
        $db = new Koneksi();
        $this->conn = $db->conn;
    }

    public function getAll() {
        $result = $this->conn->query("SELECT * FROM laptop");
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function insert($merk, $model, $harga, $ram, $processor, $penyimpanan, $tahun_rilis) {
        $query = "INSERT INTO laptop (merk, model, harga, ram, processor, penyimpanan, tahun_rilis) VALUES ('$merk', '$model', '$harga', '$ram', '$processor', '$penyimpanan', '$tahun_rilis')";
        return $this->conn->query($query);
    }

    public function getById($id_laptop) {
        $query = "SELECT * FROM laptop WHERE id_laptop = $id_laptop";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }

    public function update($id_laptop, $merk, $model, $harga, $ram, $processor, $penyimpanan, $tahun_rilis) {
        $query = "UPDATE laptop SET merk='$merk', model='$model', harga='$harga', ram='$ram', processor='$processor', penyimpanan='$penyimpanan', tahun_rilis='$tahun_rilis' WHERE id_laptop=$id_laptop;";
        return $this->conn->query($query);
    }

    public function delete($id_laptop) {
        $query = "DELETE FROM laptop WHERE id_laptop=$id_laptop";
        return $this->conn->query($query);
    }
}

?>