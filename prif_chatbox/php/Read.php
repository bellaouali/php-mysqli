<?php
include_once("db.php");
$query = "SELECT * FROM users ORDER BY userId ASC";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="stylee.css">
    <title>read</title>
</head>

<body >
    <header>
        <nav class="navtop">
            <div>
                <h1><i class="fab fa-yoast"></i>YouChat</h1>
            </div>
            <div class="navv">
                <a href="Creating.php"><i class="fas fa-users"></i>Create</a>
                <a href="home.php"><i class="fas fa-comments"></i>Chat</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="title">
            <h2><i class="fas fa-users"></i> : users Account Details</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Psuedo</th>
                    <th>Password</td>
                    <th>Email</th>
                    <th>Updete <i class="fas fa-user-check"></i></th>
                    <th>Delete <i class="fas fa-user-times"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row) : ?>
                    <tr>
                        <td data-td="userId :"><?= $row["userId"]; ?></td>
                        <td data-td="Username :"><?= $row["username"]; ?></td>
                        <td data-td="Psuedo :"><?= $row["pseudo"]; ?></td>
                        <td data-td="Password :"><?= $row["password"]; ?></td>
                        <td data-td="Email :"><?= $row["email"]; ?></td>
                        <td data-td="Updete :"><a href="Update.php?userId=<?= $row["userId"]; ?>">Update</a></td>
                        <td data-td="Delete :"><a href="Delete.php?userId=<?= $row["userId"]; ?>">Delete</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>
</body>

</html> 