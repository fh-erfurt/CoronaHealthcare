<br>
<b>Ihre ausgewählten Produkte</b>
<hr>
<form action="<?=$_SERVER['PHP_SELF'].'?c=shop&a=finishOrder'?>" method="post">
    <?php foreach ($shoppingcart as $key => $product) : ?>
        Produktbezeichnung: <?= $product['name'] ?> <br>
        Preis: <?= $product['price'] ?> €
        <hr>
    <?php endforeach ?>
    <hr>
    Gesamtkosten: <?=number_format($fullPrice, 2, ',', '') ?> €
    <input type="hidden" id="fullprice" name="fullprice" value="<?=$fullPrice?>">
    <hr><hr>
    <br>
    Zahlungsart wählen   
    <select name="paymethod" id="paymethod">
        <option value="Rechnung">Rechnung</option>
        <option value="Paypal">Paypal</option>
        <option value="SEPA">SEPA</option>
        <option value="Bitcoin">Bitcoin</option>
    </select>
    <br><br>

    <input type="submit" name="submitOrder" value="Jetzt kostenpflichtig bestellen">
</form>