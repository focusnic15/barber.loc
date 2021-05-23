<!-- Онлайн-запись -->
<?php require $_SERVER['DOCUMENT_ROOT'].'/php/queries/special.php'; ?>
<?php require $_SERVER['DOCUMENT_ROOT'].'/php/queries/services-form.php';?>
<?php require $_SERVER['DOCUMENT_ROOT'].'/php/insert/request.php';?>

<style>
    .dropdown {
        display: inline-block;
        position: relative;
        box-sizing: border-box;
    }
    .dropdown * {
        box-sizing: border-box;
    }
    .dropdown-link {
        white-space: nowrap;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px 10px;
    }
    .dropdown-link a {
        display: inline-block;
        width: 100%;
    }
    .dropdown-item {
        white-space: nowrap;
        cursor: pointer;
        padding: 5px 10px;
        border-bottom: 1px solid #ddd;
    }
    .dropdown-item:last-of-type {
        border-bottom: 0;
    }
    .dropdown-menu {
        background: #ffffff;
        border-radius: 4px;
        padding: 0;
        list-style: none;
        margin-top: -1px;
        margin-bottom: 0;
        border: 1px solid #ddd;
        position: absolute;
        top: calc(100% + 10px);
        z-index: 100;
        visibility: hidden;
        opacity: 0;
        transition: all .5s;
    }
    .dropdown.open > .dropdown-menu {
        opacity: 1;
        top: calc(100% + 5px);
        visibility: visible;
        transition: all .5s;
    }

    button {
 		width: 150px;
  		height: 30px;
  		text-decoration: none;
  		padding-top: 5px;
  		color: rgb(68.865, 255, 41);
  		text-align: center;
  		line-height: 20px;
  		display: block;
  		margin: 20px auto;
 		font: normal 17px arial;
	}

	button:not(.active) {
  		box-shadow: inset 0 1px 1px rgba(43.406, 153, 27, 0.8), inset 0 -1px 0px rgba(77.562, 255, 51, 0.2), 0 9px 16px 0 rgba(0, 0, 0, 0.3), 0 4px 3px 0 rgba(0, 0, 0, 0.3), 0 0 0 1px #150a1e;
 		background-image: linear-gradient(rgb(0, 120, 29.25), rgb(40.333, 80, 0));
  		text-shadow: 0 0 21px rgba(223, 206, 228, 0.5), 0 -1px 0 rgb(16.719, 95, 5);
	}

	button:not(.active):hover,
	button:not(.active):focus {
  		transition: color 200ms linear, text-shadow 500ms linear;
  		color: #fff;
  		text-shadow: 0 0 21px rgba(223, 206, 228, 0.5), 0 0 10px rgba(223, 206, 228, 0.4), 0 0 2px rgb(26.562, 204, 0);
	}
	button:not(:hover) {
    	transition: 0.6s;
	}

</style>

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
				<div class="widget-content-step">
					<div class="widget-content-step-name">
						<div class="widget-content-step-name-tru">
							<form action="" method="POST">
                                <span>Мастер</span>
                                <div class="dropdown">
                                    <input id="special" type="hidden" name="special">
                                    <div class="dropdown-link">
                                        <a href="javascript:void(0)">Мастер</a>
                                    </div>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($specials as $special): ?>
                                            <li class="dropdown-item" data-id="<?= $special['id_special'] ?>"><?= $special['name'] . " " . $special['surname'] ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <p></p>
								<span>Услуга</span>
								<div class="dropdown">
									<input id="service_category" type="hidden" name="service_category">
									<div class="dropdown-link">
										<a href="javascript:void(0)">Услуга</a>
									</div>
									<ul class="dropdown-menu">
										<?php foreach ($services_form as $service): ?>
											<li class="dropdown-item" data-id="<?= $service['id_service']?>"><?= $service['name'] . " " . $service['price'] ?></li>
										<?php endforeach; ?>
									</ul>
								</div>
								<p><label>Имя клиента</label> <input type="text" name="userName"></p>
								<p><label>Номер телефона</label> <input type="tel" name="userPhone"></p>
                                <p><label for="date">Выберите дату</label> <input id="datetime" type="datetime-local" name="date"></p>
								<button>Записаться</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        let links = document.querySelectorAll('.dropdown-link');
        links.forEach((item) => {
            item.addEventListener("click", (e) => {
                e.target.parentElement.parentElement.classList.toggle("open");
            });
        });

        let dropdownItems = document.querySelectorAll('.dropdown-item');
        dropdownItems.forEach((item) => {
            item.addEventListener("click", (e) => {
                let clickItem = e.target;
                let dropdownParent = clickItem.parentElement.parentElement;

                dropdownParent.classList.remove("open");

                dropdownParent.querySelector('input').value = clickItem.dataset.id;
                dropdownParent.querySelector('.dropdown-link a').innerText = clickItem.innerText;
            });
        });
    });
</script>