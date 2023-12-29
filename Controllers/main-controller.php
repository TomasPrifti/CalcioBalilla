<?php
// Connessione al database (sostituisci con le tue informazioni)
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nome_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica della connessione
if ($conn->connect_error) {
	die("Connessione al database fallita: " . $conn->connect_error);
}

// Recupero dati dal modulo
$date = $_POST['date'];
$team1_person1 = $_POST['team1_person1'];
$team1_person2 = $_POST['team1_person2'];
$team2_person1 = $_POST['team2_person1'];
$team2_person2 = $_POST['team2_person2'];
$result = $_POST['result'];

// Inserimento dei dati nel database
$sql = "INSERT INTO games (date, team1_person1, team1_person2, team2_person1, team2_person2, result) VALUES ('$date', '$team1_person1', '$team1_person2', '$team2_person1', '$team2_person2', '$result')";

if ($conn->query($sql) === TRUE) {
	echo "Partita inserita con successo.";
} else {
	echo "Errore nell'inserimento della partita: " . $conn->error;
}

// Chiusura della connessione
$conn->close();
