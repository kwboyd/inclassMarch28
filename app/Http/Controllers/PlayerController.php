<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class PlayerController extends Controller
{
    //
    public function index () {
      // GET /players
      // list
      $players = Player::all();
      return Response::json($players);
    }
    public function create (Request $request) {
      // POST /players
      // create new player
      Players::create($request->all());
      return Response::json(['created' => true]);
    }
}
