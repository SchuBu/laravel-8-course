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
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
@if(!Route::is('admin*'))
    <x-layouts.header/>
@else
    <x-layouts.header-backend/>
@endif
<x-flash-messages/>
<main class="flex flex-1 container max-w-7xl mx-auto px-5 lg:px-40 space-x-5 mb-5">
    {{ $slot }}
    @if(!Route::is(['admin*','login','logout','password.*']))
        <div class="space-y-5" style="width:300px;">

            <div class="bg-blue-700 shadow rounded-sm">
                <h2 class="text-white text-2xl p-5">Newsletter</h2>
                <div class="border-t border-blue-600 text-white p-5 text-sm">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum laboriosam omnis repudiandae unde.
                    <div class="flex mt-5">
                        <input type="text" name="newsletter" class="rounded-l-sm text-gray-800 px-4 py-2 h-12"
                               placeholder="E-Mail Adresse"
                               style="min-width: 0px;">
                        <button type="button" class="bg-blue-800 h-12 text-xs px-4 py-2 rounded-r-sm">abonnieren
                        </button>
                    </div>
                </div>
            </div>

            <x-post.newest/>
            <x-post.categories/>
            <x-post.trending/>
        </div>
    @endif
</main>
<x-layouts.footer/>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
