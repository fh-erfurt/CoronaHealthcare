<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mein Profil</title>
</head>
<body>
<div class="profile">
    <div class="profile-overview">
    <h2>Profilübersicht</h2>
    <p>Vorname : <?=$userFirstname?></p>
    <p>Nachname : <?=$userLastname?></p>
    <p>Emailadresse : <?=$userEmail?></p>
    <p>Telefonnummer : <?=$userPhone?></p>
    <div class="form-container">
    <form action="index.php?c=pages&a=editProfile" method="post">
        <button>Profildaten bearbeiten</button>
    </form>
    <form action="index.php?c=pages&a=changePassword" method="post">
    <button>Passwort ändern</button>
    </form>
    </div>
</div>
</div>

<div class="order-history">
    <h2>Bestellverlauf</h2>
        <?php foreach ($orders as $key => $order): ?>
            <div class="columnShop"> 
                <div class="productCard">
                    Bestellnummer: <?=$order['id']?> <br>
                    Gesamtpreis: <?=$order['fullprice']?> € <br>
                    Zahlungsart: <?=$order['paymethod']?> <br>
                    Bestellt am: <?=date("d.m.Y", strtotime($order['createdAt']))?> <br>
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