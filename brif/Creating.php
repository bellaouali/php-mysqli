<?php
include_once("db.php");
if (count($_POST) > 0) {
    $query = "INSERT INTO users (username, pseudo, password, email) VALUES ('" . $_POST["username"] . "','" . $_POST["pseudo"] . "','" . $_POST["password"] . "','" . $_POST["email"] . "')";
    mysqli_query($con, $query);
    $id = mysqli_insert_id($con);
    if (!empty($id)) {
        echo "New User Added Successfully";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add user</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="stylee.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="register">
        <h1>Add user</h1>
        <form action="" method="post">
            <label for="username"><i class="fas fa-user"></i></label>
            <input type="text" name="username" placeholder="Username">

            <label for="pseudo"><i class="fas fa-user"></i></label>
            <input type="text" name="pseudo" placeholder="pseudo">

            <label for="password"><i class="fas fa-lock"></i></label>
            <input type="password" name="password" placeholder="Password">

            <label for="email"><i class="fas fa-envelope"></i></label>
            <input type="email" name="email" placeholder="Email">
            <input type="submit" name="submit" value="Register">
            <button class="button"><a href="Read.php">BACK</a></button>
        </form>
    </div>
</body>

</html>