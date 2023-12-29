<?php
$request = $_SERVER['REQUEST_URI'];
$view_dir = '/views/';

switch ($request) {
	case '':
	case '/':
	case '/home':
		require_once __DIR__ . $view_dir . 'home.php';
		break;

	default:
		http_response_code(404);
		require_once __DIR__ . $view_dir . '404.php';
}
