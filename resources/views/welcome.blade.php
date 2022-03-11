<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    @php
        $color='red';
    @endphp

    <body>
        <div class="container mx-auto">
            <x-alert :color="$color" class="mb-4">
                <x-slot name="title">
                    Titulo 01
                </x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sint tenetur rem deleniti dolorem reprehenderit quasi repellendus necessitatibus reiciendis, omnis illo eos perspiciatis dolorum, quisquam tempora id optio explicabo rerum?
            </x-alert>
            <x-alert>
                <x-slot name="title">
                    Titulo 02
                </x-slot>
                Hola Vidal
            </x-alert>
            <x-alert>
                <x-slot name="title">
                    Titulo 03
                </x-slot>
                Hola Ruben
            </x-alert>
        </div>
    </body>
</html>
