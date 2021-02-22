<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>

<body>
    <div class="profile">
        <div class="profile-overview">
            <h2>Profilübersicht</h2>
            <p>Vorname : <?= $userFirstname ?></p>
            <p>Nachname : <?= $userLastname ?></p>
            <p>Emailadresse : <?= $userEmail ?></p>
            <p>Telefonnummer : <?= $userPhone ?></p>
            <div class="profile-form">
                <form action="index.php?c=pages&a=editProfile" method="post">
                    <button>Profildaten bearbeiten</button>
                </form>
                <form action="index.php?c=pages&a=changePassword" method="post">
                    <button>Passwort ändern</button>
                </form>
            </div>
        </div>


        <div class="order-history">
            <h2>Bestellverlauf</h2>
            <?php foreach ($orders as $key => $order) : ?>
                <div class="one-order">
                    <div class="order-border">
                    <p>Bestellnummer: <?= $order['id'] ?> </p>
                    <p>Gesamtpreis: <?= $order['fullprice'] ?> € </p>
                    <p>Zahlungsart: <?= $order['paymethod'] ?> </p>
                    <p>Bestellt am: <?= date("d.m.Y", strtotime($order['createdAt'])) ?> </p>
                    <p>Status: <?= $order['status'] ?> </p>
                    <br>
                    <p>Bestellte Produkte:</p>

                    <p>  <?php foreach ($order['mappings'] as $key => $orderProduct) : ?>
                            - Produktnummer: <?= getProductname($orderProduct['product_id']) ?> <br>
                        <?php endforeach; ?></p>
                </div></div>
            <?php endforeach; ?>
        </div>

</body>

</html>