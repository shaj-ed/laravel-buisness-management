<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? "Buisness Management" }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-50">
        <x-sidebar/>
        <x-header/>

        <main class="ml-64 mt-16 p-6">
            {{ $slot }}
        </main>
    </body>
</html>