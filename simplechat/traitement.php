<?php

include_once('database.php');
if (isset($_POST['envoyer'])) {
    $utilisateur = $_POST['utilisateur'];
    $messages = $_POST['message'];
    

    $sql = "INSERT INTO  messages (utilisateur,contenu_message) VALUES ('$utilisateur','$messages')";
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully !";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($link);
    }
    mysqli_close($link);

    header("Location:index.php");


}



