<?php
include 'database.php';
include 'headersettings.php';

$id = $_GET['id'];
$sql = "DELETE FROM gebruikers WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("location: gebruiker-overzicht.php");
}
?>