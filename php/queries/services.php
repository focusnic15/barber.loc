<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/php/db_connect.php';

$services = [];
if ($result = $mysqli->query("SELECT name, photo, price FROM service LIMIT 3;")) { #если больше менять лимит
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $services[] = $row;
    }
    $result->close();
}