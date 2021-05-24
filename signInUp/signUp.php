<!-- Регистрация -->
<?php
session_start()
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
					<label>Имя</label>
					<input type="text" name="userName" placeholder="Введите имя">
					<label>Номер телефона</label>
					<input type="tel" name="userPhone"placeholder="+7 (123) 456-78-91" pattern="[\+]\d{1}\s[\(]\d{3}[\)]\s\d{3}[\-]\d{2}[\-]\d{2}">
					<label>Логин</label>
					<input type="text" name="userLogin">
					<label>Пароль</label>
					<input type="password" name="userPass" placeholder="Введите пароль">
					<label>Подтвердите пароль</label>
					<input type="password" name="userPass2" placeholder="Подтвердите пароль">
					<button>Войти</button>
					<p>
						У вас есть аккаунт? - <a href="signIn.php">авторизируйтесь</a>
					</p>
					<p class="msg">
						<?php
							if (isset($_SESSION['message'])) {
							 	echo '<p class = "msg"> . $_SESSION['message'] . </p>';
							}
							unset($_SESSION['message']);
						?>
					</p>
				</form>
			</div>
		</div>
	</div>
</div>