<?php require $_SERVER['DOCUMENT_ROOT'].'/php/queries/requests.php'; ?>
<?php require $_SERVER['DOCUMENT_ROOT'].'/php/delete/request_delete.php'; ?>
<?php require $_SERVER['DOCUMENT_ROOT'].'/php/insert/galary.php'; ?>

<style>
    .admin {
        height: 40%;
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

    td a{
        background-color:rgb(0 117 68);
        color:#fff;
        font-weight:600;
        border-radius:5px;
        padding:4px;
    }

</style>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<title>Админ панель</title>
</head>
<body>
	<div class="admin-head">
		<div class="logo">
			<a href="/"><img src="../head-block/img/logo.png" height="130px"></a>
		</div>
	</div>

    <table>
        <tbody>
           <?php foreach ($requests as $request): ?>
                <tr>
                    <td><?= $request['request_id']?></td>
                    <td><?= $request['client_name'] ?></td>
                    <td><?= $request['client_phone'] ?></td>
                    <td><?= $request['request_date'] ?></td>
                    <td><?= $request['service_name'] ?></td>
                    <td><?= $request['service_price'] ?></td>
                    <td><?= $request['service_category'] ?></td>
                    <td><?= $request['special_name'] . " " . $request['special_surname'] ?></td>
                    <td><a href="request-edit/?request=<?= $request['request_id'] ?>">Изменить</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="container">
        <div class="admin">
            <div class="admin-delete">
                 <div class="admin-delete-text">
                    <h4>Обработать запись</h4>
                </div>
                <form class="" method="POST">
                    <input type="text" name="delid" placeholder="Введите номер записи">
                    <button>Удалить</button>
                </form>
            </div>
            <div class="admin-insert">
                <h4>Добавить фото в галлерею</h4>
                <div class="admin-insert-photo">
                    <form method="POST" enctype="multipart/form-data">
                        <input type="file" name="photo" placeholder="Выберите фото">
                        <button>Загрузить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


	<?php include '../foot-block/foot.php' ?>
</body>
</html>