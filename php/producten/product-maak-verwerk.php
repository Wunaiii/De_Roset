<?php
include 'database.php';
include 'headersettings.php';

if (isset($_POST["submit"])) {
    if (   $_POST['bericht'] != ''
    && $_POST['categorie'] != '' )
    {
        $bericht = $_POST["bericht"];
        $categorie = $_POST["categorie"];
        $status = 'verwerken';
        $datum = date('d-M-Y');
        $gebruiker_id = $_SESSION['gebruiker_id'];
        

        $sql = "INSERT INTO meldingen (bericht, categorie_id, status, datum, gebruiker_id)
        VALUES ('$bericht', '$categorie', '$status', '$datum', '$gebruiker_id')";

    if (mysqli_query($conn, $sql) === TRUE) {
        echo "Nieuwe melding is gemaakt!";
        header("Location: melding-maak.php");
        }
    }
}
?>

