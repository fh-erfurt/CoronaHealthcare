<html>
<!DOCTYPE html>
<html lang="de">

<head>
    <title>Shoppingcart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>
<body>
    <div class="shoppingcart">
<h3>Ihr Warenkorb</h3>
<div class="grid-container">
    <?php if (!empty($_SESSION['shoppingcart'])): ?>

            <?php foreach ($shoppingcart as $key => $product) : ?>
                <div class="itemList">
        <img class="img" src="assets/Logo.png">
            <p>Produktbezeichnung: <?= $product['name'] ?></p>
            <p>Preis: <?= $product['price'] ?> €</p>
            <form action="index.php?c=shop&a=deleteProduct" method="post">
            <input type="hidden" name="productID" value="<?=$key?>">
            <button class="cancle"><i class="fa fa-trash"></i></button></div>
            </form>
             <?php endforeach ?>
             </div>
    <p>Gesamtkosten: <?=number_format($fullPrice, 2, ',', '') ?> €</p>
    <form action="index.php?c=shop&a=order" method="post">
        <input type="submit" class="submitButton" value="Zum Bestellvorgang">
    </form>

    <?php else: ?>
    <p>Ihr Warenkorb ist leer.
    Das kann <a class="darklink" href="index.php?c=shop&a=shop"><b>HIER</b></a> geändert werden.</p>
    <? endif; ?>
</p>
</div></body>
</html>