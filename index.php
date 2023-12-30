<?php

define('ROOTPATH', __DIR__);

require_once ROOTPATH . '/Controllers/MainController.php';

$main_controller = new MainController();

switch ($_SERVER['REQUEST_URI']) {
	case '':
	case '/':
	case '/home':
		$main_controller->get_view();
		break;

	default:
		echo 'ciao';
		http_response_code(404);
		$main_controller->get_view('404');
}
