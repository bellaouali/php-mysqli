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
 for ($k=1; $k<=10; $k++) {
     if ($k == 4 || $k == 9)continue;
         echo ("$k <br/> ");
 }

 for ($l=1; $l<=10; $l++) { 
     if ($p = $l * 6);
         echo ("$p <br/> ");
        
 }
    //(initialization; condition; increment)  
for ($i = 1; $i<=100; $i++){                   //  loops through a block of code a specified number of times.

  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo $i . " fizzbuzz <br />";
   }
     else if ( $i%3 == 0 ) 
   {
     echo $i . " fizz <br />";
   }
     else if ( $i%5 == 0 ) 
   {
     echo $i . " buzz <br />";
   }
     else
   {
     echo ("$i  <br />");
   }
}
?>
</body>
</html>