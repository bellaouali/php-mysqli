<?php
require_once("db.php");
 $query = "DELETE FROM users WHERE userId='" . $_GET["userId"] . "'";
mysqli_query($con,  $query);
header("Location:Read.php");
?>