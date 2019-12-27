<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CitiesWeatherModel extends Model
{
    protected $table = 'cities_weather_info';
    protected $connection = 'mysql';

    public $timestamps = true;

}
