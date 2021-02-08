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
                    Produkt: <?= $products[$key]['name']; ?> <br>
                    Preis: <?= $products[$key]['price']; ?> € <br>
                    Beschreibung: <?= $products[$key]['description']; ?> <br>
                </div>
            </div>
<?php endforeach; ?>



</body>

</html>