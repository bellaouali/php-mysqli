<?php
include_once('db.php');
// When form submitted, insert values into the database.
if (isset($_POST['username'])) {
    //escapes special characters in a string
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $query  = ("INSERT INTO `sing_up`(`user_name`, `password`, `email`) VALUES ('$username', '$password', '$email')");
    $result = mysqli_query($con, $query);
    if (!$result) {
        echo "error";
    } else {
        header("Location:login.php");
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
        <h1>Facebook</h1>
        <form action="" method="post">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <label for="email">
                <i class="fas fa-envelope"></i>
            </label>
            <input type="email" name="email" placeholder="Email" id="email" required>
            <input type="submit" name="submit" value="Register">
        </form>
    </div>
</body>

</html>