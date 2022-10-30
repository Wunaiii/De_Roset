<?php
include '../config/database.php';
include '../config/headersettings.php';

$sql = "SELECT * FROM products";

if ($result = mysqli_query($conn, $sql)) {
    $alle_products = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container py-5 px-5">
        <h1>Producten maken</h1> <br>
        <form class="row g-3" action="product-maak-verwerk.php" method="post">
            <div class="col-md-4">
                <label for="Naam">Naam</label>
                <input type="name" class="form-control" placeholder="Voer de naam in" name="naam" required>
            </div>
            <div class="col-md-8">
                <label for="Prijs per kilo">Prijs per kilo</label>
                <input type="price" class="form-control" placeholder="Voer de prijs per kilo in" name="prijs per kilo" required>
            </div>
            <div class="col-md-8">
                <label for="Is smaak van de week">Is smaak van de week</label>
                <input type="price" class="form-control" placeholder="Voer uw is smaak van de week in" name="is smaak van de week" required>
            </div>
            <div class="col-md-2">
                <label for="Categorie">Categorie</label>
                <input type="text" class="form-control" placeholder="Voer de categorie in" name="categorie" required>
            </div>
            <div class="col-md-2">
                <label for="Foto">Foto</label>
                <input type="text" class="form-control" placeholder="Voer uw foto in" name="foto" required>
            </div>
            <br><button type="submit" name="submit" class="btn btn-primary">Maken</button>
        </form>
        </div>
    </body>
</html>