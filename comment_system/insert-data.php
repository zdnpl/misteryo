<?php
    include 'config.php';

    $msg = $_POST['msg'];
    
    $sql = "INSERT INTO msg (msg) VALUES ('$msg')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo 1;
    }else {
        echo 0;
    }
?>