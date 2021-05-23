<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/php/db_connect.php';

$services_form = [];
if ($result = $mysqli->query("SELECT id_service, name, photo, price FROM service;")) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $services_form[] = $row;
    }
    $result->close();
}