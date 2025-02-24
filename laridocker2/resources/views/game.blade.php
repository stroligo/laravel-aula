<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('home') }}">Back</a>
    <h1>{{ $game->title }}</h1>
    <ul>
        <li><strong>Title:</strong> {{ $game->title }}</li>
        <li><strong>Slug:</strong> {{ $game->slug }}</li>
        <li><strong>Genre:</strong> {{ $game->genre }}</li>
        <li><strong>Platform:</strong> {{ $game->platform }}</li>
        <li><strong>Release Date:</strong> {{ $game->release_date }}</li>
        <li><strong>Developer:</strong> {{ $game->developer }}</li>
        <li><strong>Rating:</strong> {{ $game->rating }}</li>
    </ul>
</body>
</html>