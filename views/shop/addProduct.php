<html>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset=UTF-8>
</head>

<body>
    <div class="addProduct">
        <p>
            Das Produkt wurde zu ihrem Warenkorb hinzugefügt!
            Wollen Sie weiter einkaufen oder gleich bestellen?</p>
        <form action="index.php?c=shop&a=shop" method="Post">
            <div class="addProductButton"><button class="toShoppingcart"><a>Weiter einkaufen</a></button></div>
        </form>
        <form action="index.php?c=shop&a=shoppingcart" method="Post">
            <div class="addProductButton"><button class="toShoppingcart"><a>Bestellen</a></button></div>
        </form>
        
    </div>
</body>

</html>