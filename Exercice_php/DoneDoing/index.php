<?php
$listnames = ['Name' => 'Abdelilah', ' Age' => '29', 'Sexe' => 'Homme',  'Origine' => 'Youssoufia', 'Done' => true];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <table style="width:50%">
        <tr>
            <th>First</th>
            <th> Informations</th>
        </tr>
        <?php foreach ($listnames as $key => $value) { {
                if ($key == 'Done' && $value == true) //1er test
                {
                    $value = 'Done';

                } elseif ($key == 'Done' && $value == false) //2eme test
                {
                    $value = 'Doing';
                }
            } ?>
            <tr>
                <td>
                    <?php echo $key ?>
                </td>
                <td>
                    <?php echo $value ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>