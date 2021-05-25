<?php
require $_SERVER['DOCUMENT_ROOT'] . '/php/init.php';

session_init();

if (!empty($_POST)) {
	$name = $_POST['userName'];
	$phone = $_POST['userPhone'];
	$login = $_POST['userLogin'];
	$pass = $_POST['userPass'];
	$pass_confirm = $_POST['userPass2'];
	if ($pass === $pass_confirm) {
		#$pass = md5($pass);
		$result = $mysqli->query("INSERT INTO users (name, login, phone, password) VALUES ('$name', '$login', '$phone', '$pass');");
		if ($result) {
			$_SESSION['message'] = 'Регистрация прошла успешно!';
			header('Location:'.'/signInUp/signUp');
		} else {
			$_SESSION['message'] = 'Ошибка регистрации';
		}
		session_write_close();
		header('Location:' . '/signInUp/signIn.php');
	} else {
		$_SESSION['message'] = 'Пароли не совпадают';
		session_write_close();
		header('Location:' . '/signInUp/signUp.php');
	}
}
