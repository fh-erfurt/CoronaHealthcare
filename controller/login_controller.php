<?php

namespace app\controller;
use \app\models;

class LoginController extends \app\core\Controller
{
    public function actionLogin()
    {
        $error = null;
        if(isset($_POST['submitLogin']))
        {
            $userEmail = isset($_POST['validationEmail']) ? $_POST['validationEmail'] : '';
            $userPassword = isset($_POST['validationPassword']) ? $_POST['validationPassword'] : '';
            $user = \app\models\Profile::findOne('email = \'' . $userEmail . '\' AND password = \''. $userPassword . '\'' );
            if (isset($user))
            {
                    $error = false;
                    $_SESSION['user'] = $user;
                    $this->redirect('index.php?c=pages&a=profile');
            }
            else 
            {
                $error = 'Der Benutzername oder das Passwort ist falsch.';
            }
            $this->setParam('userEmail', $userEmail);
            $this->setParam('error', $error);
        }
    }

    public function actionRegister()
    {

    }
}