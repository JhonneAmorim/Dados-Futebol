<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StandingsController extends Controller
{
    public function index()
    {
        $apiKey = env('API_KEY');
        $leagueId = 152;

        $response = Http::get("https://apiv3.apifootball.com/?action=get_standings&league_id=$leagueId&APIkey=$apiKey");

        $data = $response->json();

        return view('standings', ['data' => $data]);
    }
}
