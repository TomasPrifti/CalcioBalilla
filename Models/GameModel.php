<?php

class GameModel {

	private $connection;

	public function __construct() {
		$this->open_connection();
	}

	public function new($data) {
		$sql = "INSERT INTO games (date, team1_person1, team1_person2, team2_person1, team2_person2, result) VALUES (:date, :team1_person1, :team1_person2, :team2_person1, :team2_person2, :result)";

		$query = $this->connection->prepare($sql);
		$query->bindParam(':date', $data['date'], PDO::PARAM_STR);
		$query->bindParam(':team1_person1', $data['team1_person1'], PDO::PARAM_STR);
		$query->bindParam(':team1_person2', $data['team1_person2'], PDO::PARAM_STR);
		$query->bindParam(':team2_person1', $data['team2_person1'], PDO::PARAM_STR);
		$query->bindParam(':team2_person2', $data['team2_person2'], PDO::PARAM_STR);
		$query->bindParam(':result', $data['result'], PDO::PARAM_STR);
		$query->execute();
	}

	private function open_connection() {
		$this->connection = new PDO(
			'mysql:host=' . $GLOBALS['mysql']['host'] . ';dbname=' . $GLOBALS['mysql']['dbname'],
			$GLOBALS['mysql']['username'],
			$GLOBALS['mysql']['password']
		);
	}

	private function close_connection() {
		$this->connection = null;
	}
}
