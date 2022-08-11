<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="../../node_modules/flowbite/src/flowbite.js"></script>
    <title>Calculator</title>
</head>
<body class="flex items-center justify-center h-screen bg-[#F1F4F7]">
<div class="calculator-container">
    <img src="{{ asset('img/logo.svg') }}" alt="Logo" class="logo my-6 justify-self-center">
    <h4 class="title bg-[#E6ECEE] py-3 text-center">Sheet Weight Conversion Calculator</h4>
    <div class="weight text-center my-3">
        <span class="weight-label">Weight</span>
        <span class="weight-value mt-1 font-semibold left-1/2 text-[4rem]">0</span>
    </div>
    <div class="material mx-4">
        <label for="material" class="block mb-2 text-sm text-gray-900 dark:text-gray-400 font-semibold">Material</label>
        <select id="material" class="border cur border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Choose a material</option>
        </select>
    </div>
    <div class="length ml-4 mr-1 mt-4">
        <label for="length" class="block mb-2 text-sm text-gray-900 dark:text-gray-300 font-semibold">Length</label>
        <input type="text" id="length" class="border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full">
    </div>
    <div class="width mr-4 ml-1 mt-4">
        <label for="width" class="block mb-2 text-sm text-gray-900 dark:text-gray-300 font-semibold">Length</label>
        <input type="text" id="width" class="border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full">
    </div>
    <div class="thickness ml-4 mr-1 mt-4 mb-4">
        <label for="thickness" class="block mb-2 text-sm text-gray-900 dark:text-gray-300 font-semibold">Thickness (.25)</label>
        <input type="text" id="thickness" class="border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-full">
    </div>
    <div class="calculate-btn flex flex-col justify-end ml-1 mr-4 mb-4">
        <button type="button" class="text-white bg-[#00A0DE] hover:bg-[#0080b1] focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-full h-[42px]">Calculate</button>
    </div>
</div>
</body>
</html>
