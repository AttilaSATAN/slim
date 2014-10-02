<?php
	require 'vendor/autoload.php';
	require dirname(__FILE__) . '/dbhandler.php';
	
	$app = new \Slim\Slim();
	$app->view(new \JsonApiView());
	$app->add(new \JsonApiMiddleware());
	$app->get('/foo/:bar', function ($bar) {
	
		$db = new DbHandler();
		$iller = $db->iller();
		$app->render(200,$iller);
		
	});
	$app->run();
?>
