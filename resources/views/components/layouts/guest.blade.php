<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprendible - {{ $title ?? '' }}</title>
</head>
<body>
    <div id="container">
        <section class="nav">
            <x-layouts.navigation />
        </section>
        @if (session('status'))
            {{ session('status') }}
        @endif
        <section class="content">
            {{ $content }}
        </section>
        <footer>
            <div>Curso Aprendible</div>
        </footer>
    </div>
</body>
</html>
