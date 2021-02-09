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
	
}