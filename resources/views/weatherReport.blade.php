<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Weather Report</title>
</head>
<body>
    <div class="h-screen bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 flex justify-center items-center">
        <div class="bg-white rounded-lg shadow-lg p-7 w-4/12 mx-auto text-gray-900">
            <div class="text-center pt-10">
                <h2 class="text-xl -mt-6 font-bold mb-3">{{ $cityName }}, {{ $country }}</h2>
                <p class="text-gray-400">{{ $localTime }}</p>
            </div>
            <div class="mt-4 text-center">
                <p class="text-7xl font-bold text-center">{{ $temp_C }}°C | {{ $temp_F }}°F</p>
                <p class="pt-5 text-gray-400">Feels Like : <span class="text-gray-500 text-black">{{ $feelsLikeCelcius }}°C  |  {{ $feelsLikeFarenhide }}°F</span> </p>
                <p class="text-center text-gray-400 pt-2">Weather is : <span class="text-xl text-gray-500 capitalize">{{ $weather_report_status }}</span></p>
            </div>

            @if ($sunRise || $sunSet)
            <div class="mt-6 flex justify-between text-center">
                <div class="ps-10 flex flex-col justify-center items-center content-center">
                    <svg class="h10 w-10 text-yellow-600"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M17 18a5 5 0 0 0-10 0" />  <line x1="12" y1="2" x2="12" y2="9" />  <line x1="4.22" y1="10.22" x2="5.64" y2="11.64" />  <line x1="1" y1="18" x2="3" y2="18" />  <line x1="21" y1="18" x2="23" y2="18" />  <line x1="18.36" y1="11.64" x2="19.78" y2="10.22" />  <line x1="23" y1="22" x2="1" y2="22" />  <polyline points="8 6 12 2 16 6" /></svg>
                    <p class="text-md text-gray-600">{{ $sunRise }}</p>
                    <p class="text-sm text-gray-400">Sun Rise</p>
                </div>
                <div class="pe-10 flex flex-col justify-center items-center content-center">
                    <svg class="h-10 w-10 text-red-600"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M17 18a5 5 0 0 0-10 0" />  <line x1="12" y1="9" x2="12" y2="2" />  <line x1="4.22" y1="10.22" x2="5.64" y2="11.64" />  <line x1="1" y1="18" x2="3" y2="18" />  <line x1="21" y1="18" x2="23" y2="18" />  <line x1="18.36" y1="11.64" x2="19.78" y2="10.22" />  <line x1="23" y1="22" x2="1" y2="22" />  <polyline points="16 5 12 9 8 5" /></svg>
                    <p class="text-md text-gray-600">{{ $sunSet }}</p>
                    <p class="text-sm text-gray-400">Sun Rise</p>
                </div>
            </div>

            @endif

            <div class="mt-6 flex justify-between text-center pb-2">
                <div>
                    <p class="text-sm text-gray-400">Humidity</p>
                    <p class="text-lg font-bold">{{ $humidity }}%</p>
                </div>
                <div>
                    <p class="text-sm text-gray-400">Cloud Cover</p>
                    <p class="text-lg font-bold">{{ $cloudCover }}%</p>
                </div>
                <div>
                    <p class="text-sm text-gray-400">Average Temp</p>
                    <p class="text-lg font-bold">{{ $averageTemC }}°C | {{ $averageTemF }}°F</p>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
