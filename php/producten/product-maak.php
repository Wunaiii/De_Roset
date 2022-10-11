<?php
include 'database.php';
include 'headersettings.php';

$sql = "SELECT * FROM categorieen ";

if ($result = mysqli_query($conn, $sql)) {
    $alle_categorieen = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container py-5 px-5">
        <h1>Melding maken</h1> <br>
        <form class="row g-3" action="melding-maak-verwerk.php" method="post">
            <div class="col-md-6">
                <label for="bericht">Bericht</label>
                <input type="text" class="form-control" placeholder="Voer uw bericht in" name="bericht" required>
            </div>
            <div class="col-md-6">
                <label for="exampleFormControlSelect1">Selecteer categorie</label>
                <select class=" form-control" name="categorie" aria-label="Default select example">
                    <?php foreach ($alle_categorieen as $categorie) : ?>
                        <option value="<?php echo $categorie["id"] ?>"> <?php echo $categorie["naam"] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br><button type="submit" name="submit" class="btn btn-primary">Maken</button>
        </form>
        </div>
    </body>
</html>