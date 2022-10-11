<?php
include 'database.php';
include 'headersettings.php';

$sql = "SELECT * FROM gebruikers";
$result = mysqli_query($conn,$sql);
$alle_gebruikers = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
            <th><b><h3> Namen </h3></b></th>
            <th><b><h3> Email </h3></b></th>
            <th><b><h3> Wachtwoord </h3></b></th> 
            <th><b><h3> Geboortedatum </h3></b></th>
            <th><b><h3> Telefoonnummer </h3></b></th>
            <th><b><h3> Rol </h3></b></th>
            <th><b><h3> Update/Delete </h3></b></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($alle_gebruikers as $gebruiker): ?>
                <tr>
                <td><p><?php echo $gebruiker["id"]?></p></td>
                <td><p><?php echo ''.$gebruiker["voornaam"].' '.$gebruiker["achternaam"].''?></p></td>
                <td><p><?php echo $gebruiker["email"]?></p></td>
                <td><p><?php echo $gebruiker["wachtwoord"]?></p></td>
                <td><p><?php echo $gebruiker["geboortedatum"]?></p></td>
                <td><p><?php echo $gebruiker["telefoonnummer"]?></p></td>
                <td><p><?php echo $gebruiker["rol"]?></p></td>
                <td>        <a href="gebruiker-update.php?id=<?php echo $gebruiker["id"] ?>" class="btn btn-warning">Update</a>
                    &nbsp;  <a href="gebruiker-delete.php?id=<?php echo $gebruiker["id"] ?>" class="btn btn-danger">Delete</a>
                </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
        </div>
    </body>
</html>
