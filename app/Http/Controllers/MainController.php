<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Player;

use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MainController extends BaseController {

	public function home() {
		return view('home', array('data' => Player::all()));
	}

	public function create_game(Request $request): RedirectResponse {

		$checks = array(
			$request->isNotFilled('date'),
			$request->isNotFilled('team1_player1'),
			$request->isNotFilled('team1_player2'),
			$request->isNotFilled('team2_player1'),
			$request->isNotFilled('team2_player2'),
			$request->isNotFilled('result'),
		);

		if (in_array(true, $checks, true)) {
			return redirect('/home');
		}

		$players_ids = array(
			$request->team1_player1,
			$request->team1_player2,
			$request->team2_player1,
			$request->team2_player2
		);

		// There are duplicates.
		if (count($players_ids) !== count(array_unique($players_ids))) {
			return redirect('/home');
		}

		// TODO: Verify if they exists.
		// TODO: Verify if the result is valid.

		$game = new Game();
		$game->date = $request->date;
		$game->team1_player1 = $request->team1_player1;
		$game->team1_player2 = $request->team1_player2;
		$game->team2_player1 = $request->team2_player1;
		$game->team2_player2 = $request->team2_player2;
		$game->result = $request->result;
		$game->save();

		return redirect('/home');
	}

	public function all_games() {
		return view('games', array('data' => Game::all()));
	}
}
