<?php
session_start();
include_once('db.php');
if (count($_POST) > 0) {
    $query  = "SELECT * FROM register WHERE username = '" . $_POST["username"] . "' AND password = '" . $_POST["password"] . "' ";
    $result = mysqli_query($con, $query);
    $row    = mysqli_fetch_array($result);
    if (is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
        $_SESSION["pseudo"] = $row['pseudo'];
        $_SESSION["password"] = $row['password'];
        $_SESSION["email"] = $row['email'];
        header("Location:home.php");
    }
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
    <title>Login</title>
</head>

<body>
    <div class="login">
        <h1><i class="fab fa-yoast"></i>YouChat</h1>
        <form action="" method="post">
        
            <label><i class="fas fa-user"></i></label>
            <input type="text" name="username" placeholder="Name" required>

            <label><i class="fas fa-lock"></i></label>
            <input type="number" name="password" placeholder="Password" required>

            <input type="submit" value="Login">
            <a href="register.php">Register</a>
        </form>
    </div>
</body>
</body>

</html>