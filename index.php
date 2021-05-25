<?php
    include 'php/queries/services.php';
/*
	if (!empty($_POST['userName'])) {
        $userName = $_POST['userName'];
        $userPhone = $_POST['userPhone'];
        $userComment = null;


        $query = "INSERT INTO clients (name, phone) VALUES ('$userName', '$userPhone');";

        if (!$mysqli->query($query)) {
            printf("Errormessage: %s\n", $mysqli->error);
        }
        $mysqli->close();
	}*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Leviafan</title>
</head>
<body>
	<?php include "head-block/head.php"; ?>
	<?php include "menu/menu.php"  ?>

	<section class="features">
		<div class="container">
			<div class="section-header">
				<p id="p1">
				<h2>Преимущества</h2>
				</p>
			</div>

			<div class="features-block">
				<div class="features-img">
					<img src="img/features/3.svg" alt="Быстро">
				</div>
				<h3>Быстро</h3>
				<p>Любая процедура занимает не больше 30 минут.</p>
			</div>
			<div class="features-block">
				<div class="features-img">
						<img src="img/features/2.svg" alt="Качественно">
					</div>
				<h3>Качественно</h3>
				<p>Тут работают настоящие профессионалы, ценящие доверие клиента.</p>
			</div>
			<div class="features-block">
				<div class="features-img">
						<img src="img/features/4.svg" alt="Качественно">
				</div>
				<h3>Экономно</h3>
					<p>Скидки 50% постоянным клиентам.</p>
				</div>
			<div class="features-block">
				<div class="features-img">
					<img src="img/features/1.svg" alt="Качественно">
				</div>
				<h3>Профессионально</h3>
				<p>Наши профессионалы оказывают полный список услуг и виртуозно владеют опасными бритвами</p>
			</div>

		</div>
	</section>

	<section class="price">
		<div class="container">
			<div class="section-header section-header-light">
				<p id="p2">
					<h2>Цены</h2>
					<p>Выберите вариант, который подходит Вам</p>
					<p> Если этого мало то <a href="galary/galary.php">*Тык*</a>
					</p>
				</p>
			</div>

			<div class="row">
                <?php foreach ($services as $service): ?>
                    <div class="price-block">
                        <h4><?= $service['name'] ?></h4>
                        <img src="<?= $service['photo'] ?>" alt="Короткая стрижка" height="350px">
                        <span class="price-tag"><?= $service['price'] ?> руб.</span>
                    </div>
                <?php endforeach; ?>
			</div>


		</div>
	</section>

	<section class="scheme">
		<div class="container">
			<div class="filial">
				<p id="p3">
					<h1>Карта филиалов</h1>
				</p>
				<img src="img/sheme/bg-sheme.png" width="1080" height="650">
				<p style="font-family: 'ProximaNova_bold', sans-serif; font-size: 25px;">Новый филиал откроется через</p>
			</div>
			<div id="timer"></div>
    		<script src="script.js"></script>
		</div>
	</section>
	<?php include "foot-block/foot.php" ?>
</body>
</html>