
<? if (isset($error)) : ?>
    <div>
        <?=$error?>
    </div>
<? endif; ?>

LOGIN
<form action="<?=$_SERVER['PHP_SELF'].'?c=login&a=login';?>" method="post">
    <label for="loginName">Email</label>
    <input type="text" name="validationEmail" id="loginName" placeholder="Ihre Emailadresse..."
    <?=isset($_POST['validationEmail']) ? 'value="'.htmlspecialchars($_POST['validationEmail']).'"' : ''?>>
    <br><br>
    <label for="loginPassword">Passwort</label>
    <input type="password" name="validationPassword" id="loginPassword" placeholder="Passwort">
    <br><br>
    <input type="submit" name="submitLogin" value="Anmelden">
    
    <input type="checkbox" name="rememberMe" id="check"
    <?=isset($_POST['rememberMe']) ? 'checked' : ''?>>
    <label for="check">angemeldet bleiben?</label>
    <br><br>
    <a class="darklink" href="<?=$_SERVER['SCRIPT_NAME']?>?c=login&a=register">Noch kein Konto?</a>
    
    <div class="clear"></div>
</form>