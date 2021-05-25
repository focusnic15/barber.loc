<?php
require $_SERVER['DOCUMENT_ROOT'] . '/php/init.php';

session_init();

if (!empty($_POST)) {
    $login = $_POST['userLogin'];
    $password = $_POST['userPass'];

    $check_admin = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' AND `rights`= 'admin';");
    if (mysqli_num_rows($check_admin) > 0) {
        $admin = mysqli_fetch_assoc($check_admin);

        $_SESSION['user']=[
            "Nickname"=>$admin['Nickname'],
            "Email"=>$admin['Email'],   
            "Login"=>$admin['Login'],
            "Password"=>$admin['Password'],
            "id"=>$admin['id']
        ];
        $_SESSION['message'] = 'Авторизация прошла успешно';
        session_write_close();
        header('Location: /admin/index.php');
        
        
    }
    else{
        $check_user = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' AND `rights` IS NULL;");
        if (mysqli_num_rows($check_user) > 0) {
            $user = mysqli_fetch_assoc($check_user);
             $_SESSION['user']=[
                "Nickname"=>$user['Nickname'],
                "Email"=>$user['Email'],    
                "Login"=>$user['Login'],
                "Password"=>$user['Password'],
                "id"=>$user['id']
            ];
            $_SESSION['message'] = 'Авторизация прошла успешно';
            session_write_close();
            header('Location: ../../user_index.php');
        }
        else{
            $_SESSION['message'] = 'Не верный логин или пароль';
            session_write_close();
        }
    }

    #$result = $mysqli->query("SELECT * FROM users WHERE login = '$login' AND password = '$password';");
    #$admin = $mysqli->query("SELECT * FROM users WHERE right = admin;");
}