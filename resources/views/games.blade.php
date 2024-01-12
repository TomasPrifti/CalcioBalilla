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
			@foreach ($data as $game)
				<div>
					<p>Partita n° {{ $game->id }}</p>
					<p>Data: {{ $game->date }}</p>
					<p>Squadra 1: {{ $game->team1_person1 }} e {{ $game->team1_person2 }}</p>
					<p>Squadra 2: {{ $game->team2_person1 }} e {{ $game->team2_person2 }}</p>
					<p>Risultato: {{ $game->result }}</p>
				</div>
			@endforeach

			<a class="button" href="/home">Home</a>
		</div>
	</body>

</html>
