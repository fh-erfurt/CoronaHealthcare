<html>
<!DOCTYPE html>
<html lang="de">

<head>
</head>
<body>
<div class="product">
<div class="product-left">
<?php if($productPicture != 'Kein Bild angegeben'):  ?>
                    <img src="assets/<?=$productPicture?>">
                <?php else : ?>
                    <img src="assets/Logo.png">
                <?php endif; ?>
                </div>

 
<div class = "product-right">
    <h3><?=$productName?> </h3>

    <p>Preis: <?=$productPrice?> €</p>

    <p><?=$productDescription?></p>
    
    <form action="index.php?c=shop&a=addProduct" method="post">
    <input type="hidden" name="productID" value="<?=$productID?>">
    <button class="add-to-cart">Zum Warenkorb hinzufügen</button></div>
    </form>
    </div>
    </body>
    </html>