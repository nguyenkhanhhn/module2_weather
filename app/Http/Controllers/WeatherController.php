<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function weather($cityname)
    {
        $client = new Client();
        $response = $client->request('GET', 'http://api.openweathermap.org/data/2.5/weather?q='.$cityname.'&appid=d82198533965624488e2023a86281070');
        $datajson = $response->getBody();
        $data = json_decode($datajson);
        return view('weather', compact('data'));
    }

}
