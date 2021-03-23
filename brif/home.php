<?php
session_start();
include_once('db.php');
$query = "SELECT * FROM messages ORDER BY temps DESC limit 9";
$results = mysqli_query($con, $query);
$messages = mysqli_fetch_assoc($results);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="stylee.css">
    <title>YouChat</title>
</head>

<body class="loggedin">
    <main>
        <nav class="navtop">
            <div>
                <h1><i class="fab fa-yoast"></i>YouChat</h1>
                <a href="profile.php"><i class="fas fa-id-badge"></i>Profile</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </nav>
        <?php
        $pseudo = $_SESSION["pseudo"];
        ?>
        <div class="content">
            <h2 class="tapper"><?php echo "Welcome back : $pseudo " ?></h2>
        </div>
        <div class="messages">
            <?php foreach ($results as $row) : ?>
                <ul>
                    <li class="message">
                        <?php echo '<message style="color:black">' . $row["temps"] ?> :
                        <?php echo '<message style="color:blue">' . $row["contenu_message"]; ?>
                    </li>
                </ul>
            <?php endforeach ?>
        </div>
        <div class="container">
            <form action="traitement.php" method="POST">
                <input class="comment" type="text" name="contenu_message" placeholder="Saisir votre message">
                <input class="envoyer" type="submit" name="envoyer" value="Envoyer">
            </form>
        </div>
    </main>
</body>

</html>