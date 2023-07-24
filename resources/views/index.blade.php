<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        @foreach ($movies as $movie)
            <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                <h2>{{ $movie->title }}</h2>
                <p>Nazionalità: {{ $movie->nationality }}</p>
                <p>Data di uscita: {{ $movie->date }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>