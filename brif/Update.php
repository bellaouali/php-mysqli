<?php
require_once("db.php");
if (count($_POST) > 0) {
    $sql = "UPDATE users set username='" . $_POST["username"] . "', pseudo='" . $_POST["pseudo"] . "', password='" . $_POST["password"] . "',  email='" . $_POST["email"] . "'";
    mysqli_query($con, $sql);
    $message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM users ORDER BY userId DESC";
$result = mysqli_query($con, $select_query);
$row = mysqli_fetch_array($result);
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
        <h1>Creating</h1>
        <form action="" method="post">

            <label for="username"><i class="fas fa-user"></i></label>
            <input type="text" name="username" value="<?php echo $row["username"]; ?>">

            <label for="pseudo"><i class="fas fa-user"></i></label>
            <input type="text" name="pseudo" value="<?php echo $row["pseudo"]; ?>">

            <label for="password"><i class="fas fa-lock"></i></label>
            <input type="password" name="password" value="<?php echo $row["password"]; ?>">

            <label for="email"><i class="fas fa-envelope"></i></label>
            <input type="email" name="email" value="<?php echo $row["email"]; ?>">
            <input type="submit" name="submit" value="submit">
            <button class="button"><a href="Read.php">BACK</a></button>
    </div>
    </form>
</body>

</html>