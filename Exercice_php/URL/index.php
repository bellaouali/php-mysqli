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

    <?php
    $lName = $_GET['nom']; // l'URL suivant http://localhost/testserve/URL/?nom=BELLAOULAI&prenom=Abdelilah
    $fName = $_GET['prenom'];
    ?>
                           <!--code HTML et CSS permettant d'afficher de manière animé la phrase -->
    <div class="container"> 
        <h1 class="tapper"><?php echo "Bonjour, je m'appelle : $fName $lName " ?></h1>
    </div>
</body>
</html>