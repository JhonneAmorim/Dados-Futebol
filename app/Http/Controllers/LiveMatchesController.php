<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LiveMatchesController extends Controller
{
    public function index()
    {
        $APIkey = env('API_KEY');

        $response = Http::get("https://apiv3.apifootball.com/?action=get_live_odds_commnets&APIkey=$APIkey");
        $data = $response->json();

        return view('live-matches', ['data' => $data]);
    }
}
