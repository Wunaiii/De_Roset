<?php
include '../config/database.php';
include '../config/headersettings.php';
$sql = "SELECT * FROM products";
$result = mysqli_query($conn,$sql);
$alle_producten = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body> 
        <div class="container py-5 px-5"> 
        <table class="table table-bordered border-primary">
        <thead class="table-info">
            <tr>
            <th><b><h3> Id </h3></b></th>
            <th><b><h3> Naam </h3></b></th>
            <th><b><h3> Prijs per kilo </h3></b></th>
            <th><b><h3> Is prijs van de week </h3></b></th>
            <th><b><h3> Categorie </h3></b></th>
            <th><b><h3> Foto </h3></b></th>
            <th><b><h3> Update/Delete </h3></b></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($alle_producten as $products): ?>
                <tr>
                <td><p><?php echo $products["id"]?></p></td>
                <td><p><?php echo $products["name"]?></p></td>
                <td><p><?php echo $products["price_per_kg"]?></p></td>
                <td><p><?php echo $products["is_flavor_ot_week"]?></p></td>
                <td><p><?php echo $products["category"]?></p></td>
                <td><p><?php echo $products["image"]?></p></td>
                <td>        <a href="product-update.php?id=<?php echo $products["id"] ?>" class="btn btn-warning">Update</a>
                    &nbsp;  <a href="product-delete.php?id=<?php echo $products["id"] ?>" class="btn btn-danger">Delete</a>
                </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
        </div>
    </body>
</html>
