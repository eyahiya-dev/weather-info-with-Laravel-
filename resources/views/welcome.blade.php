<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="h-screen flex justify-center items-center bg-black">
    <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" action="{{ route('weather') }}" method="POST">
            @csrf
            <h5 class="text-2xl text-center font-medium text-gray-900 dark:text-white">Weather Report of Your City</h5>
            <div class="pb-6">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Choose a country</option>
                <option value="dhaka">Dhaka</option>
                <option value="newDelhi">New Delhi</option>
                <option value="islamabad">Islamabad</option>
                <option value="kathmandu">Kathmandu</option>
                <option value="kabul">Kabul</option>
                </select>
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Weather Info</button>
            <div class="text-xs text-center font-medium text-gray-500 dark:text-gray-300">
                It's just for learning purpose so i can try to show just asian some city
            </div>
        </form>
    </div>
  </div>
</body>
</html>
