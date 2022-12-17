<!DOCTYPE html>
<html class="h-full" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprendible - {{ $title ?? '' }}</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/scss/app.scss'])
</head>
<body class="h-full p-4 box-border">
    <div id="container" class="bg-blue-100 h-full relative">
        @if (session('status'))
        <div class="bg-green-600 text-white text-center py-1.5">
            {{ session('status') }}
        </div>
        @endif
        <section class="nav">
            <x-layouts.navigation />
        </section>
        <section class="content w-1/2 m-auto">
            {{ $content }}
        </section>
        <footer class="absolute bottom-0 w-full bg-blue-300 m-auto">
            <div class="text-center">Curso Aprendible</div>
        </footer>
    </div>
</body>
</html>
