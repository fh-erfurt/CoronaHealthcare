
<? if (isset($error)) : ?>
    <div class="error">
        <?=$error?>
    </div>
<? endif; ?>


<form action="<?=$_SERVER['PHP_SELF'].'?c=login&a=login';?>" method="post">
    <div class="loginForm">
    <h2>Login</h2>
    <label for="loginName"></label>
    <input type="text" name="validationEmail" id="loginName" placeholder="Ihre Emailadresse..." value="<?=$_POST['validationEmail'] ?? ''?>">
    <br><br>
    <label for="loginPassword"></label>
    <input type="password" name="validationPassword" id="loginPassword" placeholder="Passwort">
    <br><br>
    
    <p>
    <input type="checkbox" name="rememberMe" id="rememberMe"
    <?=isset($_POST['rememberMe']) ? 'checked' : ''?>>
    <label for="rememberMe">angemeldet bleiben?</label>
    
    <a class="darklink" href="<?=$_SERVER['SCRIPT_NAME']?>?c=login&a=register">Noch kein Konto?</a></p>
    <input id="submitButton" type="submit" name="submitLogin" value="Anmelden">    
    </div>
    <div class="clear"></div>
</form>



<script>
window.onload=function(){
    document.getElementById("submitButton").disabled = true;
    var button = document.getElementById('submitButton');
    button.title = 'Bitte geben sie überall ihre Informationen ein, bevor sie das Formular absenden';
    document.getElementById("loginName").onkeyup = function() { checkEnableButton(); }
    document.getElementById("loginPassword").onkeyup = function() { checkEnableButton(); }
}

function checkEnableButton() {
    if(document.getElementById("loginName").value==="" || document.getElementById("loginPassword").value==="")
       {
           document.getElementById('submitButton').disabled = true; 
           var button = document.getElementById('submitButton');
           button.title = '';
       } else { 
           document.getElementById('submitButton').disabled = false;
       }
}
</script>