<?php

define('ROOTPATH', __DIR__);

require_once ROOTPATH . '/env.php';
require_once ROOTPATH . '/Controllers/MainController.php';
require_once ROOTPATH . '/Models/GameModel.php';

$main_controller = new MainController();
$request_uri = $_SERVER['REQUEST_URI'];

if (!empty($_POST) && '/create' === $request_uri) {
	$main_controller->create_game();
}

switch ($request_uri) {
	case '':
	case '/':
	case '/home':
	case '/create':
		$main_controller->get_view();
		break;

	default:
		http_response_code(404);
		$main_controller->get_view('404');
}
