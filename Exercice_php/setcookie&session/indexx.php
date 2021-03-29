<?php
session_start();
$_SESSION['name'] = 'abdelilah';
echo "<h1>hello</h1>"  .  $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <label for="">Enter Your First Name</label><br>
        <input type="text" name="name" /><br><br>
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>

</html>