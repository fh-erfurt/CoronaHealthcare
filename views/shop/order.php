<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>

<body>
    
        <h2>Ihre Bestellung</h2>
        <div class="order">
        <div class="order-list">
        <h3>Artikel</h3>
            <form action="<?= $_SERVER['PHP_SELF'] . '?c=shop&a=finishOrder' ?>" method="post">
            
                <?php foreach ($shoppingcart as $key => $product) : ?>
                    <div class="order-list-border">
                    <p>Produktbezeichnung: <?= $product['name'] ?></p>
                    <p>Preis: <?= $product['price'] ?> €</p></div>
                <?php endforeach ?>
        </div>


        <div class="order-info">
            <p>Gesamtkosten: <?= number_format($fullPrice, 2, ',', '') ?> €
                <input type="hidden" id="fullprice" name="fullprice" value="<?= $fullPrice ?>">
            </p>


            <p>Zahlungsart wählen:
            
                <div class="pay-select">
            <select class="paymethod "name="paymethod" id="paymethod">
                <option value="Rechnung">Rechnung</option>
                <option value="Paypal">Paypal</option>
                <option value="SEPA">SEPA</option>
                <option value="Bitcoin">Bitcoin</option>
            </select></div></p>
        


        <button type="submit" name="submitOrder"> Jetzt kostenpflichtig bestellen</button>
        </form></div>
    </div>
</body>

</html>