<?php
include_once("db.php");
if (count($_POST) > 0) {
    $query = "INSERT INTO users (username, pseudo, password, email) VALUES ('" . $_POST["username"] . "','" . $_POST["pseudo"] . "','" . $_POST["password"] . "','" . $_POST["email"] . "')";
    mysqli_query($con, $query);
    header('Location:Read.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="stylee.css">
    <title>Create</title>
</head>

<body>
    <div class="register">
        <h1>Create</h1>
        <form action="" method="post">
            <label><i class="fas fa-user"></i></label>
            <input type="text" name="username" placeholder="Username">

            <label><i class="fas fa-user"></i></label>
            <input type="text" name="pseudo" placeholder="pseudo">

            <label><i class="fas fa-lock"></i></label>
            <input type="password" name="password" placeholder="Password">

            <label><i class="fas fa-envelope"></i></label>
            <input type="email" name="email" placeholder="Email">
            <input type="submit" name="submit" value="Create">
            <a href="Read.php">BACK</a>
        </form>
    </div>
</body>