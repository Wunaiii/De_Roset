<?php
include '../config/database.php';
include '../config/headersettings.php';

if (isset($_POST["submit"])) {
    if (   $_POST['naam'] != ''
    && $_POST['prijs per kilo'] != ''
    && $_POST['is smaak van de week'] != ''
    && $_POST['categorie'] != ''
    && $_POST['foto'] != '' )
    {
        $name = $_POST["naam"];
        $price_per_kg = $_POST["prijs per kilo"];
        $is_flavor_ot_week = $_POST["is smaak van de week"];
        $category = $_POST["categorie"];
        $image = $_POST["foto"];
        

        $sql = "INSERT INTO products (name, price_per_kilo, is_flavor_ot_week, category, image)
        VALUES ('$name', '$price_per_kg', '$is_flavor_ot_week', '$category', '$image')";

    if (mysqli_query($conn, $sql) === TRUE) {
        echo "Nieuwe product is gemaakt!";
        header("Location: product-maak.php");
        }
    }
}
?>