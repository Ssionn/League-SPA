<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class RiotController extends Controller
{
    public function getSummonerName(Request $request): JsonResponse
    {
        $api_key = env('RIOT_API_KEY');

        $request->validate([
            'region' => 'required',
            'summonerName' => 'required'
        ]);

        $region = $request->input('region');
        $summonerName = $request->input('summonerName');

        $client = new Client();

        try {
            $response = $client->request('GET', "https://" . $region . ".api.riotgames.com/lol/summoner/v4/summoners/by-name/" . $summonerName . "?api_key=" .  $api_key);

            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $json = json_decode($body, true);

            return response()->json($json, $statusCode);

        } catch (GuzzleException $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
