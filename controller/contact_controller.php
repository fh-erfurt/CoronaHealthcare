<?php

namespace app\controller;
use \app\models;

class ContactController extends \app\core\Controller
{
    public function actionKontakt()
	{
        $errors = [];

        $_SESSION['contactEmail'] = null;
        $_SESSION['contactFirstname'] = null;
        $_SESSION['contactLastname'] = null;
        $_SESSION['contactSubject'] = null;

		if(isset($_POST['submitContact']))
        {
            $userEmail = isset($_POST['email']) ? $_POST['email'] : '';
            $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
			$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
			$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
            
            print_r($userEmail . '<br>');
            print_r($firstname. '<br>');
            print_r($lastname. '<br>');
            print_r($subject. '<br>');

            if($userEmail === null || mb_strlen($userEmail) < 2)
            {
                $errors['email'] = 'E-Mail ist zu kurz, bitte mehr als 2 Zeichen.';
            }
            if($firstname === null || mb_strlen($firstname) < 2 || mb_strlen($firstname) > 45)
            {
                $errors['firstname'] = 'Der Vorname entspricht nicht den Richtlinien, bitte geben Sie mindestens 2 und maximale 45 Zeichen an.';
            }

            if($lastname === null || mb_strlen($lastname) < 2 || mb_strlen($lastname) > 45)
            {
                $errors['lastname'] = 'Der Nachname entspricht nicht den Richtlinien, bitte geben Sie mindestens 2 und maximale 45 Zeichen an.';
            }
            if($subject === null || mb_strlen($subject) > 249)
            {
                $errors['subject'] = 'Ihre Anfrage sollte aus maximal 250 und mindestens 1 Zeichen bestehen.';
            }

            if(count($errors) === 0)
            {
                $_SESSION['contactEmail'] = $userEmail;
                $_SESSION['contactFirstname'] = $firstname;
                $_SESSION['contactLastname'] = $lastname;
                $_SESSION['contactSubject'] = $subject;
                $this->redirect('index.php?c=contact&a=KontaktSuccess');
            }

        }
	}

    public function actionKontaktSuccess()
    {
        $this->setparam('userEmail',$_SESSION['contactEmail']);
        $this->setparam('firstname',$_SESSION['contactFirstname']);
        $this->setparam('lastname',$_SESSION['contactLastname']);
        $this->setparam('subject',$_SESSION['contactSubject']);

        //Ausblick: Mailversand an dieser Stelle hinzufügen
    }

}