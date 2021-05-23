<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/php/db_connect.php';

if (!empty($_FILES)) {
    $path = $_SERVER['DOCUMENT_ROOT'] . '/galary/img/' . $_FILES['photo']['name'];
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
        $result = $mysqli->query("INSERT INTO `gallary` (`id`, `photo`) VALUES (NULL, '$path')");
    }
}
