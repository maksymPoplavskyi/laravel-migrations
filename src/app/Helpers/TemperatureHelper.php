<?php


namespace App\Helpers;


class TemperatureHelper
{
    private const DIFFERENCE_KELVIN_TO_CELSIUS = 273;

    public static function convertKelvinToCelsius(float $temp)
    {
        return round($temp - self::DIFFERENCE_KELVIN_TO_CELSIUS);
    }
}
