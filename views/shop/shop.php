<html>
<p>
<?php if (isset($currentCategory)):  ?>
    Aktuelle ausgewählte Kategorie: <?= $currentCategory ?><br><br><br>
<?php endif; ?>
Anzahl der Produkte: <?= $amountOfFilteredProducts ?> von <?= $amountOfAllProducts ?>
    <div>
        <ul>
            <?php foreach($products as $key=> $value): ?>
                <li>
                    Produkt: <?= $products[$key]['name']; ?> <br>
                    Preis: <?= $products[$key]['price']; ?> € <br>
                    Beschreibung: <?= $products[$key]['description']; ?> <br>
                </li>
                <hr>
            <?php endforeach; ?>
        </ul>
    </div>
</p>
</html>