<?php
session_start();
echo " you are in page tow " . $_SESSION['name'] . "  this is page number tow ";
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
    <form action="indexxxx.php" method="POST">
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>

</html>