<?php
include 'database.php';
include 'headersettings.php';
$sql = "SELECT * FROM meldingen";
$result = mysqli_query($conn,$sql);
$alle_meldingen = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
            <th><b><h3> Gebruiker ID </h3></b></th>
            <th><b><h3> Bericht </h3></b></th>
            <th><b><h3> Status </h3></b></th>
            <th><b><h3> Categorie ID </h3></b></th>
            <th><b><h3> Datum </h3></b></th>
            <th><b><h3> Opmerking </h3></b></th>
            <th><b><h3> Personeel ID </h3></b></th>
            <th><b><h3> Update/Delete </h3></b></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($alle_meldingen as $melding): ?>
                <tr>
                <td><p><?php echo $melding["id"]?></p></td>
                <td><p><?php echo $melding["gebruiker_id"]?></p></td>
                <td><p><?php echo $melding["bericht"]?></p></td>
                <td><p><?php echo $melding["status"]?></p></td>
                <td><p><?php echo $melding["categorie_id"]?></p></td>
                <td><p><?php echo $melding["datum"]?></p></td>
                <td><p><?php echo $melding["opmerking"]?></p></td>
                <td><p><?php echo $melding["personeel_id"]?></p></td>
                <td>        <a href="melding-update.php?id=<?php echo $melding["id"] ?>" class="btn btn-warning">Update</a>
                    &nbsp;  <a href="melding-delete.php?id=<?php echo $melding["id"] ?>" class="btn btn-danger">Delete</a>
                </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
        </div>
    </body>
</html>
