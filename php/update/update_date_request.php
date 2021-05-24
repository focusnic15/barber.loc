<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/php/db_connect.php';
if(!empty($_POST['alterdate'])){
	$date = $_POST['alterdate'];
	$requestId = intval($_GET['request']);
	$result = $mysqli->query("UPDATE `request` SET `date`= '$date' WHERE request_id = ${requestId}");
	header("Refresh: 0.1");
	if (!$result) die ("Ошибка запроса");
}