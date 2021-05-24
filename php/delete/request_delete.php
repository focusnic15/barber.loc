<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/php/db_connect.php';
if (!empty($_POST['delid']) and is_numeric($_POST['delid'])) {
	$del = $_POST['delid'];

    $result = $mysqli->query("DELETE FROM request WHERE request_id = $del");
    header("Refresh: 1");
    if (!$result) die ("Ошибка запроса");
}
