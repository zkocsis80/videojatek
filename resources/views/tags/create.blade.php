<form action="{{ route('tags.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name"><br>
    <label>Games:</label>
    <select name="games[]" multiple size="10">
        @foreach ($games as $game)
            <option value="{{ $game->id }}">{{ $game->title }}</option>
        @endforeach
    </select>
    <button type="submit">Create Tag</button>
</form>