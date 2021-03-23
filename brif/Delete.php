<?php
require_once("db.php");
$sql = "DELETE FROM users ORDER BY userId DESC";
mysqli_query($con, $sql);
header("Location:Read.php");
?>