<?php

 if (isset($_GET['submit'])) {
    $first = $_GET['firstname'];
    $last = $_GET['lastname'];
    echo   "<h1> Wellcome : $first $last</h1>";
}
if (isset($_POST['submit'])) {
    $first = $_POST['firstname'];
    $last = $_POST['lastname'];
    echo   "<h1> Wellcome : $first $last</h1>";
}
?>