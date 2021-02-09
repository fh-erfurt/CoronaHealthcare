<h1>Login</h1>
<? if (isset($error)) : ?>
    <div class="error">
        <?=$error?>
    </div>
<? endif; ?>


<form action="<?=$_SERVER['PHP_SELF'].'?c=login&a=login';?>" method="post">
    <div class="login">
    <label for="loginName"></label>
    <input type="text" name="validationEmail" id="loginName" placeholder="Ihre Emailadresse..."
    <?=isset($_POST['validationEmail']) ? 'value="'.htmlspecialchars($_POST['validationEmail']).'"' : ''?>>
    <br><br>
    <label for="loginPassword"></label>
    <input type="password" name="validationPassword" id="loginPassword" placeholder="Passwort">
    <br><br>
    
    <p>
    <input type="checkbox" name="rememberMe" id="check"
    <?=isset($_POST['rememberMe']) ? 'checked' : ''?>>
    <label for="check">angemeldet bleiben?</label>
    
    <a class="darklink" href="<?=$_SERVER['SCRIPT_NAME']?>?c=login&a=register">Noch kein Konto?</a></p>
    <input type="submit" name="submitLogin" value="Anmelden">    
    </div>
    <div class="clear"></div>
</form>