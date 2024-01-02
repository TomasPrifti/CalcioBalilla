<?php

define('ROOTPATH', __DIR__);

require_once ROOTPATH . '/env.php';
require_once ROOTPATH . '/Controllers/MainController.php';
require_once ROOTPATH . '/Models/GameModel.php';

$main_controller = new MainController();

if (!empty($_POST) && 'create' === $_POST['action']) {
	unset($_POST['action']);
	$main_controller->create_game();
}

switch ($_SERVER['REQUEST_URI']) {
	case '':
	case '/':
	case '/home':
		$main_controller->get_view();
		break;

	default:
		http_response_code(404);
		$main_controller->get_view('404');
}
