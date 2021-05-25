<?php require $_SERVER['DOCUMENT_ROOT'].'/php/queries/gallary.php';?>

<style type="text/css">
	#pagingControls {
		padding-left: 150px;
		font-weight:bold;
	}
	#pagingControls ul {
		display:inline;
		padding-left:0.5em;
	}
	#pagingControls li {
		display:inline;
		padding:0 0.5em;
		background-color: white;
		padding: 5px;
		margin:5px;
	}

	.enabled{
		color: red;
	}

	.z {
		width: 100%;
  		margin-left: 12%;
  		display: inline-block;
	}

	#content {
		text-indent:20px;
		text-align:justify;
	}
</style>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script src="../jquery.min.js"></script>
	<script src="../imtech_pager.js"></script>
	<title>Leviafan</title>
</head>

<body>
<?php include "../head-block/head.php" ?>
<section class="price">
	<div class="container">
		<div class="section-header section-header-light">
			<h2>Галерея</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="galary">
					<div id="pagingControls"></div>
						<?php 
							$res_data = $mysqli->query("SELECT * FROM `gallary`");
							echo '<div id="content" style="margin-top: 15px;display: -ms-flexbox;
  display: flex; ">';
							while($row = mysqli_fetch_array($res_data)){
								echo '<div class="z">';
								echo '<img src =" ' . $row['photo'] . '" height="430px">';
								echo '</div>';

							}
						?>
						<script type="text/javascript">
							var pager = new Imtech.Pager();
							$(document).ready(function() {
								// кол-во выводимых параграфов () или div )
								// на одной странице
								pager.paragraphsPerPage = 3;
								// основной контейнер
								pager.pagingContainer = $('#content');
								// обозначаем требуемый блок ('div.z')
								pager.paragraphs = $('div.z', pager.pagingContainer);
								pager.showPage(1);
							});
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>