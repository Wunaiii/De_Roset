ty<<?php
include 'database.php';
session_start();
if (isset($_SESSION['rol'])) {
    session_unset();
    header("location: login.php");
}
?>