<?php 
require_once 'laptopController.php';

$laptop = new Laptop();

if (isset($_GET['id_laptop'])) {
    $laptop = new Laptop();
    $laptop->delete($_GET['id_laptop']);
    header("Location: index.php");
}
?>