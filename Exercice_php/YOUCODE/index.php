<?php
function getage()
{
  if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    if ($number >= 18 && $number <= 35) {
      echo   " <h2> WELCOME TO YOUCODE ABDELILAH </h2>";
    } else {
      echo   "<h2> GO A WAY ABDELILAH </h2>";
    }
  }
}

getage();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="POST">
    <fieldset>
      <!-- <fieldset> tag draws a box around the related elements. -->
      <legend>YOUCODE</legend><!-- Group related elements in a form -->
      <div class="card">
        <label for="name">Name: </label>
        <input id="name" type="text" name="name" value="">
      </div>
      <div class="card">
        <label>Enter Your Age:</label>
        <input type="text" name="number" id="number" />
      </div>
      <div class="card">
        <input name="submit" type="submit" value="Submit" />
      </div>
    </fieldset>
  </form>
</body>