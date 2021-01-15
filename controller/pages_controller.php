<?php

namespace app\controller;
use \app\models;

class PagesController extends \app\core\Controller
{

	public function actionIndex()
	{
		$myValue = 4 * 4;

		$this->_params['myValue'] = $myValue;
	}

	public function actionProfile()
	{

		//$profileAnlegen = new \app\Models\Profile([]);

		//$tablename = \app\models\Profile::tablename();
		//echo $tablename;
		$profile = \app\models\Profile::find('id = 1');
		$this->_params['profile'] = $profile;
		
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