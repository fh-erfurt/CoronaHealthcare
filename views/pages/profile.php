<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mein Profil</title>
</head>
<body>
<div>
    <h1>Profilübersicht</h1>
    <p>Vorname : <?=$userFirstname?></p>
    <p>Nachname : <?=$userLastname?></p>
    <p>Emailadresse : <?=$userEmail?></p>
    <p>Telefonnummer : <?=$userPhone?></p>
    <br />
    <br>
</div>
<div>
    <h1>Bestellverlauf</h1>
        <?php foreach ($orders as $key => $order): ?>
            <div class="column"> 
                <div class="product_card">
                    Bestellnummer: <?=$order['id']?> <br>
                    Bestellt am: <?=$order['createdAt']?> <br>
                    Status: <?=$order['status']?> <br>
                    <br>
                    Bestellte Produkte
                    <br> <hr>
                    <?php foreach ($order['mappings'] as $key => $orderProduct) : ?> 
                        Produktnummer: <?=$orderProduct['product_id']?> <br>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
 </div>       
    
</body>
</html>