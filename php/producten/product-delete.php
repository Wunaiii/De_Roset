<?php
include '../config/database.php';
include '../config/headersettings.php';

$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("location: product-overzicht.php");
}
?>