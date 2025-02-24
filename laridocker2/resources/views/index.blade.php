<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
  <h1>Games List</h1>
  <form>
    <input type="search" name="search" value="{{ $search }}" placeholder="Busque um jogo...">
    <button type="submit">Buscar</button>
  </form>

  <table>
    <thead>
      <tr>
        <th>Title</th>
       
        <th>Genre</th>
        <th>Platform</th>
        <th>Release Date</th>
        <th>Developer</th>
        <th>Rating</th>
        <th>Actions</th>
      </tr>
    </thead>
    @foreach ($games as $game )
        <tr>
          <td>
            <a href="{{ route('games.show', $game->slug) }}">{{ $game->title }}</a> 
           </td>
            <td>{{ $game->genre }}</td>
            <td>{{ $game->platform }}</td>
            <td>{{ $game->release_date }}</td>
            <td>{{ $game->developer }}</td>
            <td>{{ $game->rating }}</td>
           <td>
            <a href="{{ route('games.edit', $game->slug) }}">Edit</a> |
            <form action="{{ route('games.destroy', $game->slug) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
           </td>
        </tr>
    @endforeach
   </table>

   <a href="{{ route('games.create') }}"> <button>New game</button></a>
</body>

</html>