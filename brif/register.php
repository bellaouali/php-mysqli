<?php
session_start();
include_once('db.php');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pseudo   = $_POST['pseudo'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $query  = ("INSERT INTO `register`(`username`,`pseudo`, `password`, `email`) VALUES ('$username', '$pseudo', '$password', '$email')");
    $result = mysqli_query($con, $query);
    if ($result) {
        header("Location:login.php");
    } else {
        echo "error";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="stylee.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="register">
        <h1><i class="fab fa-yoast"></i>YouChat</h1>
        
        <form action="" method="POST">
            <label><i class="fas fa-user"></i></label>
            <input type="text" name="username" placeholder="Username"  required>

            <label><i class="fas fa-user"></i></label>
            <input type="text" name="pseudo" placeholder="pseudo"  required>

            <label><i class="fas fa-lock"></i></label>
            <input type="password" name="password" placeholder="Password"  required>

            <label><i class="fas fa-envelope"></i></label>
            <input type="email" name="email" placeholder="Email"  required>

            <input type="submit" name="submit" value="Register">

            <a href="login.php">Login</a>
        </form>
    </div>
</body>

</html>