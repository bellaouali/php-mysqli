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

<body>
    <main>

        <body class="loggedin">
            <nav class="navtop">
                <div>
                    <h1><i class="fab fa-yoast"></i>YouChat</h1>
                    <a href="profile.php"><i class="fas fa-id-badge"></i>Profile</a>
                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </div>
            </nav>
            <?php
            $username = $_SESSION['username'];
            ?>
            <div class="content">
                <h2 class="tapper"><?php echo "Welcome back : $username " ?></h2>
            </div>
        </body>
        <div class="messages container">
            <ul>
                <?php foreach ($results as $row) : ?>
                    <li class="message">
                        <?php echo '<message style="color:#4cd9f1">' . $row["temps"] ?> :
                        <?php echo '<message style="color:blue">' . $row["contenu_message"]; ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="container">
            <form class="comment" action="traitement.php" method="POST">
                <input class="comment" type="text" name="contenu_message" placeholder="Saisir votre message">
                <input type="submit" class="envoyer" name="envoyer" value="Envoyer">
            </form>
        </div>
    </main>
</body>
</html>