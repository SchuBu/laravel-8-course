<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 8 Kurs</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@100;300;400;500;700;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @livewireStyles
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
<livewire:toasts />
<div class="w-64 mt-3 ml-3 fixed">
    <div class="">
        <a href="https://www.buymeacoffee.com/schubu">
            <img
                src="https://img.buymeacoffee.com/button-api/?text=Buy me a coffee&emoji=&slug=schubu&button_colour=FFDD00&font_colour=000000&font_family=Cookie&outline_colour=000000&coffee_colour=ffffff"></a>
    </div>
</div>
@if(!Route::is('admin*'))
    <x-layouts.header/>
@else
    <x-layouts.header-backend/>
@endif
<x-flash-messages/>
{{ $slot }}
<x-layouts.footer/>
@toastScripts
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
<script src="//unpkg.com/alpinejs" defer></script>
@livewireScripts
</body>
</html>
