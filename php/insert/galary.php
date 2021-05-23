<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/php/db_connect.php';

$path = $_SERVER['DOCUMENT_ROOT'] . '/galary/img/' . $_FILES['photo'];
if(move_uploaded_file($_FILES['photo']['typename'], $path)){
	$result = $mysqli->query ("INSERT INTO `gallary` (`id`, `photo`) VALUES (NULL, '$path')");
}
