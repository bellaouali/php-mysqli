<?php 
session_start();
include("conx.php");
if (isset($_POST['submit'])) {
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    $query = "SELECT * FROM utilisateurs WHERE pseudo ='$pseudo' && password='$password'";
    if (mysqli_num_rows(mysqli_query($con, $query)) > 0) {
         $_SESSION['pseudo']=$pseudo;
    }else{
        echo "error";
        header("location:well.php");
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
        <h1>login</h1>
        <form action="authenticate.php" method="post">
            <label for="pseudo">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="pseudo" placeholder="pseudo" id="pseudo" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <input type="submit" value="Login">

        </form>
    </div>
</body>

</html>