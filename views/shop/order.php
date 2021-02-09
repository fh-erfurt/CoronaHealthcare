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
    Gesamtkosten: <?=$fullPrice ?>
    <hr><hr>
    <br>
    Zahlungsart wählen   
    <select name="paymentMethod" id="paymentMethod">
        <option value="Null">Bitte wählen..</option>
        <option value="Paypal">Paypal</option>
        <option value="SEPA">SEPA</option>
        <option value="Bitcoin">Bitcoin</option>
    </select>
    <br><br>

    <input type="submit" name="submitOrder" value="Jetzt kostenpflichtig bestellen">
</form>