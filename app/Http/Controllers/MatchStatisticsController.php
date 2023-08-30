<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MatchStatisticsController extends Controller
{
    public function getMatchesWithStatistics()
    {
        $APIkey = env('API_KEY');

        $client = new Client();
        $response = $client->get("https://apiv3.apifootball.com/?action=get_live_scores&APIkey=$APIkey");

        $data = json_decode($response->getBody(), true);

        return view('matches_with_statistics', ['data' => $data]);
    }

    public function getTeamStatistics($matchId)
    {
        $APIkey = env('API_KEY');

        $client = new Client();
        $response = $client->get("https://apiv3.apifootball.com/?action=action=get_statistics&match_id=$matchId&APIkey=$APIkey");

        $data = json_decode($response->getBody(), true);

        $statistics = isset($data[$matchId]['statistics']) ? $data[$matchId]['statistics'] : [];

        return view('team_statistics', ['statistics' => $statistics, 'matchId' => $matchId]);
    }
}
