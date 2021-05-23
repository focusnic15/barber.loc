<?php
    $localhost = "localhost";
    $db = "leviafan";
    $user = "root";
    $password = "root";

    $mysqli = new mysqli($localhost, $user, $password, $db);
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    if (!$mysqli->set_charset("utf8")) {
        printf("Ошибка при загрузке набора символов utf8: %s\n", $mysqli->error);
        exit();
    }
?>