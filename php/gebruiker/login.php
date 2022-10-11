<?php
include 'database.php'; 

if (isset($_POST['submit']) && $_POST['email'] != '' && $_POST['password'] != '') {

    $password = $_POST['password'];
    $email = $_POST['email'];
    $sql = "SELECT * FROM users WHERE email ='$email' AND password ='$password'";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    session_start();
    $_SESSION['rol'] = $user['role'];
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['naam'] = $user['firstname'];

    header("location: product_overzicht.php");
}
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container py-5 px-5">                                   
            <form method="POST" action="login.php">
                <div class="col-md-12">
                    <label for="Email">Email adres</label>
                    <input type="email" class="form-control" placeholder="Voer uw email in" name="email" required>
                </div>
                <div class="col-md-12">
                    <label for="password">password</label>
                    <input type="password" class="form-control" placeholder="password" name="password" required>
                </div>
                <div class="link">
                    <b> Geen account, maak er een <a href="gebruiker_maak.php" class="link-primary">hier.</a></b>
                </div>
                    <button class="btn btn-primary" type="submit" name="submit">Login</button>
            </form>
        </div>
    </body>
</html>
