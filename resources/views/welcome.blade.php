<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Weather Report</title>
</head>
<body>
  <div class="h-screen flex justify-center items-center bg-black">
    <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" action="{{ route('weather.report') }}" method="POST">
            @csrf
            <h5 class="text-2xl text-center font-medium text-gray-900 dark:text-white">Weather Report of Your City</h5>
            <div class="pb-6">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="selectCity">
                <option class="mb20" selected>Choose a country</option>
                <option class="mb20" value="dhaka">Dhaka, Bangladesh</option>
                <option class="mb20" value="balito">Balito, South Africa</option>
                <option class="mb20" value="new york">New York, USA</option>
                <option class="mb20" value="london">London, UK</option>
                <option class="mb20" value="islamabad">Islamabad, Pakistan</option>
                <option class="mb20" value="mumbai">Mumbai, India</option>
                <option class="mb20" value="berlin">Berlin, Germany</option>
                <option class="mb20" value="kathmandu">Kathmandu, Nepal</option>
                <option class="mb20" value="rome">Rome, Italy</option>
                <option class="mb20" value="kabul">Kabul, Afganistan</option>
                <option class="mb20" value="shanghai">Shanghai, China</option>
                <option class="mb20" value="seoul">Seoul, South Korea</option>
                <option class="mb20" value="sydney">Sydney, Australia</option>
                <option class="mb20" value="paris">Paris, Franch</option>
                <option class="mb20" value="zurich">Zurich, Switzerland</option>
                <option class="mb20" value="addis ababa">Addis Ababa, Ethiopia</option>
                <option class="mb20" value="toronto">Toronto, Canada</option>
                <option class="mb20" value="amsterdam">Amsterdam, Netherland</option>
                <option class="mb20" value="moscow">Moscow, Russia</option>
                <option class="mb20" value="osaka">Osaka, Japan</option>
                <option class="mb20" value="oymyakon">Oymyakon, Russia</option>
                <option class="mb20" value="el azizia">Al-Aziziyah, Libya</option>
                <option class="mb20" value="gaza">Gaza, Palestine</option>
                <option class="mb20" value="boston">Boston, USA</option>
                <option class="mb20" value="munich">Munich, Germany</option>


                </select>
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Weather Info</button>
            <div class="text-xs text-center font-medium text-gray-500 dark:text-gray-300">
              It's just for learning purpose so i can try to show some cities name;
            </div>
        </form>
    </div>
  </div>
</body>
</html>
