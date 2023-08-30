<?php

use App\Http\Controllers\StandingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StandingsController::class, 'index']);