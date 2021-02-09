<?php if($productPicture != 'Kein Bild angegeben'):  ?>
                    <img src="assets/<?=$productPicture?>">
                <?php else : ?>
                    <img src="assets/Logo.png">
                <?php endif; ?>
<br>
    <?=$productName?> 
<br>
    Preis: <?=$productPrice?> 
<br>
    <?=$productDescription?>
    <br>
    <form action="index.php?c=shop&a=addProduct" method="post">
    <input type="hidden" name="productID" value="<?=$productID?>"></div>
    <button>Zum Warenkorb hinzufügen</button>
    </form>
