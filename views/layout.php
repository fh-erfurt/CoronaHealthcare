<html>

<head>
	<title>CoronaHealthcare</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/styles/style.css">
	<?php if (isset($css) && is_array($css)) : ?>
		<?php foreach ($css as $index => $file) : ?>
			<link rel="stylesheet" type="text/css" href="assets/styles/<?= $file ?>.css">
		<?php endforeach; ?>
	<?php endif; ?>
</head>

<header>
	<div class="logo"><a href="index.php?a=start"><img src="assets/Logo.png" alt="Logo"></a></div>
	<div class="center">
		<a href="index.php?a=start">
			<h1>CoronaHealthcare</h1>
		</a>
		<div class="search"><input type="text" placeholder="Suche..">
		<button type="submit"><i class="fa fa-search"></i></button></div>
	</div>

	<div class="login"><a href="index.php?a=profile">Anmelden</a></div>
	<div class="symbol">
		<a href="index.php?a=profile"><i class="fa fa-user"></i></a>
		<a href="index.php?a=shoppingcart"><i class="fa fa-shopping-cart"> </i></a>
	</div>
</header>

<nav>
	<div class="shop" id="navigation">
		<div class="dropdown">
			<button class="dropbtn">Shop
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="index.php?page=Schutzmasken">Schutzmasken</a>
				<a href="index.php?page=Desinfektionsmittel">Desinfektionsmittel</a>
				<a href="index.php?page=Hygienepapier">Hygienepapier</a>
				<a href="index.php?page=Reinigungsmittel">Reinigungsmittel</a>
				<a href="index.php?page=Hautreinigung">Hautreinigung</a>
			</div>
		</div>
	</div>
	<button class="buttonInformation"><a href="index.php?a=info">Information</a></button>
	<button class="buttonUeberUns"><a href="index.php?a=about">Über uns</a></button>
</nav>
<body>
	<div class="content-wrap">
		<main>
			<?php echo $body ?>
		</main>
	</div>
	<footer>
		&copy; Team CoronaHealthcare || <a href="index.php?a=help"> FAQ </a> || <a href="index.php?a=impressum"> Impressum</a>
	</footer>
</body>

</html>