
<h1>Registrierung</h1>

<?php if($success === true) : ?>
    <div class="success-message">
        Vielen Dank für ihre Registrierung! Sie werden automatisch zum Login weitergeleitet.
        <meta http-equiv="refresh" content="5; URL=index.php?c=login&a=login">
    </div>
<?php else : ?>
    <div class="form-wrapper">
        <?php if(isset($errors) && count($errors) > 0) : ?>
            <div class="error-message" style="border: 1px dotted red; padding: 15px;">
                <ul>
                    <?php foreach($errors as $key => $value) : ?>
                        <li><?=$value?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form method="post">
            <label for="email">E-Mail Adresse*</label><br /> <? // TODO: infofenster, dass man sich damit anmelden wird // ?>
            <input id="email" type="text" name="email" placeholder="E-Mail Adresse..." value="<?=htmlspecialchars($_POST['email'] ?? '')?>"/><br />

            <label for="password">Passwort*</label><br />
            <input id="password" type="password" name="password" placeholder="Passwort..." /><br />

            <label for="firstname">Vorname*</label><br />
            <input id="firstname" type="text" name="firstname" placeholder="Vorname..." value="<?=htmlspecialchars($_POST['firstname'] ?? '')?>"/><br />

            <label for="lastname">Nachname*</label><br />
            <input id="lastname" type="text" name="lastname" placeholder="Nachname..." value="<?=htmlspecialchars($_POST['lastname'] ?? '')?>"/><br />

            <label for="phone">Telefonnummer</label><br />
            <input id="phone" type="text" name="phone" placeholder="Telefonnummer(optional)..." value="<?=htmlspecialchars($_POST['phone'] ?? '')?>"/><br />

            <br>           
            <h3>Adressdaten</h3>

            <label for="city">Stadtname</label><br />
            <input id="city" type="text" name="city" placeholder="Stadtname.." value="<?=htmlspecialchars($_POST['city'] ?? '')?>"/><br />
            <label for="street">Straßenname</label><br />
            <input id="street" type="text" name="street" placeholder="Straßenname..." value="<?=htmlspecialchars($_POST['street'] ?? '')?>"/><br />
            <label for="number">Hausnummer</label><br />
            <input id="number" type="text" name="number" placeholder="Hausnummer..." value="<?=htmlspecialchars($_POST['number'] ?? '')?>"/><br />
            <label for="zip">Postleitzahl</label><br />
            <input id="zip" type="text" name="zip" placeholder="Postleitzahl..." value="<?=htmlspecialchars($_POST['zip'] ?? '')?>"/><br />
            
            <br />
            <input type="submit" name="submit" value="Konto erstellen" />
        </form>
    </div>
<?php endif; ?>