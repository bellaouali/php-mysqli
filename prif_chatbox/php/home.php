<?php
session_start();
include_once('db.php');
$query = "SELECT * FROM messages ORDER BY temps DESC limit 7";
$result = mysqli_query($con, $query);
$messages = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="stylee.css">
    <title>Box chat</title>
</head>

<body>
    <header>
        <nav class="navtop">
            <div>
                <h1><i class="fab fa-yoast"></i>YouChat</h1>
            </div>
            <div class="navv">
                <a href="profile.php"><i class="fas fa-id-badge"></i>Profile</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="title">
            <?php $pseudo = $_SESSION["pseudo"]; ?>
            <h2><?= "Welcome back : $pseudo " ?> <i class="far fa-laugh-wink"></i></h2>
        </div>
        <div class="messages">
            <?php foreach ($result as $row) : ?>
                <ul>
                    <li class="message">
                        <?= "<message style=color:black>" . $row["temps"]; ?> :
                        <?= "<message style=color:blue>" . $row["contenu_message"]; ?>
                    </li>
                </ul>
            <?php endforeach ?>
        </div>
        <div class="commentaire">
            <form action="traitement.php" method="POST">
                <input class="comment" type="text" name="contenu_message" placeholder="Saisir votre message">
                <input class="envoyer" type="submit" name="envoyer" value="Envoyer">
            </form>
        </div>
    </main>
</body>

</html>