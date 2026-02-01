<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\GameController;

use Illuminate\Support\Facades\DB;
    
Route::get('/', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('register');
}); 

Route::get('/auth-google-redirect', [AuthController::class, 'google_redirect']);
Route::get('/auth-google-callback', [AuthController::class, 'google_callback']);

// ===== Authentication API Routes =====
Route::post('/api/auth/login', [AuthController::class, 'login']);
Route::post('/api/auth/register', [AuthController::class, 'register']);
Route::post('/api/auth/logout', [AuthController::class, 'logout']);
Route::get('/api/auth/me', [AuthController::class, 'getCurrentUser']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/forgot', function () {
    return view('forgot');
});

Route::get('/reset', function () {
    return view('reset');
});

Route::get('/index', function () {
    return view('index');
}); 

Route::get('/game', function () {
    return view('game');
}); 

Route::get('/article', function () {
    return view('article');
}); 

Route::get('/rating', function () {
    return view('rating');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/test-db', function () {
    return DB::select('SHOW TABLES');
}); 

// ===== Rating Routes (No middleware needed - user_id sent from frontend) =====
Route::post('/rating', [RatingController::class, 'store']);
Route::get('/rating/user', [RatingController::class, 'getUserRating']);
Route::delete('/rating', [RatingController::class, 'deleteRating']);
Route::get('/rating/stats', [RatingController::class, 'getStats']);

Route::get('/games', [GameController::class, 'game'])
    ->name('games.game');

Route::middleware('api')->group(function () {
    Route::get('/games/{section}', [GameController::class, 'getGamesBySection']);
});

Route::get('/game/{id}', [GameController::class, 'detail'])->name('games.detail');
