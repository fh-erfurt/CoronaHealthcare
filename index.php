<?php

session_start();

// all require stuff to work!!
require_once 'config/database.php';
require_once 'config/init.php';

//require_once COREPATH.'functions.php';
require_once COREPATH.'controller.class.php';
require_once COREPATH.'_baseModel.class.php';
require_once COREPATH.'functions.php';
require_once MODELSPATH.'address.class.php';
require_once MODELSPATH.'category.class.php';
require_once MODELSPATH.'order.class.php';
require_once MODELSPATH.'orderHistory.class.php';
require_once MODELSPATH.'product.class.php';
require_once MODELSPATH.'profile.class.php';


// query params with 'c' means controller and 'a' means action
// controller is alwayse the controller of the views
// and the action is alwayse the method of the controller, which has be called before render HTML

// check controller name is given? if not use 'pages' as default!
$controllerName = $_GET['c'] ?? 'pages';

// check action name is given? if not use 'index' as default!
$actionName = $_GET['a'] ?? 'start';


if($actionName === 'logout')
{
	logOut();
	$actionName = 'start';
	$controllerName = 'pages';
}

// generate the correct controller path and check file exists?
$controllerPath = CONTROLLERSPATH.$controllerName.'_controller.php';

if(file_exists($controllerPath))
{
	include_once $controllerPath;

	// example of included controller name is PagesController in default
	$controllerClassName = '\\app\\controller\\'.ucfirst($controllerName).'Controller';

	// is the class name a valid name in our context?
	if(class_exists($controllerClassName))
	{
		// generate the controller as an object from the class name
		$controllerInstance = new $controllerClassName($actionName, $controllerName);

		// check index action is availible
		$actionMethodName = 'action'.ucfirst($actionName);

		if(method_exists($controllerInstance, $actionMethodName))
		{
			$controllerInstance->{$actionMethodName}();
		}
		else
		{
			header('Location: index.php?c=pages&a=error404');
		}
	}
	else
	{
		header('Location: index.php?c=pages&a=error404');
	}
}
else
{
	header('Location: index.php?c=pages&a=error404');
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>CoronaHealthcare</title>
</head>
<body>
	<?
        // this method will render the view of the called action
        // for this the the file in the views directory will be included
        $controllerInstance->renderHTML();
    ?>
</body>
</html>