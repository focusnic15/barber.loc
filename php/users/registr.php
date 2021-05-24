<?php
	session_start();
	require $_SERVER['DOCUMENT_ROOT'] . '/php/db_connect.php';

	$name = $_POST['userName'];
	$phone = $_POST['userPhone'];
	$login = $_POST['userLogin'];
	$pass = $_POST['userPass'];
	$pass_confirm = $_POST['userPass2'];
	if ($pass === $pass_confirm) {
		$pass = md5($pass);
		$result = $mysqli->query("INSERT INTO users (`name`,`login`,`phone`,`password`) VALUES (`$name`, `$login`, `$phone`, `$pass`");
		$_SESSION['message'] = 'Регистрация прошла успешно!';
		header('Location:'.$_SESSION['DOCUMENT_ROOT'].'/signInUp/signIn.php');
	}
	else{
		$_SESSION['message'] = 'Пароли не совпадают';
		header('Location:'.$_SESSION['DOCUMENT_ROOT'].'/signInUp/signUp.php');
	}
?>
