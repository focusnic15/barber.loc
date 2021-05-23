<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/php/db_connect.php';

	if (!empty($_POST)) {
        $special = $_POST['special'];
        $service_category = $_POST['service_category'];
        $usName = $_POST['userName'];
        $usPhone = $_POST['userPhone'];
        $date = $_POST['date'];

        $result = $mysqli->query("INSERT INTO clients (name, phone) VALUES ('$usName', '$usPhone')");
        if (!$result) die ("Ошибка запроса");
        $clientId = $mysqli->insert_id;

        $result = $mysqli->query("INSERT INTO request (id_service, id_clients, id_special, date) VALUES ($service_category, $clientId, $special, '$date')");
        if (!$result) die ("Ошибка запроса");
    }

/*
	$query = "INSERT INTO clients (name, phone) VALUES ('$usName', '$usPhone');";

	if (!$mysqli->query($query)) {
        printf("Errormessage: %s\n", $mysqli->error);
    }

    $tmp_service = $mysqli->query("SELECT id_service FROM service WHERE service.name = $service_category");
    $tmp_special = $mysqli->query("SELECT id_special FROM special WHERE special.name = $special");
    $tmp_cliets = $mysqli->query("SELECT id_clients FROM clients WHERE clients.name = $usName");

    $result = $mysqli->query("INSERT INTO `request` (`id_service`, `id_clients`, `id_special`, `date`) VALUES ('$tmp_service', '$tmp_cliets', '$tmp_special', '0')");

    $mysqli->close();
*/
?>