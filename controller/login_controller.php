<?php

namespace app\controller;
use \app\models;

class LoginController extends \app\core\Controller
{
    public function actionLogin()
    {

        if(isset($_GET['wantedToOrder']))
        {
            $wantedToOrder = $_GET['wantedToOrder'];
            $_SESSION['wantedToOrder'] = 'yes';
        }
        $error = null;
        if(isset($wantedToOrder))
        {
            $error = 'Bitte melden Sie sich vor dem Bestellvorgang an.';
        }
        if(isset($_POST['submitLogin']))
        {
            $userEmail = isset($_POST['validationEmail']) ? $_POST['validationEmail'] : '';
            $userPassword = isset($_POST['validationPassword']) ? $_POST['validationPassword'] : '';
            $user = \app\models\Profile::findOne('email = \'' . $userEmail . '\' AND password = \''. $userPassword . '\'' );
            if (isset($user))
            {
                if($_POST['rememberMe'] == true)
                {
                    rememberMe($userEmail,$userPassword);
                }
                $error = false;
                $_SESSION['user'] = $user;
                if($_SESSION['wantedToOrder'] == 'yes')
                {
                    unset($_SESSION['wantedToOrder']);
                    $this->redirect('index.php?c=shop&a=order');
                }
                $this->redirect('index.php?c=pages&a=profile');
            }
            else 
            {
                $error = 'Der Benutzername oder das Passwort ist falsch.';
            }
            $this->setParam('userEmail', $userEmail);
        }
        $this->setParam('error', $error);
    }

    public function actionRegister()
    {
        $errors = [];
        $success = false;
        $db = $GLOBALS['db'];

        if(isset($_POST['submit']))
        {
            $email = $_POST['email'] ?? null;
            $password = $_POST['password'] ?? null;
            $firstname = $_POST['firstname'] ?? null;
            $lastname = $_POST['lastname'] ?? null;
            $phone = $_POST['phone'] ?? null;
            
            $city = $_POST['city'] ?? null;
            $street = $_POST['street'] ?? null;
            $number = $_POST['number'] ?? null;
            $zip = $_POST['zip'] ?? null;


            $userEmail = \app\models\Profile::findOne('email = ' . $db->quote($email));

            if($email === null || mb_strlen($email) < 2)
            {
                $errors['email'] = 'E-Mail ist zu kurz, bitte mehr als 2 Zeichen.';
            }
            else if(isset($userEmail))
            {
                $errors['email'] = "E-Mail ist bereits vergeben.";
            }

            if($password === null || mb_strlen($password) < 8)
            {
                $errors['password'] = 'Passwort ist zu kurz, bitte geben Sie mehr als 8 Zeichen an.';
            }

            if($firstname === null || mb_strlen($firstname) < 2 || mb_strlen($firstname) > 45)
            {
                $errors['firstname'] = 'Der Vorname entspricht nicht den Richtlinien, bitte geben Sie mindenstens 2 und maximale 45 Zeichen an.';
            }

            if($lastname === null || mb_strlen($lastname) < 2 || mb_strlen($lastname) > 45)
            {
                $errors['lastname'] = 'Der Nachname entspricht nicht den Richtlinien, bitte geben Sie mindenstens 2 und maximale 45 Zeichen an.';
            }


            if($city === null || mb_strlen($city) === 0)
            {
                $errors['city'] = 'Bitte geben Sie einen Stadtnamen an.';
            }

            if($street === null || mb_strlen($street) === 0)
            {
                $errors['street'] = 'Bitte geben Sie einen Straßennamen an.';
            }

            if($number === null || mb_strlen($number) === 0)
            {
                $errors['number'] = 'Bitte geben Sie eine Hausnummer an.';
            }

            if($zip === null || mb_strlen($zip) === 0)
            {
                $errors['zip'] = 'Bitte geben Sie eine Postleitzahl an.';
            }

            if(count($errors) === 0)
            {
                try
                {

                    $address = \app\models\Address::findOne('city = '. $db->quote($city) . ' AND street= ' .$db->quote($street).
                                                ' AND number = ' .$db->quote($number). ' AND zip = ' .$db->quote($zip));
                    $userAddress = null;
                    if(isset($address))
                    {
                        $userAddress = $address['id'];
                    }
                    else
                    {
                        $newAddressData = array(
                            'city' => $city,
                            'street' => $street,
                            'number' => $number,
                            'zip' => $zip
                        );

                        $newAddress = new \app\models\Address($newAddressData);
                        $newAddress->insert($errors);
                        $newAddress = \app\models\Address::findOne('city = '. $db->quote($city) . ' AND street= ' .$db->quote($street).
                        ' AND number = ' .$db->quote($number). ' AND zip = ' .$db->quote($zip));

                        $userAddress = $newAddress['id'];
                    }
                
                    $newUserData = array(
                        'email' => $email,
                        'password' => $password,
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'phone' => $phone,
                        'address' => $userAddress
                    );
                    $newUser = new \app\models\Profile($newUserData);
                    $newUser->insert($errors);
                    $success = true;
                }
                catch(\Exception $exceptionError)
                {
                    $success = false;
                    $errors['exceptionError'] = 'Beim DB Update ist etwas schief gegangen.';
                }
            }
        }

        $this->setParam('errors', $errors);
        $this->setParam('success', $success);   
    }
}