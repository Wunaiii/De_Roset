<?php
require"../php/config/database.php";

$sql = "SELECT * FROM products WHERE is_flavor_ot_week = 2 ";
$result = mysqli_query($conn,$sql);
$alle_products = mysqli_fetch_assoc($result);
?>

<html>
    <head>
        <title> Blog </title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    </head>
    <body>
        <div class="container">
            <div class="item-top item-1"> <h1> De Roset <br> <center><a href="/gebruiker/login.php"> <img src="../images/login.png" alt="..." width="20%"></a></center></h1>  </div>
            <div class="item-top item-2">
                <ul class=buttonsul>
                    <li><a href="overons.php"><button type="button">Over Ons</button></a></li>
                    <li><a href="contact.php"><button type="button">Contact</button></a></li> 
                    <li><a href="blog.php"><button type="button">Blog</button></a></li>
                    <li><a href="bestellen.php"><button type="button">Bestellen</button></a></li>
                    <li><a href="winkelmandje.php"><button type="button">Winkelmandje</button></a></li>
                </ul>
            </div>
            <div class="item-mid item-3"> <img src="../images/<?php echo $alle_products['image'] ?>.png" alt="..." width="10%"> <?php echo $alle_products['image'] ?> </div>
            <div class="item-mid item-4"> <img src="../images/<?php echo $alle_products['image'] ?>.png" alt="..." width="10%"> <?php echo $alle_products['image'] ?> </div>
            <div class="item-main item-5"> <h1>Blog</h1> </div>
            <div class="item-bot item-6"> 
                <ul>
                    <li>
                         <p><b> Ons Adress: </b></p>
                         <p> Griberestraat 98, Castricum, 2026 VG </p>
                    </li>
                    <li>
                        <p><b> Wij bezorgen in: </b></p>
                        <p> Haarlem Heerlen Hiiren </p>
                    </li>
                    <li>
                        <p> Lees onze voorwaarden hier: </p>
                      <b><a href="">Voorwaarden</a></b>
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>