
<h1>New Game</h1>
<form action="{{ route('games.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="slug" placeholder="Slug">
    <input type="text" name="genre" placeholder="Genre">
    <input type="text" name="platform" placeholder="Platform">
    <input type="date" name="release_date" placeholder="Release Date">
    <input type="text" name="developer" placeholder="Developer">
    <input type="number" name="rating" placeholder="Rating">
    <button type="submit">Save</button>
</form>
