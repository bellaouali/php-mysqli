<?php
session_start();
require('db.php');
if (count($_POST) > 0) {
    $con = mysqli_connect('localhost', 'root', '', 'sing') or die('Unable To connect');
    $result = mysqli_query($con, "SELECT * FROM users 
        WHERE user_name='" . $_POST["username"] . "' and password = '" . $_POST["password"] . "'");

    $row  = mysqli_fetch_array($result);
    if (is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
    } else {
        header("Location:home.php");
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Facebook</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="login">
        <h1>Facebook</h1>
        <form action="" method="post">

            <label for="name"><i class="fas fa-user"></i></label>
            <input type="text" name="username" placeholder="Name" id="name" required>

            <label for="password"><i class="fas fa-lock"></i></label>
            <input type="number" name="password" placeholder="Password" id="password" required>

            <input type="submit" value="Login">
        </form>
    </div>
</body>

</body>

</html>