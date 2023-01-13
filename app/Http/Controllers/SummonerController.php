<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;


class SummonerController extends Controller
{

    public function index()
    {
        return view('summoner');
    }



    public function getSummoner(Request $request)
    {
        $request->validate([
            'region' => [
                'required',
                Rule::in(['br1', 'eun1', 'euw1', 'jp1', 'kr', 'la1', 'la2', 'na1', 'oc1', 'tr1', 'ru']),
            ],
            'summonerName' => [
                'required',
                'string'
            ],
        ]);

        $response = Http::get('https://' . $request->input('region') . '.api.riotgames.com/lol/summoner/v4/summoners/by-name/' . $request->input('summonerName') . '?api_key=' . env('RIOT_API_KEY'));
        return view('summoner', ['summoner' => $response->json()]);
    }

    public function newSummoner(Request $request)
    {
        $request->validate([
            'newSummonerName' => [
                'required',
                'string'
            ],
        ]);

        $res = Http::get('https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/' . $request->input('newSummonerName') . '?api_key =' . env('RIOT_API_KEY'));

        return view('summoner', ['summoner' => $res->json()]);
    }

}
