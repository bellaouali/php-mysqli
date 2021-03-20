<?php
session_start();
include_once('db.php');
$query = "SELECT * FROM messages ORDER BY temps DESC limit 4";
$results = mysqli_query($con, $query);
$messages = mysqli_fetch_assoc($results);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>YouChat</title>
</head>

<body>
    <main>

        <body class="loggedin">
            <nav class="navtop">
                <div>
                    <h1>YouChat</h1>
                    <a href="profile.php">Profile</a>
                    <a href="logout.php">Logout</a>
                </div>
            </nav>
            <div class="content">
                <h2>Welcome back => <?php echo $_SESSION['username'] ?></h2>
                <p></p>
            </div>
        </body>
        <div class="messages container">
            <ul>
                <?php foreach ($results as $row) : ?>
                    <li class="message">
                        <?php echo'<message style="color:#4cd9f1">'. $row["temps"] ?> =>
                        <?php echo'<message style="color:#dee0e4">'. $row["contenu_message"]; ?>
                    </li>
                <?php endforeach ?>

            </ul>
        </div>
        <div class="container">
            <form class="comment" action="traitement.php" method="post">
                <input type="text" name="contenu_message" id="message" placeholder="Saisir votre message">
                <input type="submit" class="envoyer" name="envoyer" value="Envoyer">
            </form>
        </div>
    </main>
</body>

</html>
