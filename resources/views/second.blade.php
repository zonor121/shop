<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Another one</title>
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h2> okak </h2>

    <p>{{ $b." boddie" }}</p>
    <p>{{ $a+1 }}</p>
    <div>
        @for ($i = 0; $i < count($c); $i++)
        <p>{{ $c[$i] }}</p>
        @endfor
    </div>
</body>
</html>