<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    @php
        $color='red';
        $alert='alert2';
    @endphp

    <body>
        <div class="container mx-auto">
            <x-alert :color="$color" class="mb-4">
                <x-slot name="title">
                    Titulo 01
                </x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sint tenetur rem deleniti dolorem reprehenderit quasi repellendus necessitatibus reiciendis, omnis illo eos perspiciatis dolorum, quisquam tempora id optio explicabo rerum?
            </x-alert>
            
            <x-alert2 color="blue" class="mb-4">
                <x-slot name="title">
                    Título 02
                </x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa doloremque laboriosam tempora illo exercitationem illum perferendis sint. Iste numquam quisquam eligendi sunt necessitatibus est quibusdam? Labore, harum! Atque, suscipit voluptatum.
            </x-alert2>

            <x-dynamic-component :component="$alert">
                <x-slot name="title">
                    Título 02
                </x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa doloremque laboriosam tempora illo exercitationem illum perferendis sint. Iste numquam quisquam eligendi sunt necessitatibus est quibusdam? Labore, harum! Atque, suscipit voluptatum.
            </x-dynamic-component>

        </div>
    </body>
</html>
