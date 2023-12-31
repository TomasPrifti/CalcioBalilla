<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="build/style.css">
		<title>Calcio Balilla</title>
	</head>

	<body>
		<h1>Calcio Balilla</h1>

		<div>
			<h2>Inserisci una nuova partita</h2>
			<form action="/" method="post">
				<input type="hidden" name="action" value="create" />
				<label>Data: <input type="date" name="date" required></label>
				<label>Squadra 1: <input type="text" name="team1_person1" required> - <input type="text" name="team1_person2" required></label>
				<label>Squadra 2: <input type="text" name="team2_person1" required> - <input type="text" name="team2_person2" required></label>
				<label>Risultato: <input type="text" name="result" pattern="\d+-\d+" title="Formato valido: x-x" required></label>
				<input type="submit" value="Inserisci Partita">
			</form>
		</div>
	</body>

</html>
