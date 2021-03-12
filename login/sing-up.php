<?php
include("conx.php");
if (isset($_POST['submit'])) {
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $query = "INSERT INTO utilisateurs (pseudo, password, email, )VALUE('$pseudo''$password''$email')";
    if (mysqli_query($con, $query)) {
        echo "hello";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="login">
        <h1>Facebook</h1>
        <form action="authenticate.php" method="post">
            <label for="pseudo">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="pseudo" placeholder="pseudo" id="pseudo" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <label for="email">
                <i class="fas fa-lock"></i>
            </label>
            <input type="email" name="email" placeholder="email" id="email" required>
            <input type="submit" value="SINGUP HERE">
        </form>
    </div>
</body>

</html>