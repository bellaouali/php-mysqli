<?php

if (isset($_GET["submit"])) { //get info from login form 
    $fname = $_GET["prenom"];
    $mass = $_GET["mass"];
    $height = $_GET['height'];
    $mrheight = (int)$height/100;
    $crheight = pow($mrheight,2);
    $IMC = (int) $mass/$crheight;
    echo 'Welcome to BMI ' . $fname . ' ' . $IMC;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="GET">
        <div>
            <label for="prenom">ENTER YOUR NAME</label><br><br>
            <input type="text" name="prenom" placeholder="name">
        </div>
        <div>
            <label for="number">ENTER YOUR BOID IN KG</label><br><br>
            <input type="number" name="mass" placeholder="mass">
        </div>
        <div>
            <label for="number">ENTER YOUR KEIGHT</label><br><br>
            <input type="number" name="height" placeholder="height">
        </div>
        <div><input type="submit" name="submit" value="chercher"></div>
    </form>
</body>

</html>