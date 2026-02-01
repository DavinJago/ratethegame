<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GameController extends Controller
{
    public function game(Request $request)
    {
        $apiKey = env('RAWG_API_KEY');

        // pagination tiap section
        $topPage      = $request->get('top_page', 1);
        $newPage      = $request->get('new_page', 1);
        $upcomingPage = $request->get('upcoming_page', 1);

        // TOP GAMES
        $topGames = Http::get('https://api.rawg.io/api/games', [
            'key' => $apiKey,
            'ordering' => '-rating',
            'page' => $topPage,
            'page_size' => 10,
        ])->json();

        // NEW RELEASE
        $newGames = Http::get('https://api.rawg.io/api/games', [
            'key' => $apiKey,
            'dates' => '2024-01-01,2025-12-31',
            'ordering' => '-released',
            'page' => $newPage,
            'page_size' => 10,
        ])->json();

        // UPCOMING
        $upcomingGames = Http::get('https://api.rawg.io/api/games', [
            'key' => $apiKey,
            'dates' => '2025-01-01,2026-12-31',
            'ordering' => 'released',
            'page' => $upcomingPage,
            'page_size' => 10,
        ])->json();

        return view('games.game', compact(
            'topGames',
            'newGames',
            'upcomingGames',
            'topPage',
            'newPage',
            'upcomingPage'
        ));
    }

    // Show detail page
    public function detail($id)
    {
        $apiKey = env('RAWG_API_KEY');

        $game = Http::get("https://api.rawg.io/api/games/{$id}", [
            'key' => $apiKey
        ])->json();

        return view('games.detail', compact('game'));
    }
}
