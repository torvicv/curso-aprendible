<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprendible - {{ $title ?? '' }}</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div id="container m-4">
        <section class="nav">
            <x-layouts.navigation />
        </section>
        @if (session('status'))
            {{ session('status') }}
        @endif
        <section class="content w-1/2 m-auto">
            {{ $content }}
        </section>
        <footer class="fixed bottom-1 left-1 w-full">
            <div class="text-center">Curso Aprendible</div>
        </footer>
    </div>
</body>
</html>
