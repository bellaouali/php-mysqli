<?php

if (isset($_GET['submit'])) {
    $first = $_GET['firstname'];
    $last = $_GET['lastname'];
    echo   "<h1> Wellcome : $first $last </h1>";
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
    <form action="" method="GET">
        <label>Firstname</label><br>
        <input type="text" name="firstname" placeholder="enter you firstname"><br>
        <label>Lastname</label><br>
        <input type="text" name="lastname" placeholder="enter your lastname"><br>
        <label>Choose a civility:</label>
        <select>
            <option name="Mr">Mr</option>
            <option name="Mrs">Mrs</option>
        </select><br><br>
        <input type="submit" name="submit" value="chercher">
    </form>
</body>

</html>