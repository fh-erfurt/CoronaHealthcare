<h1>Passwort ändern</h1>
<?php if(isset($errors) && count($errors) > 0) : ?>
            <div class="error-message">
                
                    <?php foreach($errors as $key => $value) : ?>
                        <p><?=$value?></p>
                    <?php endforeach; ?>
                
            </div>
<?php endif; ?>

<?php if($success === true) : ?>
    <div class="success-message">
        Das Passwort wurde erfolgreich geändert. Sie werden automatisch zur Ihrem Profil weitergeleitet.
        <meta http-equiv="refresh" content="5; URL=index.php?c=pages&a=profile">
    </div>
<?php else : ?>
<form action="<?=$_SERVER['PHP_SELF'].'?c=pages&a=changePassword';?>" method="post">
    <div class="loginForm">
    <label for="oldPassword"></label>
    <input type="password" name="oldPassword" id="oldPassword" placeholder="Ihr altes Passwort" value="<?=$_POST['oldPassword'] ?? ''?>">
    <br><br>
    <label for="newPassword"></label>
    <input type="password" name="newPassword" id="newPassword" placeholder="Neues Passwort">
    <br><br>
    <label for="confirmNewPassword"></label>
    <input type="password" name="confirmNewPassword" id="confirmNewPassword" placeholder="Neues Passwort wiederholen">
    <br><br>
    
    <p>    
    <input id="submitButton" type="submit" name="submitChangePassword" value="Passwort ändern">    
    </div>
</form>
<?php endif; ?>


<script>
window.onload=function(){
    document.getElementById("submitButton").disabled = true;
    var button = document.getElementById('submitButton');
    button.title = 'Bitte geben sie überall ihre Informationen ein, bevor sie das Formular absenden';
    document.getElementById("oldPassword").onkeyup = function() { checkEnableButton(); }
    document.getElementById("newPassword").onkeyup = function() { checkEnableButton(); }
    document.getElementById("confirmNewPassword").onkeyup = function() { checkEnableButton(); }
}

function checkEnableButton() {
    if(document.getElementById("oldPassword").value==="" ||
     document.getElementById("newPassword").value==="" ||
     document.getElementById("confirmNewPassword").value==="")
       {
           document.getElementById('submitButton').disabled = true; 
           var button = document.getElementById('submitButton');
           button.title = '';
       } else { 
           document.getElementById('submitButton').disabled = false;
       }
}
</script>