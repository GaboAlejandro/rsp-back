<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\Http\Resources\MatchResource;

class MatchController extends Controller
{
    public function index()
    {
        return Match::all();
    }

    public function show($id)
    {
        return Match::find($id);
    }

    public function store(Request $request)
    {
        return Match::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $match = Match::findOrFail($id);
        $match->update($request->all());

        return $match;
    }

    public function delete(Request $request, $id)
    {
        $player = Match::findOrFail($id);
        $player->delete();

        return 204;
    }
}
