<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::with('category', 'reviews')->get();
        return view('games.index', compact('games'));
    }
    public function show(Game $game)
    {
        // $game = Game::with('category', 'reviews')->findOrFail($id);
        $game->load('category', 'reviews');
        return view('games.show', compact('game'));
    }
    public function create()
    {
        $categories = \App\Models\Category::all();
        return view('games.create', compact('categories'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'release_year' => 'required|integer|min:1900|max:' . date('Y'),
            'price' => 'required|numeric|min:0'
        ]);

        Game::create($validatedData);

        return redirect()->route('games.index');
    }
    public function edit(Game $game)
    {
        $categories = \App\Models\Category::all();
        return view('games.edit', compact('game', 'categories'));
    }
    public function update(Request $request, Game $game)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'release_year' => 'required|integer|min:1900|max:' . date('Y'),
            'price' => 'required|numeric|min:0'
        ]);
        $game->update($validatedData);

        return redirect()->route('games.index');
    }
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index');
    }
}
