<?php
include_once('database.php');

//selectionner les message dans la base de donnée
$query = "SELECT * FROM messages JOIN utilisateurs ON messages.id_message = utilisateurs.id_utilisateur ";
$results = mysqli_query($link, $query);
$messages = mysqli_fetch_assoc($results);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat box</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main>
        <div class="titleBar container">
            <h1>Welcome Abdelilah</h1>
        </div>
        <div class="messages container">

            <ul>
                <?php foreach ($results as $row) : ?>
                    <?php if ($row) {
                        echo '<messages style="color: aqua">';
                    } else {
                        echo '<messages style="color: yellow">';
                    }
                    ?>
                    <li class="message"><span> <?php echo $row["temps"]; ?> - </span><?php echo $row["utilisateur"]; ?> : <?php echo $row["contenu_message"]; ?> </li>
                <?php endforeach ?>

            </ul>
        </div>
        <div class=" container">
            <form class="comment" action="" method="post">
                <input type="text" name="utilisateur" id="utilisateur" placeholder="Saisir votre username">
                <input type="text" name="message" id="message" placeholder="Saisir votre message">
                <input type="submit" class="envoyer" name="envoyer" value="Envoyer">
            </form>
        </div>
    </main>

</body>

</html>