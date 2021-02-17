<html>

<head>
	<title>CoronaHealthcare</title>
	<script src="https://kit.fontawesome.com/7627145794.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/styles/style.css">
	<?php if (isset($css) && is_array($css)) : ?>
		<?php foreach ($css as $index => $file) : ?>
			<link rel="stylesheet" type="text/css" href="assets/styles/<?= $file ?>.css">
		<?php endforeach; ?>
	<?php endif; ?>
</head>

<header>
	<div class="logo"><a href="index.php?a=start"><img src="assets/Logo.png" width="150px" height="150px" alt="Logo"></a></div>
	<div class="center">
		<a href="index.php?a=start">
			<h1>CoronaHealthcare</h1>
		</a>
		<form action="index.php?c=shop&a=shop" method="post">
			<div class="search"><input type="text" name="name" placeholder="Suche.." value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
				<button type="submit"><i class="fa fa-search"></i></button>
			</div>
		</form>
	</div>

	<div class="login">
		<? if(isset($_SESSION['user'])) : ?>
			<p>Willkommen <?= $_SESSION['user']['firstname'] ?>!
				<a onclick="return confirm('Sind sie sicher, dass Sie sich abmelden möchten?')" href="index.php?c=login&a=logout">| Abmelden</a>
			</p>
			<? else: ?>
			<a href="index.php?c=login&a=login">Anmelden |</a>
			<a href="index.php?c=login&a=register">Registrieren</a>
			<? endif; ?>
		</div>
		<div class="symbol">
			<? if(!isset($_SESSION['user'])) : ?>
			<a href="index.php?c=login&a=login"><i class="fa fa-user"></i></a>
			<? else: ?>
			<a href="index.php?c=pages&a=profile"><i class="fa fa-user"></i></a>
			<? endif; ?>
			<a href="index.php?c=shop&a=shoppingcart"><i class="fa fa-shopping-cart"> </i></a>
			<a> <i title="Produkte im Warenkorb" style="color:white;"><?= isset($_SESSION['shoppingcart']) ? count($_SESSION['shoppingcart']) : '0' ?></i></a>
		</div>
</header>

<nav>

	<div class="dropdown">
		<button class="dropbtn"><a href="index.php?c=shop&a=shop">Shop</a>
			<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
			<a href="index.php?c=shop&a=shop&categoryId=1">Schutzmasken</a>
			<a href="index.php?c=shop&a=shop&categoryId=2">Desinfektionsmittel</a>
			<a href="index.php?c=shop&a=shop&categoryId=3">Hygienepapier</a>
			<a href="index.php?c=shop&a=shop&categoryId=4">Reinigungsmittel</a>
			<a href="index.php?c=shop&a=shop&categoryId=5">Hautreinigung</a>
		</div>
	</div>
	<button class="buttonInformation"><a href="index.php?a=information">Information</a></button>
	<button class="buttonUeberUns"><a href="index.php?c=pages&a=about">Über uns</a></button>
</nav>


<body>
	<div class="content-wrap">
		<main>
			<?php echo $body ?>
		</main>
	</div>
	<footer>
		<p>&copy; <a href="index.php?a=start">Team CoronaHealthcare</a> || <a href="index.php?a=help"> FAQ </a> || <a href="index.php?a=impressum"> Impressum</a></p>
	</footer>
</body>

</html>