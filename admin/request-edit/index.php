<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/queries/request.php'; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/update/update_date_request.php'; ?>

    <style>
        .admin {
            height: 25%;
        }

        .admin-delete {
            margin-left: 5px;
            margin-right: 3rem;
            margin-top: 7px;
            display: inline-block;
        }

        .admin-delete-text {

        }


        input[type=text] {
            padding: 10px;
            border:0;
            border-bottom: 1px solid rgb(0 117 68);
            box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
        }

        button {
            margin-left: 3px;
            appearance:none;
            -webkit-appearance:none;
            padding:10px;
            border:none;
            background-color:rgb(0 117 68);
            color:#fff;
            font-weight:600;
            border-radius:5px;
        }

        .admin-insert {
            display: inline-block;
        }

        .change {
            margin-left: 4rem;
        }

        a {
            background-color:rgb(0 117 68);
            color:#fff;
            padding:10px;
            margin-top: 15px;
        }

        </style>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
        <title>Админ панель</title>
    </head>
    <body>
        <div class="admin-head">
            <div class="logo">
                <a href="/"><img src="../../head-block/img/logo.png" height="130px"></a>
            </div>
        </div>

        <?php
        $date = new DateTime($request['request_date']);
        ?>

        <form method="POST">
            <div class="change">
                <div>Имя клиента: <?= $request['client_name'] ?></div>
                <div>Телефон клиента: <?= $request['client_phone'] ?></div>
                <div>Дата: <input type="datetime-local" name="alterdate" value="<?= $date->format("Y-m-d\TH:i") ?>"></div>
                <div>Услуга: <?= $request['service_name'] ?></div>
                <div>Цена: <?= $request['service_price'] ?></div>
                <div>Категория:<?= $request['service_category'] ?></div>
                <div>Мастер:<?= $request['special_name'] . " " . $request['special_surname']  ?></div>
                <button style="margin-top: 10px;">Изменить</button>
            </div>
        </form>

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/foot-block/foot.php' ?>
    </body>
</html>