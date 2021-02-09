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
                <p> Anzahl der Produkte: <br><?= $amountOfFilteredProducts ?> von <?= $amountOfAllProducts ?></p>
            
            Kategorie <br>
            Preis <br>
            Bewertung <br>
        </div>



        <?php foreach ($products as $key => $value) : ?>
            <div class="column">
                <div class="product-card">
                <a style="height: 100%; display:block;" href="index.php?c=shop&a=product&productID=<?=$products[$key]['id']?>"></a>
                <?php if($products[$key]['picturepath'] != 'Kein Bild angegeben'):  ?>
                    <img src="assets/<?=$products[$key]['picturepath']?>">
                <?php else : ?>
                    <img src="assets/Logo.png">
                <?php endif; ?>
                <hr>

                    Produkt: <?= $products[$key]['name']; ?> <br>
                    Preis: <?= $products[$key]['price']; ?> € <br>
                    <!-- Beschreibung: <?= $products[$key]['description']; ?> <br> -->
                </div>
            </div>
<?php endforeach; ?>



</body>

</html>