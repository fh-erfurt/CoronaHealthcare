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
            <form action="index.php?c=shop&a=shop" method="post">
                 <p>Anzahl der Produkte: <br><?= $amountOfFilteredProducts ?> von <?= $amountOfAllProducts ?></p>
                 <p> Aktuelle Kategorie:</p>
                <select name="categoryId" id="categoryId">
                    <option value="">Alle</option>
                    <?php foreach($categories as $category) : ?>
                        <option value="<?=$category['id']?>"
                          <?php
                          if(isset($currentCategory))
                          {
                            if ($category['name'] == $currentCategory)
                            {
                                echo "selected='selected'";
                            }
                          }
                          ?>
                            >
                            <?=$category['name']?>
                        </option>
                    <?php endforeach; ?>
                         
                </select>

                <p>Preis bis <?=$_POST['priceMax'] ?? $highestPrice?> €
                <input name="priceMax" type="range"  min="<?=$lowestPrice?>" max="<?=$highestPrice?>" value="<?=htmlspecialchars($_POST['priceMax'] ?? $highestPrice)?>" class="slider"></p>
                <p>Preis ab <?=$_POST['priceMin'] ?? $lowestPrice?> €
                <input name="priceMin" type="range"  min="<?=$lowestPrice?>" max="<?=$highestPrice?>" value="<?=htmlspecialchars($_POST['priceMin'] ?? $lowestPrice)?>" class="slider"></p>
                <input value="Filtern" type="submit"></input>
            </form>
        </div>


        <div class = "products">
        <?php foreach ($products as $key => $value) : ?>
            <div class="columnShop">
                <div class="productCard">
                <a href="index.php?c=shop&a=product&productID=<?=$products[$key]['id']?>">
                <?php if($products[$key]['picturepath'] != 'Kein Bild angegeben'):  ?>
                    <img class="img" src="assets/<?=$products[$key]['picturepath']?>">
                <?php else : ?>
                    <img class="img" src="assets/Logo.png">
                <?php endif; ?>
                
                <form action="index.php?c=shop&a=addProduct" method="post">
                <input type="hidden" name="productID" value="<?=$products[$key]['id']?>">
                
                <p><?= $products[$key]['name']; ?> </p>
                <p>    <?= $products[$key]['price']; ?> € </p>
                <button>Zum Warenkorb hinzufügen</button>
                </form>

                
                    <!-- Beschreibung: <?= $products[$key]['description']; ?> <br> --></a>
                </div>
            </div>
<?php endforeach; ?>
</div>

</body>

</html>