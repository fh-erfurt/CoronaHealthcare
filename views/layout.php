<html>
	<head>
		<title>CoronaHealthcare</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
		<?php if(isset($css) && is_array($css)) : ?>
			<?php foreach($css as $index => $file) : ?>
			<link rel="stylesheet" type="text/css" href="assets/css/<?=$file?>.css">
			<?php endforeach; ?>
		<?php endif; ?>
	</head>
	<header>
        <h1 style="background-color:grey;">Willkommen bei Corona Healthcare</h1>
        <nav>
            <a href="index.php?a=index">Startseite</a> |
			<a href="index.php?a=shop">Shop</a> |
			<a href="index.php?a=kontakt">Kontakt</a> |
			<a href="index.php?a=profile">Mein Profil</a> |
			<a href="index.php?a=about">Über uns</a>
        </nav>
    </header>
	<body>
		<div class="content-wrap">
			<main>
				<?php echo $body ?>
			</main>
		</div>
		<footer>
			&copy; Team CoronaHealthcare || <a href="index.php?a=impressum">Impressum</a>
		</footer>
	</body>
</html>