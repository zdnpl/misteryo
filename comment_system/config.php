<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "comment";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        echo "Connection Failed.";
    }
?>
