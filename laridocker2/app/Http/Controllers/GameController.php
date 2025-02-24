<?php

namespace App\Http\Controllers;

use App\Services\GamesService;
use Illuminate\Http\Request;

class GameController extends Controller
{
    protected $gamesService;
    public function __construct(GamesService $gamesService)
    {
        $this->gamesService = $gamesService;
    }
    public function home(Request $request)
    {
        $games = $this->gamesService->getAllGames();
        $search = $request->input('search', '');
        if ($search) {
            $games = $games->filter(function ($game) use ($search) {
                return false !== stristr($game->title, $search);
            });
        }
        return view('index', compact('games', 'search'));
    }
    public function show($slug)
    {
        $game = $this->gamesService->getGameBySlug($slug);
        return view('game', compact('game'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $this->gamesService->createGame($request->all());
        return redirect()->route('home');
    }
    public function edit($slug)
    {
        $game = $this->gamesService->getGameBySlug($slug);
        return view('edit', compact('game'));
    }
    public function update(Request $request, $slug)
    {
        $this->gamesService->updateGame($request->all(), $slug);
        return redirect()->route('home');
    }
    public function destroy($slug)
    {
        $this->gamesService->deleteGame($slug);
        return redirect()->route('home');
    }
}
