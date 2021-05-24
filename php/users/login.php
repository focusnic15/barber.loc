<?php
require $_SERVER['DOCUMENT_ROOT'] . '/php/init.php';

session_init();

if (!empty($_POST)) {
    $login = $_POST['userLogin'];
    $password = md5($_POST['userPass']);

    $result = $mysqli->query("SELECT * FROM users WHERE login = '$login' AND password = '$password';");
    if (mysqli_num_rows($result) > 0) {
        $user = $result->fetch_array(MYSQLI_ASSOC);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "phone" => $user['phone']
        ];
        $_SESSION['message'] = 'Авторизация прошла успешно';
    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
    }
}