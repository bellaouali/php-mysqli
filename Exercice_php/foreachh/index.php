
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<?php
$listnames = ['Name' => 'Abdelilah', ' Age' => '29', 'Sexe' => 'Homme', 'Ville' => 'Youssoufia', 'Origine' => 'Youssoufia',];
?>
<body>
    <table style="width:50%">
        <tr>
            <th><h1>First</h1></th>
            <th> <h1>Informations</h1></th>
        </tr>
        <?php foreach ($listnames as $fname => $lname) {
            ?>
            <tr>
                <td>
                    <?php echo "<h3>$fname</h3>" ?>
                </td>
                <td>
                    <?php echo "<h3>$lname</h3>" ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>