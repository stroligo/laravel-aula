
<h1>Edit Game</h1>
<form action="{{ route('games.update', $game->slug) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $game->title }}" placeholder="Title">
    <input type="text" name="slug" value="{{ $game->slug }}" placeholder="Slug">
    <input type="text" name="genre" value="{{ $game->genre }}" placeholder="Genre">
    <input type="text" name="platform" value="{{ $game->platform }}" placeholder="Platform">
    <input type="date" name="release_date" value="{{ $game->release_date }}" placeholder="Release Date">
    <input type="text" name="developer" value="{{ $game->developer }}" placeholder="Developer">
    <input type="number" name="rating" value="{{ $game->rating }}" placeholder="Rating">
    <button type="submit">Save</button>
</form>
