<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="{{ asset('js/flowbite.js') }}"></script>
    @livewireStyles
    <title>Calculator</title>
</head>
<body class="flex items-center justify-center h-screen bg-[#F1F4F7]">
    <livewire:calculator />
    @livewireScripts
</body>
</html>
