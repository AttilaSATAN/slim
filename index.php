<?php
	require 'vendor/autoload.php';
	require dirname(__FILE__) . '/dbhandler.php';
	
	$app = new \Slim\Slim();
	$app->view(new \JsonApiView());
	$app->add(new \JsonApiMiddleware());
	$app->get('/foo/:bar', function ($bar) use ($app){
	
		$db = new DbHandler();
		$iller = $db->iller();
		$app->render(200,$iller[0]);
		
	});
	$app->run();
?>
