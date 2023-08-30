<?php

use App\Http\Controllers\FootballController;
use App\Http\Controllers\LiveMatchesController;
use App\Http\Controllers\MatchStatisticsController;
use App\Http\Controllers\StandingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StandingsController::class, 'index']);
Route::get('/partidas-com-estatisticas', [MatchStatisticsController::class, 'getMatchesWithStatistics']);
Route::get('/estatisticas-do-time/{matchId}', [MatchStatisticsController::class, 'getTeamStatistics'])->name('team-statistics');

Route::get('/partidas-ao-vivo', [LiveMatchesController::class, 'index']);


