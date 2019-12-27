<?php


namespace App\Services\Weather;

use App\Helpers\TemperatureHelper;
use App\Models\CitiesWeatherModel;

class WeatherService
{
    public function getWeather(array $subaru)
    {
        $city = $subaru['city'];
        $cityId = $subaru['cityId'];
        $formatted_url = $subaru['formatted_url'];
        $resultAddCity = $subaru['result'];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $formatted_url);
        $response = curl_exec($ch);
        $data = json_decode($response, true);

        $weather = $data['weather'][0]['main'];
        $wind = $data['wind']['speed'];
        $temp = TemperatureHelper::convertKelvinToCelsius($data['main']['temp']);
        $pressure = $data['main']['pressure'];
        $humidity = $data['main']['humidity'];

        if ($resultAddCity) {
            $cityInfoAdd = new CitiesWeatherModel();
            $cityInfoAdd->city_id = $cityId;
            $cityInfoAdd->weather = $weather;
            $cityInfoAdd->wind = $wind;
            $cityInfoAdd->temperature = $temp;
            $cityInfoAdd->pressure = $pressure;
            $cityInfoAdd->humidity = $humidity;
            $cityInfoAdd->save();
        } else {
            $cityInfoAdd = new CitiesWeatherModel();
            $cityInfoAdd->update(array(
               'weather' => $weather,
                'wind' => $wind,
                'temperature' => $temp,
                'pressure' => $pressure,
                'humidity' => $humidity
            ));
            $cityInfoAdd->save();

        }
    }
}
