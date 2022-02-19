<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Game;
use App\User;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::orderBy('id', 'desc')->paginate(10);
        return view('games.index')
            ->with('games', $games);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'platform' => 'required',
            'price' => 'required|numeric|min:1',
        ]);

        $game = new Game;
        $game->name = $request->name;
        $game->description = $request->description;
        $game->platform = $request->platform;
        $game->price = $request->price;
        $game->save();

        return redirect('/games');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Game::findOrFail($id);
        return view('games.edit')
        ->with('game', $game);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'platform' => 'required',
            'price' => 'required|numeric|min:1'
        ]);

        $game = Game::findOrFail($id);
        $game->name = $request->name;
        $game->description = $request->description;
        $game->platform = $request->platform;
        $game->price = $request->price;
        $game->save();

        return redirect('/games');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect('/games');
    }
}
