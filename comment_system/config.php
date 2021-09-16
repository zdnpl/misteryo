<?php
    $servername = "sql308.epizy.com";
    $username = "epiz_29500431";
    $password = "zdnpladmin";
    $database = "epiz_29500431_comment";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        echo "Connection Failed.";
    }
?>