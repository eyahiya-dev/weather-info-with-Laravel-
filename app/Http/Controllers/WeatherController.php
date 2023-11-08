<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    // received data from form data with post method
    function weatherData (Request $request){
        $city = $request->input("selectCity");
        $weatherDetails = Http::get("https://wttr.in/{$city}?format=j1")->json();
        // get data from the json.
        $feelsLikeCelcius = $weatherDetails['current_condition'][0]['FeelsLikeC'];
        $feelsLikeFarenhide = $weatherDetails['current_condition'][0]['FeelsLikeF'];
        $localTime = $weatherDetails['current_condition'][0]['localObsDateTime'];
        $cloudCover = $weatherDetails['current_condition'][0]['cloudcover'];
        $humidity = $weatherDetails['current_condition'][0]['humidity'];
        $temp_C = $weatherDetails['current_condition'][0]['temp_C'];
        $temp_F = $weatherDetails['current_condition'][0]['temp_F'];
        $weather_report_status = ucwords($weatherDetails['current_condition'][0]['weatherDesc']['0']['value']);
        $cityName = $weatherDetails['nearest_area'][0]['areaName']['0']['value'];
        $country = $weatherDetails['nearest_area'][0]['country']['0']['value'];
        $averageTemF = $weatherDetails['weather'][0]['avgtempF'];
        $averageTemC = $weatherDetails['weather'][0]['avgtempC'];
        $sunRise = $weatherDetails['weather'][0]['astronomy'][0]['sunrise'];
        $sunSet = $weatherDetails['weather'][0]['astronomy'][0]['sunset'];

        return view('weatherReport',compact('feelsLikeCelcius','feelsLikeFarenhide','cloudCover','humidity','temp_C','temp_F','weather_report_status','cityName','country','averageTemF','averageTemC','localTime', 'sunRise', 'sunSet'));
    }
}
