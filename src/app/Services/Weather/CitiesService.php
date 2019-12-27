<?php


namespace App\Services\Weather;

use App\Models\CitiesModel;

class CitiesService
{
    public $result;

    public function getCity(array $service): array
    {
        $cityName = $service['city'];

        $cities = CitiesModel::where('name', '=', "$cityName")->first();

        if (!$cities['name']) {
            $city = new CitiesModel();
            $city->name = $cityName;
            $city->save();

            $result = true;
        } else {
            $result = false;
        }

        return [
            'result' => $result,
            'cityId' => $cities['id'],
        ];
    }
}
