<?php
session_start();
echo $_SESSION['name'] . " this is last page is number three ";
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
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>

</html>