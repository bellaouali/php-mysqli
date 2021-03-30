<?php
include_once("db.php");
if (count($_POST) > 0) {
    $query = "UPDATE users set username='" . $_POST["username"] . "', pseudo='" . $_POST["pseudo"] . "', password='" . $_POST["password"] . "',  email='" . $_POST["email"] . "' WHERE userId='" . $_GET["userId"] . "'";
    mysqli_query($con, $query);
    header('Location:Read.php');
}
$query = "SELECT * FROM users WHERE userId='" . $_GET["userId"] . "'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="stylee.css">
    <title>Update</title>
</head>

<body>
    <div class="content">
        <div class="register">
            <h1>Update</h1>
            <form action="" method="post">

                <label><i class="fas fa-user"></i></label>
                <input type="text" name="username" value="<?= $row["username"]; ?>">

                <label><i class="fas fa-user"></i></label>
                <input type="text" name="pseudo" value="<?= $row["pseudo"]; ?>">

                <label><i class="fas fa-lock"></i></label>
                <input type="password" name="password" value="<?= $row["password"]; ?>">

                <label><i class="fas fa-envelope"></i></label>
                <input type="email" name="email" value="<?= $row["email"]; ?>">
                <input type="submit" name="submit" value="Changed">
                <a href="Read.php">BACK</a>
            </form>
        </div>
    </div>


</body>

</html>