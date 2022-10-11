<?php
session_start();
if (isset($_SESSION['rol'])) {
    if($_SESSION['rol'] == "admin"){
        include 'adminheader.php';
    }
    else if($_SESSION['rol'] == 'klant'){
        include 'header.php';
    }
}else
{
    echo 'rol is een niet defined array';
}
?>