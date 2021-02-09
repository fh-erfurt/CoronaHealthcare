<html>
<!DOCTYPE html>
<html>

<head>
    <title>Shop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
        <div class="sidebar">
            <p>
                <?php if (isset($currentCategory)) :  ?>
                    Aktuelle Kategorie: <br> <?= $currentCategory ?><br>
                <?php endif; ?></p>
                 Anzahl der Produkte: <br><?= $amountOfFilteredProducts ?> von <?= $amountOfAllProducts ?>
                <p> Kategorie </p>
                <p>Preis
            <input type="range" min="1" max="100" value="50" class="slider"></p>
            <button>Filtern</button>
        </div>



        <?php foreach ($products as $key => $value) : ?>
            <div class="column">
                <div class="product_card">
                <a href="index.php?c=shop&a=product&productID=<?=$products[$key]['id']?>">
                <?php if($products[$key]['picturepath'] != 'Kein Bild angegeben'):  ?>
                    <img src="assets/<?=$products[$key]['picturepath']?>">
                <?php else : ?>
                    <img src="assets/Logo.png">
                <?php endif; ?>
                
                <form action="index.php?c=shop&a=addProduct" method="post">
                <input type="hidden" name="productID" value="<?=$products[$key]['id']?>">
                
                <p><?= $products[$key]['name']; ?> </p>
                <p>   Preis: <?= $products[$key]['price']; ?> € </p>
                <button>Zum Warenkorb hinzufügen</button>
                </form>

                
                    <!-- Beschreibung: <?= $products[$key]['description']; ?> <br> --></a>
                </div>
            </div>
<?php endforeach; ?>



</body>

</html>