<?php
	include("model.php");
	include("controller.php");
	include("view.php");
	
	$model = new model();
	$controller = new controller($model);
	$view = new view($controller, $model);
	
	echo $view->output();
?>