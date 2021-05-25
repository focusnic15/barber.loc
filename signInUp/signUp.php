<?php 
session_start();
require  $_SERVER['DOCUMENT_ROOT'] . '/php/users/registr.php'; ?>
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
		<div class="widget-pad" style="height: 900px; width: 600px;">
			<div class="widget-logo">
				<div class="widget-logo-img">
					<a href="/"><img src="../head-block/img/logo.png"></a>
				</div>
			</div>
			<div class="widget-content">
				<div class="widget-form">
				<form method="POST">
					<label>Имя</label>
					<input required="" type="text" name="userName" placeholder="Введите имя">
					<label>Номер телефона</label>
					<input required="" type="tel" name="userPhone"placeholder="+7 (123) 456-78-91" pattern="[\+]\d{1}\s[\(]\d{3}[\)]\s\d{3}[\-]\d{2}[\-]\d{2}">
					<label>Логин</label>
					<input required="" type="text" name="userLogin">
					<label>Пароль</label>
					<input required="" type="password" name="userPass" placeholder="Введите пароль">
					<label>Подтвердите пароль</label>
					<input required="" type="password" name="userPass2" placeholder="Подтвердите пароль">
					<button>Зарегестрироваться</button>
					<p>
						У вас есть аккаунт? - <a href="signIn.php">авторизируйтесь</a>
					</p>
					<?php if (isset($_SESSION['message'])): ?>
						<p class="msg"> <?= $_SESSION['message'] ?></p>
                    <?php endif; ?>
                    <?php unset($_SESSION['message']); ?>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>