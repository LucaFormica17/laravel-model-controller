<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @foreach ($movies as $movie)    
                    <div class="card text-center py-3 my-3">
                        <h2>{{$movie['title']}}</h2>
                        <h4>{{$movie['original_title']}}</h4>
                        <span>Paese: {{$movie['nationality']}}</span>
                        <span>Data Uscita: {{$movie['date']}}</span>
                        <span>Voto: {{$movie['vote']}}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

</body>

</html>