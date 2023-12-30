<?php

class MainController {

	public function __construct() {

	}

	public function get_view($name = 'home') {
		include ROOTPATH . "/Views/$name.php";
	}
}
