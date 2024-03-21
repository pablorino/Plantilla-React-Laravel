<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MEDAC</title>
    @viteReactRefresh
    @vite('resources/js/app.js')
</head>

<body class="antialiased">
    <div id='root'></div>
    <h1>Hola</h1>
</body>

</html>
