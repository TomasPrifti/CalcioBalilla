<?php

namespace App\Http\Controllers;

use App\Models\Game;

use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MainController extends BaseController {

	public function create_game(Request $request): RedirectResponse {

		$game = new Game();
		$game->date = $request->date;
		$game->team1_person1 = $request->team1_person1;
		$game->team1_person2 = $request->team1_person2;
		$game->team2_person1 = $request->team2_person1;
		$game->team2_person2 = $request->team2_person2;
		$game->result = $request->result;
		$game->save();

		return redirect('/home');
	}

	public function all_games() {
		return view('games', array('data' => Game::all()));
	}
}
