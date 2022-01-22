<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @livewireStyles
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
    <title>Magic Lola</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
       

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
           <a href="{{ route('login') }}"> <img class="h-ten" src="https://user-images.githubusercontent.com/87216480/150587041-3a0b704c-6e33-4043-b0a4-3fdd1812f420.jpeg">
        </div>
        @if (Route::has('login'))
        <div class="hidden fixed px-7 py-2 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline pl-nineteen">Log In</a>

            
            @endauth
        </div>
        @endif

        <div class="flex fixed btm-0 justify-center mt-4  sm:items-center sm:justify-between">
            <div class="text-sm text-black-500 sm:text-left">
                <div class="flex items-center">
                    email: steve@iacademy.com | password: sd1awebprog
                </div>

                <div class="mt-3 ml-4 text-center text-sm text-gray-500 sm:text-left sm:ml-0">
                  ©2022
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>