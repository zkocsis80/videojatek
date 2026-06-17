<form action="{{ route('games.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
    </div>
    <div>
        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="release_year">Release Year:</label>
        <input type="number" name="release_year" id="release_year" required>
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" step="0.01" required>
    </div>
    <button type="submit">Create Game</button>
</form>
