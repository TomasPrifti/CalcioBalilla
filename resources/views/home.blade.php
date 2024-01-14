<?php
/**
 * List of all players available.
 *
 * @param array<Player>
*/
$available_players = $data;

// TODO: Hide players already selected from other `select`.

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		@vite('resources/css/app.css')
		<title>Calcio Balilla</title>
	</head>

	<body>
		<h1>Calcio Balilla</h1>

		<div>
			<h2>Inserisci una nuova partita</h2>

			<form action="/createGame" method="post">
				@csrf
				<label>Data: <input type="date" name="date" required></label>

				<label>Squadra 1:
					<select name="team1_player1" required>
						<option value="" selected>-</option>
						@foreach ($available_players as $player)
						<option value="{{ $player->id }}">{{ $player->name }}</option>
						@endforeach
					</select>
					-
					<select name="team1_player2" required>
						<option value="" selected>-</option>
						@foreach ($available_players as $player)
						<option value="{{ $player->id }}">{{ $player->name }}</option>
						@endforeach
					</select>
				</label>

				<label>Squadra 2:
					<select name="team2_player1" required>
						<option value="" selected>-</option>
						@foreach ($available_players as $player)
						<option value="{{ $player->id }}">{{ $player->name }}</option>
						@endforeach
					</select>
					-
					<select name="team2_player2" required>
						<option value="" selected>-</option>
						@foreach ($available_players as $player)
						<option value="{{ $player->id }}">{{ $player->name }}</option>
						@endforeach
					</select>
				</label>

				<label>Risultato: <input type="text" name="result" pattern="\d+-\d+" title="Formato valido: x-x" required></label>
				<input type="submit" value="Inserisci partita">
			</form>

			<a class="button" href="/allGames">Tutte le partite</a>
		</div>
	</body>

</html>
