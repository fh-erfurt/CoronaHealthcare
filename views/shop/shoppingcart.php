<!DOCTYPE html>
<html>

<head>
    <title>Shoppingcart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>
<body>
<p>
    Warenkorb
    <hr>
    <?php if (!empty($_SESSION['shoppingcart'])): ?>
    <?php foreach ($shoppingcart as $key => $product) : ?>
        Produktbezeichnung: <?= $product['name'] ?> <br>
        Preis: <?= $product['price'] ?> €
        <form action="index.php?c=shop&a=deleteProduct" method="post">
        <input type="hidden" name="productID" value="<?=$key?>"></div>
        <button>x</button>
        <hr>
    <?php endforeach ?>
    <hr>
    Gesamtkosten: <?=$fullPrice ?>
    <br>
    <a style="color:black;"href="index.php?c=shop&a=order">Zum Bestellvorgang</a>
    <?php else: ?>
    Ihr Warenkorb ist leer.
    Das kann <a class="darklink" href="index.php?c=shop&a=shop"><b>HIER</b></a> geändert werden.
    <? endif; ?>
</p></body>
</html>