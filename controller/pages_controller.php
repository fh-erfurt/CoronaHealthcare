<?php

namespace app\controller;
use \app\models;

class PagesController extends \app\core\Controller
{

	public function actionProfile()
	{
		$this->_params['userFirstname'] = $_SESSION['user']['firstname'];
		$this->_params['userLastname'] = $_SESSION['user']['lastname'];
		$this->_params['userEmail'] = $_SESSION['user']['email'];
		$this->_params['userPhone'] = $_SESSION['user']['phone'];		
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
	public function actionShoppingcart()
	{

	}
	
}