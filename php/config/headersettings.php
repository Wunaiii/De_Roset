<?php
session_start();
if (isset($_SESSION['rol'])) {
    if($_SESSION['rol'] == "manager"){
        include 'adminheader.php';
    }
    else if($_SESSION['rol'] == 'klant'){
        include 'header.php';
    }
    else if($_SESSION['rol'] == 'medewerker'){
        include 'header.php';
    }
}else
{
    echo 'rol is een niet defined array';
}
?>