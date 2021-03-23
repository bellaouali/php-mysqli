<?php
session_start();
include_once('db.php');
if (count($_POST) > 0) {
    $query = "SELECT * FROM register WHERE username = '" . $_POST["username"] . "' AND password = '" . $_POST["password"] . "' ";
    $result = mysqli_query($con, $query);
    $row  = mysqli_fetch_array($result);
    if (is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
        $_SESSION["pseudo"] = $row['pseudo'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["password"] = $row['password'];
        header("Location:home.php");
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>YouChat</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="stylee.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="login">
        <h1><i class="fab fa-yoast"></i>YouChat</h1>
        <form action="" method="post">

            <label for="name"><i class="fas fa-user"></i></label>
            <input type="text" name="username" placeholder="Name" id="name" required>

            <label for="number"><i class="fas fa-lock"></i></label>
            <input type="number" name="password" placeholder="Password" id="password" required>

            <input type="submit" value="Login">
        </form>
    </div>
</body>
</body>
</html>