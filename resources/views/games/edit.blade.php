<form action="{{ route('games.update', $game->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $game->title }}" required>
    </div>
    <div>
        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $game->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="release_year">Release Year:</label>
        <input type="number" name="release_year" id="release_year" value="{{ $game->release_year }}" required>
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="{{ $game->price }}" step="0.01" required>
    </div>
    <button type="submit">Update Game</button>
</form>
<br>
<form action="{{ route('games.destroy', $game->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Game</button>
</form>    