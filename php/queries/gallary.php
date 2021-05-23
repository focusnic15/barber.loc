<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/php/db_connect.php';

$gallarys = [];
if ($result = $mysqli->query("SELECT photo FROM gallary;")) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $gallarys[] = $row;
    }
    $result->close();
}