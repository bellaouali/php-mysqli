<?php
session_start();
require_once("db.php");
$query = "SELECT * FROM users ORDER BY userId DESC";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Profile Page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="stylee.css" rel="stylesheet" type="text/css">
</head>

<body class="loggedin">
    <nav class="navtop">
        <div>
            <h1><i class="fab fa-yoast"></i>YouChat</h1>
            <a href="Creating.php"><i class="fas fa-user-friends"></i></i>Add users</a>
            <a href="home.php"><i class="fab fa-yoast"></i>YourChat</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>
    <div class="content">
        <h2><i class="fas fa-user-friends"></i>List users</h2>
        
    </div>
    <div>
        <table>
            <tr>
                <td>Username </td>
                <td>Psuedo </td>
                <td>Password </td>
                <td>Email </td>
                <td>Crud <i class="fas fa-user-check"></i></td>
                <td>Crud </a><i class="fas fa-user-times"></i></td>

            </tr>
            <tr>
                <?php foreach ($result as $row) : ?>
            <tr>
                <td><?php echo $row["username"]; ?></td>
                <td><?php echo $row["pseudo"]; ?></td>
                <td><?php echo $row["password"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><a href="Update.php">Update</a></td>
                <td><a href="Delete.php">Delete</td>
            </tr>
        <?php endforeach ?>
        </table>
    </div>

</body>

</html>