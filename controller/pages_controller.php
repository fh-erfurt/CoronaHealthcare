<?php

namespace app\controller;
use \app\models;

class PagesController extends \app\core\Controller
{

	public function actionProfile()
	{
		$allUserOrders = \app\models\Order::find('profile = '.$_SESSION['user']['id']);
		$this->_params['userFirstname'] = $_SESSION['user']['firstname'];
		$this->_params['userLastname'] = $_SESSION['user']['lastname'];
		$this->_params['userEmail'] = $_SESSION['user']['email'];
		$this->_params['userPhone'] = $_SESSION['user']['phone'];
		foreach ($allUserOrders as $key => $order) 
		{
			$allOPMappings = \app\models\OrderProductMapping::find('order_id = '. $order['id']);
			$orderStatus = \app\models\OrderHistory::findLastEntryRowPerID('id')['change'];
			$allUserOrders[$key]['status'] = $orderStatus;
			$allUserOrders[$key]['mappings'] = $allOPMappings;
		}
		$this->_params['orders'] = $allUserOrders;
	}

	public function actionEditProfile()
	{
		$errors = [];
        $success = false;
        $db = $GLOBALS['db'];

		$addressID = $_SESSION['user']['address'];

		$address = \app\models\Address::findOne('id = ' . $addressID);

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
            else if(isset($userEmail) && $email != $_SESSION['user']['email'])
            {
                $errors['email'] = "E-Mail ist bereits vergeben.";
            }

            if($firstname === null || mb_strlen($firstname) < 2 || mb_strlen($firstname) > 45)
            {
                $errors['firstname'] = 'Der Vorname entspricht nicht den Richtlinien, bitte geben Sie mindestens 2 und maximale 45 Zeichen an.';
            }

            if($lastname === null || mb_strlen($lastname) < 2 || mb_strlen($lastname) > 45)
            {
                $errors['lastname'] = 'Der Nachname entspricht nicht den Richtlinien, bitte geben Sie mindestens 2 und maximale 45 Zeichen an.';
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

					$profile = \app\models\Profile::findOne('id = ' . $_SESSION['user']['id']);
					$profile = new \app\models\Profile($profile);
					$profile->__set('email', $email);
					$profile->__set('firstname', $firstname);
					$profile->__set('lastname', $lastname);
					$profile->__set('phone', $phone);
					$profile->__set('address', $userAddress);
					$profile->update($errors);

					$_SESSION['user'] = \app\models\Profile::findOne('id = ' . $profile->__get('id'));
					$success = true;
				} 
				catch (Exception $ex) 
				{
					$success = false;
					$errors['exceptionError'] = 'Beim DB Update ist etwas schief gegangen.';
				}
			}
		}

		$this->setParam('errors', $errors);
        $this->setParam('success', $success);
		$this->setParam('address', $address);   
	}

	public function actionChangePassword()
	{
		$errors = [];
        $success = false;



		if(isset($_POST['submitChangePassword']))
        {
			$oldPassword = $_POST['oldPassword'] ?? null;
			$newPassword = $_POST['newPassword'] ?? null;
			$confirmNewPassword = $_POST['confirmNewPassword'] ?? null;


			if($oldPassword === null || $oldPassword != $_SESSION['user']['password'])
        	{
        	    $errors['password'] = 'Das alte Passwort ist fehlerhaft.';
        	}

			if($newPassword === null || mb_strlen($newPassword) < 8)
        	{
        	    $errors['newPassword'] = 'Das neue Passwort ist zu kurz, bitte geben Sie mehr als 8 Zeichen an.';
        	}

			if($confirmNewPassword === null || $newPassword != $confirmNewPassword)
        	{
        	    $errors['confirmNewPassword'] = 'Das neue Passwort stimmt nicht überein.';
        	}


			if(count($errors) === 0)
			{
				$profile = \app\models\Profile::findOne('id = ' . $_SESSION['user']['id']);
				$profile = new \app\models\Profile($profile);
				$profile->__set('password', $newPassword);
				$profile->update($errors);
				$_SESSION['user'] = \app\models\Profile::findOne('id = ' . $profile->__get('id'));
				$success = true;
			}
			else 
			{
				$success = false;
			}
		}

		$this->setParam('errors', $errors);
        $this->setParam('success', $success);
	}


	public function actionError404()
	{
		
	}
	public function actionHelp()
	{

	}
	public function actionStart()
	{
		
	}

	public function actionImpressum()
	{

	}

	public function actionAbout()
	{

	}

	public function actionInformation()
	{

	}
	public function actionDocumentation(){
		
	}
	
}