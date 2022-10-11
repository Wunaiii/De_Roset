<?php
include 'database.php';
include 'headersettings.php';

$id = $_GET["id"];
$sql = "SELECT * FROM gebruikers WHERE id = $id LIMIT 1";

if ($result = mysqli_query($conn, $sql)) {
    $gebruiker = mysqli_fetch_assoc($result);
}

?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container py-5 px-5">
        <h1>Updaten</h1> <br>
        <form class="row g-3" action="gebruiker-update-verwerk.php" method="post">
            <div class="col-md-6">
                <label for="Voornaam">Voornaam</label>
                <input type="text" class="form-control" value="<?php echo $gebruiker["voornaam"] ?>" name="voornaam" required>
            </div>
            <div class="col-md-6">
                <label for="Achternaam">Achternaam</label>
                <input type="text" class="form-control" value="<?php echo $gebruiker["achternaam"] ?>" name="achternaam" required>
            </div>
            <div class="col-md-6">
                <label for="Email">Email Adres</label>
                <input type="email" class="form-control" value="<?php echo $gebruiker["email"] ?>" name="email" required>
            </div>
            <div class="col-md-6">
                <label for="Wachtwoord">Wachtwoord</label>
                <input type="text" class="form-control" value="<?php echo $gebruiker["wachtwoord"] ?>" name="wachtwoord" required>
            </div>
            <div class="col-md-4">
                <label for="Geboortedatum">Geboortedatum</label>
                <input type="date" class="form-control" name="geboortedatum" value="<?php echo $gebruiker["geboortedatum"] ?>" required>
            </div>
            <div class="col-md-8">
                <label for="Telefoonnummer">Telefoonnummer</label>
                <input type="text" class="form-control" value="<?php echo $gebruiker["telefoonnummer"] ?>" name="telefoonnummer" required>
            </div>
            <input type="hidden" name="id" value="<?php echo $gebruiker["id"] ?>">
        <br> <button type="submit" name="submit" class="btn btn-primary">Updaten</button>
        </form>
        </div>
    </body>
</html>