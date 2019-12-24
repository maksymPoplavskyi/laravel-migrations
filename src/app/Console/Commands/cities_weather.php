<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PDO;

class cities_weather extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cities_weather:info';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'check cities temperature form cities_table';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $login = config('config.db_connection.login');
        $pass = config('config.db_connection.pass');
        $host = config('config.db_connection.host');
        $dbname = config('config.db_connection.dbname');

        $weatherApiKey = config('config.weather_api.key');
        $weatherUrl = config('config.weather_api.url');

        $ch = curl_init();

        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $login, $pass);
        foreach ($dbh->query("SELECT id, name FROM cities") as $row) {
            $formatted_url = sprintf($weatherUrl, $row['name'], $weatherApiKey);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $formatted_url);
            $response = curl_exec($ch);
            $data = json_decode($response);

            $cityArrInfo = (array)$data;

            $cityId = $row['id'];
            $cityName = $row['name'];
            $weather = ((array)$cityArrInfo['weather'][0])['main'];
            $wind = ((array)$cityArrInfo['wind'])['speed'];
            $temperature = round(((array)$cityArrInfo['main'])['temp'] - 273.15);
            $pressure = ((array)$cityArrInfo['main'])['pressure'];
            $humidity = ((array)$cityArrInfo['main'])['humidity'];

            $dbh->query("INSERT INTO cities_info (city_id, weather, wind, temperature, pressure, humidity)
                    VALUES ('$cityId', '$weather', '$wind', '$temperature', '$pressure', '$humidity')");

            dump("info about $cityName added success");
        }
        curl_close($ch);
    }
}
