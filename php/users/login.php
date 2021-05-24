<?php
	require $_SERVER['DOCUMENT_ROOT'] . '/php/db_connect.php';
	session_start();

	$login = $_POST['userLogin'];
	$password = md5($_POST['userPass']);

	$result = $mysqli->query("SELECT * FROM users WHERE `login` = `$login` AND `password` = `$password`");
	if (mysqli_num_rows($result) > 0) {
		$_SESSION['user'] = [
			"id" => $user['id'],
			"name" => $user['name'],
			"phone" => $user['phone']
		];


	}
	else {
		$_SESSION['message'] = 'Не верный логин или пароль';
		header('Location:'.$_SESSION['DOCUMENT_ROOT'].'/signInUp/signIn.php')
	}