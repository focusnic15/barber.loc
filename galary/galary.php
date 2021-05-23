<?php require $_SERVER['DOCUMENT_ROOT'].'/php/queries/gallary.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<title>Leviafan</title>
</head>

<body>
<?php include "../head-block/head.php" ?>
<section class="price">
	<div class="container">
		<div class="section-header section-header-light">
			<h2>Галерея</h2>
		</div>
		<div class="row">
			<div class="galary">
				<?php foreach ($gallarys as $gallary): ?>
                        <img src="<?= $gallary['photo'] ?>" height="430px">
                <?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<?php include_once "../foot-block/foot.php" ?>
</body>
</html>