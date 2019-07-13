<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Round;
use App\Http\Resources\RoundResource;

class RoundController extends Controller
{

    public function index()
    {
        return Round::all();
    }

    public function show($id)
    {
        return Round::find($id);
    }

    public function store(Request $request)
    {
        return Round::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $round = Round::findOrFail($id);
        $round->update($request->all());

        return $round;
    }

    public function delete(Request $request, $id)
    {
        $round = Round::findOrFail($id);
        $round->delete();

        return 204;
    }
}
