<?php
include_once('db.php');
if (isset($_POST['envoyer'])) {
    $utilisateur = $_POST['utilisateur'];
    $contenu_message = $_POST['contenu_message'];
    
    $query = "INSERT INTO `messages`(`utilisateur`,`contenu_message`) VALUES ('$utilisateur','$contenu_message')";
    $result = mysqli_query($con, $query);
    if (!$result) {
        echo "Error: " . $query . "" . mysqli_error($con);
    }
    header("Location:home.php");
}
