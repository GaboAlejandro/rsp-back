<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Http\Resources\PlayerResource;

class PlayerController extends Controller
{

    public function index()
    {
        return Player::all();
    }

    public function show($id)
    {
        return Player::find($id);
    }

    public function store(Request $request)
    {
        return Player::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $player = Player::findOrFail($id);
        $player->update($request->all());

        return $player;
    }

    public function delete(Request $request, $id)
    {
        $player = Player::findOrFail($id);
        $player->delete();

        return 204;
    }
}
