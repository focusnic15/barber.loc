<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/php/db_connect.php';

$request = null;
if (isset($_GET['request'])) {
    $requestId = intval($_GET['request']);
    $query = "SELECT clients.id_clients as clients_id, clients.name as client_name, clients.phone as client_phone, request.date as request_date, service.name as service_name,
          service.price as service_price, `service category`.name as service_category, special.name as special_name, special.surname as special_surname
          FROM clients, request, service, `service category`, special
          WHERE request_id = ${requestId} AND clients.id_clients = request.id_clients AND request.id_service = service.id_service AND request.id_special = special.id_special AND service.id_category = `service category`.id_category
          LIMIT 1;";
    if ($result = $mysqli->query($query)) {
        if ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $request = $row;
        }
        $result->close();
    }
}