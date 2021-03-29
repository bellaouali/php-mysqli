<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $fName = 'abdelilah';
    $lName = 'bellaoulai';
    echo "$fName, $lName";
    ?>

    <?php
    $fName = " <h1>abdelilah</h1>";
    $lName = " <h1>bellaoulai</h1>";
    $Age   = " <h1>29</h1> <br>";
    echo 'abdelilah' . "$lName, $Age";
    ?>

    <?php
    $str = <<<EOD
     <h1> abdelilah <br> bellaouali <br>  i am 29  years old </h1> i live in youssoufai city  
     EOD;
    echo "$str"
    ?>

    <?php
    $fName = 'abdelilah';
    $lName = 'bellaoulai';
    echo <<<EOT
     My name is $fName. and lastname is $lNams. I am printing some word. in php <br>
     EOT;
    ?>

    <?php //Nowdoc string quoting  
    echo <<<'EOD'
    e.g. \\ and \'.<br>
    EOD;
    ?>

    <?php //Nowdoc string quoting with variables
    $fName = 'abdelilah';
    echo <<<"EOT"
    My name is "$fName". and lastname is "$fName". I am printing some word. in php <br>
    EOT;
    ?>

</body>

</html>