<?php
include_once('db.php');
//selectionner les message dans la base de donnée
$query = "SELECT * FROM messages";
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
    <title>Chat box</title>
</head>

<body>
    <main>

        <body class="loggedin">
            <nav class="navtop">
                <div>
                    <h1>Facebook</h1>
                    <a href="profile.php">Profile</a>
                    <a href="logout.php">Logout</a>
                </div>
            </nav>
            <div class="content">
                <h2>Chatbox</h2>
            </div>
        </body>
        <div class="messages container">
            <ul>
                <?php foreach ($results as $row) : ?>
                    <?php if ($row) {
                        echo '<messages style="color: green">';
                    }
                    ?>
                    <li class="message"><span> <?php echo $row["temps"]; ?> - </span><?php echo $row["utilisateur"]; ?> : <?php echo $row["contenu_message"]; ?> </li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class=" container">
            <form class="comment" action="traitement.php" method="post">
                <input type="text" name="utilisateur" id="utilisateur" placeholder="Saisir votre username">
                <input type="text" name="contenu_message" id="message" placeholder="Saisir votre message">
                <input type="submit" class="envoyer" name="envoyer" value="Envoyer">
            </form>
        </div>
    </main>
</body>

</html>