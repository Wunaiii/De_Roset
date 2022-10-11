<?php
include 'database.php';

?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container py-5 px-5">
        <h1>Registreren</h1> <br>
        <form class="row g-3" action="gebruiker-maak-verwerk.php" method="post">
            <div class="col-md-6">
                <label for="Voornaam">Voornaam</label>
                <input type="text" class="form-control" placeholder="Voer uw voornaam in" name="voornaam" required>
            </div>
            <div class="col-md-6">
                <label for="Achternaam">Achternaam</label>
                <input type="text" class="form-control" placeholder="Voer uw achternaam in" name="achternaam" required>
            </div>
            <div class="col-md-6">
                <label for="Email">Email Adres</label>
                <input type="email" class="form-control" placeholder="Voer uw email in" name="email" required>
            </div>
            <div class="col-md-6">
                <label for="Wachtwoord">Wachtwoord</label>
                <input type="password" class="form-control" placeholder="Wachtwoord" name="wachtwoord" required>
            </div>
            <div class="col-md-4">
                <label for="Geboortedatum">Geboortedatum</label>
                <input type="date" class="form-control" placeholder="Voer uw geboortedatum in" name="geboortedatum" required>
            </div>
            <div class="col-md-8">
                <label for="Telefoonnummer">Telefoonnummer</label>
                <input type="text" class="form-control" placeholder="Voer uw telefoonnummer in" name="telefoonnummer" required>
            </div>
        <br> <button type="submit" class="btn btn-primary">Maken</button>
        </form>
        </div>
    </body>
</html>