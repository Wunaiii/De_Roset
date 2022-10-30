<?php
include '../config/database.php';
include '../config/headersettings.php';

$id = $_GET["id"];
$sql = "SELECT * FROM products WHERE id = $id LIMIT 1";

if ($result = mysqli_query($conn, $sql)) {
    $melding = mysqli_fetch_assoc($result);
}

?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container py-5 px-5">
        <div class="col-md-4">
        <h1>Product update</h1>
        </div>
        <div class="col-md-8">
        <b><?php echo $products["naam"] ?></b>
        </div>
        <br>
        <form class="row g-3" action="product-update-verwerk.php" method="post">
            <div class="col-md-12">
                <label for="Opmerking">Opmerking</label>
                <input type="text" class="form-control" placeholder="Voer uw opmerking in" name="opmerking" required>
            </div>
            <div>  
                <label for="Status">Status</label>
                <select class=" form-control" name="status" aria-label="Default select example">
                        <option value="verwerken" name="verwerken"> verwerken </option>
                        <option value="gesloten" name="gesloten"> gesloten </option>
                </select>
            </div>
            <input type="hidden" name="id" value="<?php echo $melding["id"] ?>">
            <br><button type="submit" name="submit" class="btn btn-primary">Updaten</button>
        </form>
        </div> 
    </body>
</html>
