<?php

class MainController {

	private $GameModel;

	public function __construct() {
		$this->GameModel = new GameModel();
	}

	public function get_view($name = 'home') {
		if (!file_exists(ROOTPATH . "/Views/$name.php")) {
			return;
		}
		include ROOTPATH . "/Views/$name.php";
	}

	public function create_game() {
		$data = $_POST;
		// sanitization missing.
		$this->GameModel->new($data);
	}
}
