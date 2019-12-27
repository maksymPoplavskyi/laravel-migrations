<?php

namespace App\Http\Controllers\Weather;

use App\Http\Controllers\Controller;
use App\Services\Weather\CitiesService;
use App\Services\Weather\WeatherService;
use Illuminate\Http\Request;


class CitiesController extends Controller
{

    public function citiesIndexAction(Request $request, CitiesService $service)
    {

        $weatherApiKey = config('config.weather_api.key');
        $weatherUrl = config('config.weather_api.url');

        if ($request->input('cityNamePost') && $request->input('cityName')) {
            $formatted_url = sprintf($weatherUrl, $request->input('cityNamePost'), $weatherApiKey);
            $city=$request->input('cityNamePost');
            $result = $service->getCity(
                [
                    'city' => $request->input('cityNamePost')
                ]
            );
        } elseif ($request->input('cityNamePost')) {
            $formatted_url = sprintf($weatherUrl, $request->input('cityNamePost'), $weatherApiKey);
            $city=$request->input('cityNamePost');
            $result = $service->getCity(
                [
                    'city' => $request->input('cityNamePost')
                ]
            );
        } elseif ($request->input('cityName')) {
            $formatted_url = sprintf($weatherUrl, $request->input('cityName'), $weatherApiKey);
            $city=$request->input('cityName');
            $result = $service->getCity(
                [
                    'city' => $request->input('cityName')
                ]
            );
        } else {
            return view('emptyCity');
        }

        //получаю return $result c CitiesService

        $this->getResult(
            [
                'result' => $result['result'],
                'city' => $city,
                'cityId' => $result['cityId'],
                'formatted_url' => $formatted_url

            ]);
    }

    public function getResult(array $result)
    {
        $obj = new WeatherService();
        $obj->getWeather($result);
    }
}
