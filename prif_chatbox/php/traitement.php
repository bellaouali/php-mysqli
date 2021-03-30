<?php
include_once('db.php');
if (isset($_POST['envoyer'])) {
    $contenu_message = $_POST['contenu_message'];
    
    $query = "INSERT INTO `messages`(`contenu_message`) VALUES ('$contenu_message')";
    $result = mysqli_query($con, $query);
    if (!$result) {
        echo "Error: " . $query . "" . mysqli_error($con);
    }
    header("Location:home.php");
}
