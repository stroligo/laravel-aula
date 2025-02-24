<?php

namespace App\Services;

use App\Models\Game;


class GamesService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function getAllGames()
    {
        $games = Game::all();
        return $games;
    }
    public function getGameBySlug($slug)
    {
        $game = Game::where('slug', $slug)->firstOrFail();
        return $game;
    }
    public function createGame($data)
    {
        Game::create($data);
    }
    public function updateGame($data, $slug)
    {
        $game = Game::where('slug', $slug)->firstOrFail();
        $game->update($data);
    }
    public function deleteGame($slug)
    {
        $game = Game::where('slug', $slug)->firstOrFail();
        $game->delete();
    }
}
