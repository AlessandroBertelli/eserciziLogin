<!-- POPOLAZIONE ARRAY -->
<?php
$path = "scriptCredenziali.php";
include($path);
?>

<html>

<head>
    <title>Verifica delle credenziali</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="stileLogin.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>Pagina di verifica credenziali.</h1>
    <form>
        <div class="container">
            <?php
            if (isset($_CREDENZIALI[$_POST["username"]])) {
                if ($_POST["psw"] == $_CREDENZIALI[$_POST["username"]]) {
                    echo "<div class=\"container\"><h2>Benvenuto nella tua area dedicata, </h2>";
                    echo "<h1 style=\"color:green\">" . $_POST["username"] . "</h1>";
                    echo "</div>";
                } else {
                    echo "<img src=\"https://i0.wp.com/vincenttechblog.com/wp-content/uploads/2018/02/lock-pc-wrong-password.jpg?ssl=1\" class =\"avatar\">";
                    echo "<h2 style=\"color:red\">Password errata!</h4>";
                }
            } else {
                echo "<img src=\"https://roundhouse-assets.s3.amazonaws.com/assets/Image/15214-fitandcrop-1200x681.jpg\" class =\"avatar\">";
                echo "<h2 style=\"color:orange\">Utente non trovato!</h4>";
            }
            echo "<div class=\"container\" style=\"background-color:#f1f1f1\"";
            echo "<span class=\"psw\">Torna al <a href=\"/esercizi/loginForm.php\">login</a></span></div>";
            ?>
        </div>

    </form>
</body>

</html>