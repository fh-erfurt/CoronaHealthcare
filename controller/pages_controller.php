<?php

namespace app\controller;
use app\models\Profile as Profile;
class PagesController extends \app\core\Controller
{

	public function actionIndex()
	{
		$myValue = 4 * 4;

		$this->_params['myValue'] = $myValue;
	}

	public function actionProfile()
	{
		//$profile = Profile->find('WHERE id = 1');
	}

	public function actionError404()
	{
		
	}

	public function actionImpressum()
	{

	}
}