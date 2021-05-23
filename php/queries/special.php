<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/php/db_connect.php';

$specials = [];
if ($result = $mysqli->query("SELECT id_special, name, surname FROM special;")) { #если больше менять лимит
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $specials[] = $row;
    }
    $result->close();
}