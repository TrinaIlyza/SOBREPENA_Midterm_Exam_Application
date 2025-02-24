<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Products</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .movie { border: 1px solid #ddd; padding: 15px; margin-bottom: 10px; border-radius: 8px; background-color: #f9f9f9; }
        .movie h2 { margin: 0; }
        .movie p { margin: 5px 0; }
    </style>
</head>
<body>
    <h1>Movie Products</h1>
    @foreach($movies as $movie)
        <div class="movie">
            <h2>{{ $movie['title'] }}</h2>
            <p><strong>Director:</strong> {{ $movie['director'] }}</p>
            <p><strong>Genre:</strong> {{ $movie['genre'] }}</p>
            <p><strong>Rating:</strong> {{ $movie['rating'] }}/10</p>
        </div>
    @endforeach
</body>
</html>
