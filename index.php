<?php
	require 'vendor/autoload.php';
	require dirname(__FILE__) . '/dbhandler.php';
	
	$app = new \Slim\Slim();
	$app->view(new \JsonApiView());
	$app->add(new \JsonApiMiddleware());
	$app->get('/foo/:bar', function ($bar) use ($app){
	
		$db = new DbHandler();
		$iller = $db->iller();
		var_dump($iller);
		$app->render(200, (Object) $iller);
		
	});
	$app->run();
?>
