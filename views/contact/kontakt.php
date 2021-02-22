<?php if(isset($errors) && count($errors) > 0) : ?>
            <div class="error-message">
                    <?php foreach($errors as $key => $value) : ?>
                        <p><?=$value?></p>
                    <?php endforeach; ?>
                
            </div>
        <?php endif; ?>
<form action="<?=$_SERVER['PHP_SELF'].'?c=contact&a=kontakt';?>" method="post">
    <div class="loginForm">
    <h2>Kontakt</h2>
    <input type="text" name="email" id="email" placeholder="Ihre Emailadresse..." value="<?=$_POST['email'] ?? ''?>">
    <br>
    <input type="text" name="lastname" id="lastname" placeholder="Nachname" value="<?=htmlspecialchars($_POST['lastname'] ?? '')?>">
    <br>
    <input type="text" name="firstname" id="firstname" placeholder="Vorname" value="<?=htmlspecialchars($_POST['firstname'] ?? '')?>">
    <br>
    <textarea id="subject" name="subject" placeholder="Ihre Kontaktaufnahme.." rows="10" cols="80" value="<?=htmlspecialchars($_POST['subject'] ?? '')?>"></textarea>
    <br>
    <p>
    
    <input id="submitButton" type="submit" name="submitContact" value="Abschicken">    
    </div>
    <div class="clear"></div>
</form>



<script>
window.onload=function(){
    document.getElementById("submitButton").disabled = true;
    var button = document.getElementById('submitButton');
    button.title = 'Bitte geben sie überall ihre Informationen ein, bevor sie das Formular absenden';
    document.getElementById("email").onkeyup = function() { checkEnableButton(); }
    document.getElementById("lastname").onkeyup = function() { checkEnableButton(); }
    document.getElementById("firstname").onkeyup = function() { checkEnableButton(); }
    document.getElementById("subject").onkeyup = function() { checkEnableButton(); }
}

function checkEnableButton() {
    if(document.getElementById("email").value==="" ||
     document.getElementById("firstname").value===""||
     document.getElementById("subject").value===""||
     document.getElementById("lastname").value==="")
       {
           document.getElementById('submitButton').disabled = true; 
           var button = document.getElementById('submitButton');
           button.title = '';
       } else { 
           document.getElementById('submitButton').disabled = false;
       }
}
</script>