<h1>Profildaten bearbeiten</h1>

<?php if($success === true) : ?>
    <div class="success-message">
        Ihre Änderungen wurden gespeichert. Sie werden in Kürze zu ihrer Profilübersicht weitergeleitet.
        <meta http-equiv="refresh" content="5; URL=index.php?c=pages&a=profile">
    </div>
<?php else : ?>
    <div class="form-wrapper">
        <?php if(isset($errors) && count($errors) > 0) : ?>
            <div class="error-message">
                
                    <?php foreach($errors as $key => $value) : ?>
                        <p><?=$value?></p>
                    <?php endforeach; ?>
                
            </div>
        <?php endif; ?>
        <form id="editProfile" method="post">
        <div class="data"> 
        <div class="profiledata">
            <h3>Profildaten</h3>
            <p><label for="email">E-Mail Adresse*</label></p>
            <p><input id="email" type="text" name="email" value="<?= htmlspecialchars($_POST['email'] ?? $_SESSION['user']['email'] ?? '')?>"/></p>
            
            <p><label for="firstname">Vorname*</label></p>
            <p><input id="firstname" type="text" name="firstname" value="<?=htmlspecialchars($_POST['firstname'] ?? $_SESSION['user']['firstname'] ?? '')?>"/></p>
            
            <p><label for="lastname">Nachname*</label></p>
            <p><input id="lastname" type="text" name="lastname"  value="<?=htmlspecialchars($_POST['lastname'] ?? $_SESSION['user']['lastname'] ?? '')?>"/></p>
            <p>
            <p><label for="phone">Telefonnummer</label></p>
            <p><input id="phone" type="text" name="phone" placeholder="Telefonnummer(optional)..." value="<?=htmlspecialchars($_POST['phone'] ?? $_SESSION['user']['phone']  ?? '')?>"/></p>
            </div>
            <div class="adressdata">           
            <h3>Adressdaten</h3>
            <p>
            <label for="city">Stadtname</label></p>
            <p><input id="city" type="text" name="city" value="<?=htmlspecialchars($_POST['city'] ?? $address['city']  ?? '')?>"/></p>
            <p><label for="street">Straßenname</label></p>
            <p><input id="street" type="text" name="street" value="<?=htmlspecialchars($_POST['street'] ?? $address['street']   ?? '')?>"/></p>
            <p><label for="number">Hausnummer</label></p>
            <p><input id="number" type="text" name="number" value="<?=htmlspecialchars($_POST['number'] ?? $address['number']   ?? '')?>"/></p>
            <p><label for="zip">Postleitzahl</label></p>
            <p><input id="zip" type="text" name="zip" value="<?=htmlspecialchars($_POST['zip'] ?? $address['zip']   ?? '')?>"/></p>
            
            
            </div></div>
            <input type="submit"  id="submitButton" name="submit" value="Speichern" />
        </form>
    </div>
<?php endif; ?>


<script>
window.onload=function(){
    document.getElementById("submitButton").disabled = true;
    var button = document.getElementById('submitButton');
    button.title = 'Bitte geben sie überall ihre Informationen ein, bevor sie das Formular absenden';
    document.getElementById("email").onkeyup = function() { checkEnableButton(); }
    document.getElementById("firstname").onkeyup = function() { checkEnableButton(); }
    document.getElementById("lastname").onkeyup = function() { checkEnableButton(); }
    document.getElementById("phone").onkeyup = function() { checkEnableButton(); }
    document.getElementById("city").onkeyup = function() { checkEnableButton(); }
    document.getElementById("street").onkeyup = function() { checkEnableButton(); }
    document.getElementById("number").onkeyup = function() { checkEnableButton(); }
    document.getElementById("zip").onkeyup = function() { checkEnableButton(); }
}
function checkEnableButton() {
	 if(document.getElementById("email").value===""
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