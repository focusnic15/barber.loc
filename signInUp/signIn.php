<!-- Подключить запрос на добавление в БД пользователь (user) -->
<!-- Авторизация -->
<?php
session_start();
?>

<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<div class="overlay">
	<div class="widget">
		<div class="widget-header">
			<div class="widget-title">
				<div class="widget-title-name">
					<span class="widget-span-name">Барбершоп Leviafan</span>
				</div>
			</div>
		</div>
		<div class="widget-pad" style="height: 846px; width: 600px;">
			<div class="widget-logo">
				<div class="widget-logo-img">
					<a href="/"><img src="../head-block/img/logo.png"></a>
				</div>
			</div>
			<div class="widget-content">
				<form method="POST">
					<label>Логин</label>
					<input type="text" name="userLogin">
					<label>Пароль</label>
					<input type="password" name="userPass">
					<button>Авторизироваться</button>
					<p>
						У вас нет аккаунта? - <a href="signUp.php">зарегестрируйтесь</a>
					</p>
					<?php
						if (isset($_SESSION['message'])) {
						 	echo '<p class = "msg"> . $_SESSION['message'] . </p>';
						}
						unset($_SESSION['message']);
					?>
				</form>
			</div>
		</div>
	</div>
</div>