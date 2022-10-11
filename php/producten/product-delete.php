<?php
include 'database.php';
include 'headersettings.php';

$id = $_GET['id'];
$sql = "DELETE FROM meldingen WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("location: melding-overzicht.php");
}
?>