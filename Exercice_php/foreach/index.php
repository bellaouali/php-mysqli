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
    <ul>
        <?php   //Arrays are used to contain more than one value in one variable.
        $listprenom = array("HTML/CSS", "JavaScript", "PHP", "Ruby", "Java", "Swift", "C#, C ou C++", "Python");
        // echo '<pre>';
        // print_r($listprenom);
        // echo '</pre>'; // <pre></pre> : is displayed in a fixed-width,font,spaces and,line breaks

        foreach ($listprenom as $cle => $valeur) //The foreach loop works only on arrays, and is used to loop through each key
        {
            echo " <li>$valeur</li>";
        }
        ?>
    </ul>
</body>

</html>