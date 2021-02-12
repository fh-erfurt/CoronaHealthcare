
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
                
                    <?php foreach($errors as $key => $value) : ?>
                        <p><?=$value?></p>
                    <?php endforeach; ?>
                
            </div>
        <?php endif; ?>
        <form id="register" method="post">
        <div class="data"> 
        <div class="profiledata">
            
            <p><label for="email">E-Mail Adresse*</label> <? // TODO: infofenster, dass man sich damit anmelden wird // ?></p>
            <p><input id="email" onchange="checkEnableButton()" type="text" name="email" placeholder="E-Mail Adresse..." value="<?=htmlspecialchars($_POST['email'] ?? '')?>"/></p>
            
            <p><label for="password">Passwort*</label></p>
            <p><input id="password" onchange="checkEnableButton()" type="password" name="password" placeholder="Passwort..." /></p>
            
            <p><label for="firstname">Vorname*</label></p>
            <p><input id="firstname" onchange="checkEnableButton()" type="text" name="firstname" placeholder="Vorname..." value="<?=htmlspecialchars($_POST['firstname'] ?? '')?>"/></p>
            
            <p><label for="lastname">Nachname*</label></p>
            <p><input id="lastname" onchange="checkEnableButton()" type="text" name="lastname" placeholder="Nachname..." value="<?=htmlspecialchars($_POST['lastname'] ?? '')?>"/></p>
            <p>
            <p><label for="phone">Telefonnummer</label></p>
            <p><input id="phone" onchange="checkEnableButton()" type="text" name="phone" placeholder="Telefonnummer(optional)..." value="<?=htmlspecialchars($_POST['phone'] ?? '')?>"/></p>
            </div>
            <div class="adressdata">           
            <h3>Adressdaten</h3>
            <p>
            <label for="city">Stadtname</label></p>
            <p><input id="city" onchange="checkEnableButton()" type="text" name="city" placeholder="Stadtname.." value="<?=htmlspecialchars($_POST['city'] ?? '')?>"/></p>
            <p><label for="street">Straßenname</label></p>
            <p><input id="street" onchange="checkEnableButton()" type="text" name="street" placeholder="Straßenname..." value="<?=htmlspecialchars($_POST['street'] ?? '')?>"/></p>
            <p><label for="number">Hausnummer</label></p>
            <p><input id="number" onchange="checkEnableButton()" type="text" name="number" placeholder="Hausnummer..." value="<?=htmlspecialchars($_POST['number'] ?? '')?>"/></p>
            <p><label for="zip">Postleitzahl</label></p>
            <p><input id="zip" onchange="checkEnableButton()" type="text" name="zip" placeholder="Postleitzahl..." value="<?=htmlspecialchars($_POST['zip'] ?? '')?>"/></p>
            
            
            </div></div>
            <input type="submit" title="Bitte geben sie überall ihre Informationen ein, bevor sie das Formular absenden" disabled="true"  id="submitButton" name="submit" value="Konto erstellen" />
        </form>
    </div>
<?php endif; ?>


<script>

function checkEnableButton() {
	 if(document.getElementById("email").value===""
        || document.getElementById("password").value===""
        || document.getElementById("firstname").value===""
        || document.getElementById("lastname").value===""
        || document.getElementById("phone").value===""
        || document.getElementById("city").value===""
        || document.getElementById("street").value===""
        || document.getElementById("number").value===""
        || document.getElementById("zip").value==="")     
        { 
            document.getElementById('submitButton').disabled = true; 
            var button = document.getElementById('submitButton');
            button.title = '';
        } else { 
            document.getElementById('submitButton').disabled = false;
        }
    }
</script>