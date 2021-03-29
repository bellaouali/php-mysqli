<?php
#          name         value   time in unix    path              secure http
setcookie("abdelilah", "canal", time() + 86400, "/", "localhost", TRUE, TRUE); // stor infrmation in browser
 if (isset($_POST['submit'])) {
     $first = $_POST['firstname'];
     echo   "<h1> Wellcome : $first </h1>";
}

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
    <form action="indexx.php" method="POST">
        <label for="firstname"> enter your name</label><br>
        <input type="text" name="firstname" placeholder="enter name here">
        <input type="submit" name="submit"><br>
    </form>
</body>

</html>